<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teacher=DB::table('teachers')
            ->join('subjects', 'teachers.subject_id', '=', 'subjects.id')
            ->join('designations', 'teachers.designation_id', '=', 'designations.id')
            ->select('teachers.*','subjects.subject_name','designations.designation_name as designation')
            ->get();
        return view('admin.pages.teacher.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $designations=DB::table('designations')->get();
        $classes=DB::table('calsses')->get();
        $sections=DB::table('sections')->get();
        $subjects=DB::table('subjects')->get();
        return view('admin.pages.teacher.create', compact('designations', 'subjects','classes','sections'));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->hasFile('image')){
            $image = time().'.'.$request->image->extension();
//            $file_path=public_path('admin/images/teacher');
           $request->image->move(public_path('admin/images/teacher'),$image);
        }
        DB::table('teachers')->insert([
            'name'=>$request->name,
            'subject_id'=>$request->subject,
            'designation_id'=>$request->designation,
            'mpo_code'=>$request->mpo,
            'appoint_date'=>$request->joining,
            'education'=>$request->education,
            'blood'=>$request->blood,
            'tin'=>$request->tin,
            'nid'=>$request->nid,
            'mobile'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'social'=>$request->social,
            'status'=>$request->status,
            'image'=>$image,
            'created_at'=>Carbon::now()
        ]);
        $teach=DB::table('teachers')->latest()->first();
        if ($request->class!='Select Class'){
            DB::table('class_teachers')->insert([
                'teacher_id'=>$teach->id,
                'class_name'=>$request->class,
                'section_name'=>$request->section,
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $TData=DB::table('teachers')->where('id', '=', $id)->first();
        return view('admin.pages.teacher.view', compact('TData'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacher=DB::table('teachers')->where('id','=',$id)->first();
        $designations=DB::table('designations')->get();
        $classes=DB::table('calsses')->get();
        $sections=DB::table('sections')->get();
        $subjects=DB::table('subjects')->get();
        return view('admin.pages.teacher.update', compact('designations', 'subjects','classes','sections','teacher'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if($request->hasFile('image')){
            $image = time().'.'.$request->image->extension();
            $teacher= DB::table('teachers')->find($id);
            $image_path = public_path('admin/images/teacher/') . $teacher->image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $request->image->move(public_path('admin/images/teacher/'),$image);
            DB::table('teachers')->where('id', $id)->update([
                'image'=>$image
            ]);
        }
        DB::table('teachers')->where('id', $id)->update([
            'name'=>$request->name,
            'subject_id'=>$request->subject,
            'designation_id'=>$request->designation,
            'mpo_code'=>$request->mpo,
            'appoint_date'=>$request->joining,
            'education'=>$request->education,
            'blood'=>$request->blood,
            'tin'=>$request->tin,
            'nid'=>$request->nid,
            'mobile'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'status'=>$request->status,
            'updated_at'=>Carbon::now()
        ]);
        return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $teacher= DB::table('teachers')->find($id);
        $image_path = public_path('admin/images/teacher/') . $teacher->image;
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        DB::table('teachers')->where('id', $id)->delete();


    }
}
