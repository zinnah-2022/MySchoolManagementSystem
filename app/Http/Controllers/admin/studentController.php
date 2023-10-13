<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use function mysql_xdevapi\expression;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students=DB::table('students')
            ->leftJoin('years','students.session_id' ,'=', 'years.id')
            ->leftJoin('calsses','students.class_id', '=', 'calsses.id')
            ->leftJoin('sections', 'students.section_id', '=', 'sections.id')
            ->leftJoin('personals','students.id', '=', 'personals.student_id')
            ->select('personals.*','students.*', 'sections.section_name', 'calsses.class_name', 'years.year_name')
            ->get();
        return view('admin.pages.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sessions=DB::table('years')->get();
        $sections=DB::table('sections')->get();
        $classes=DB::table('calsses')->get();
        return view('admin.pages.student.create', compact('sessions','sections','classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            if($request->hasFile('image')){
                $image = time().'.'.$request->image->extension();
//            $file_path=public_path('admin/images/teacher');
                $request->image->move(public_path('admin/images/student'),$image);
            }
           $id=DB::table('students')->insertGetId([
               'roll'=>$request->roll,
               'session_id'=>$request->year,
               'class_id'=>$request->class,
               'section_id'=>$request->section,
               'e_name'=>$request->s_name_e,
               'b_name'=>$request->s_name_b,
               'dob'=>$request->dob,
               'dob_num'=>$request->dob_num,
               'nationality'=>$request->nationality,
               'religion'=>$request->religion,
               'blood'=>$request->blood,
               'gender'=>$request->gender,
               'present_address'=>$request->c_address,
               'permanent_address'=>$request->p_address,
               'image'=>$image,
               'status'=>$request->status,
           ]);
            DB::table('personals')->insert([
                'student_id'=>$id,
                'father_name_e'=>$request->f_name_e,
                'father_name_b'=>$request->f_name_b,
                'mother_name_e'=>$request->m_name_e,
                'mother_name_b'=>$request->m_name_b,
                'father_nid'=>$request->f_nid,
                'mother_nid'=>$request->m_nid,
                'father_occ'=>$request->f_occ,
                'mother_occ'=>$request->m_occ,
                'father_phone'=>$request->f_phone,
                'mother_phone'=>$request->m_phone,
                'guardian_name'=>$request->guardian,
                'guardian_phone'=>$request->g_phone,
            ]);


        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $students=DB::table('students')
            ->leftJoin('years','students.session_id' ,'=', 'years.id')
            ->leftJoin('calsses','students.class_id', '=', 'calsses.id')
            ->leftJoin('sections', 'students.section_id', '=', 'sections.id')
            ->select('students.*', 'sections.section_name', 'calsses.class_name', 'years.year_name')
            ->where('students.id', $id)->first();
        $personalView=DB::table('personals')->where('student_id', $id)->first();
        return view('admin.pages.student.view',['view'=>$students], ['personal'=>$personalView]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=DB::table('students')->where('id', $id)->first();
        $personal=DB::table('personals')->where('student_id', $id)->first();

        $sessions=DB::table('years')->get();
        $sections=DB::table('sections')->get();
        $classes=DB::table('calsses')->get();
        return view('admin.pages.student.update', compact('sessions','sections','classes','student', 'personal'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->hasFile('image')){
            $image = time().'.'.$request->image->extension();
            $student= DB::table('students')->find($id);
            $image_path = public_path('admin/images/student/') . $student->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }

            $request->image->move(public_path('admin/images/student/'),$image);
            DB::table('students')->where('id', $id)->update([
                'image'=>$image
            ]);
        }
        DB::table('students')->where('id', $id)->update([
            'roll'=>$request->roll,
            'session_id'=>$request->year,
            'class_id'=>$request->class,
            'section_id'=>$request->section,
            'e_name'=>$request->s_name_e,
            'b_name'=>$request->s_name_b,
            'dob'=>$request->dob,
            'dob_num'=>$request->dob_num,
            'nationality'=>$request->nationality,
            'religion'=>$request->religion,
            'blood'=>$request->blood,
            'gender'=>$request->gender,
            'present_address'=>$request->c_address,
            'permanent_address'=>$request->p_address,
            'status'=>$request->status,
        ]);
        DB::table('personals')->where('student_id', $id)->update([
            'father_name_e'=>$request->f_name_e,
            'father_name_b'=>$request->f_name_b,
            'mother_name_e'=>$request->m_name_e,
            'mother_name_b'=>$request->m_name_b,
            'father_nid'=>$request->f_nid,
            'mother_nid'=>$request->m_nid,
            'father_occ'=>$request->f_occ,
            'mother_occ'=>$request->m_occ,
            'father_phone'=>$request->f_phone,
            'mother_phone'=>$request->m_phone,
            'guardian_name'=>$request->guardian,
            'guardian_nid'=>$request->g_nid,
            'guardian_phone'=>$request->g_phone,
            'guardian_conn'=>$request->g_conn,
            'guardian_address'=>$request->g_address,
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student= DB::table('students')->find($id);
        $image_path = public_path('admin/images/student/') . $student->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        DB::table('students')->where('id', $id)->delete();
        DB::table('personals')->where('student_id', $id)->delete();


    }

}
