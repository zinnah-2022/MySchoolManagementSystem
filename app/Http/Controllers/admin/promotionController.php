<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class promotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {
            $sessions = DB::table('years')->get();
            $classes = DB::table('calsses')->get();
            $sections = DB::table('sections')->get();
            $students = DB::table('students')->
            where('session_id', 'like', "%{$request->year}%")
                ->Where('class_id', 'like', "%{$request->mclass}%")
                ->orWhere('section_id', 'like', "%{$request->section}%")
                ->leftJoin('sections', 'students.section_id', '=', 'sections.id')->
                select('students.*', 'sections.section_name')->get();
            return view('admin.pages.promotion.index', compact('sessions', 'classes', 'students','sections'));


        } catch (Exception $e) {

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
dd($request->all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sessions = DB::table('years')->get();
        $classes = DB::table('calsses')->get();
        $students = DB::table('students')->where(
            ['session_id', $request->year],
            ['class_id', $request->mclass])->get();
        return view('admin.pages.promotion.index', compact('sessions', 'classes', 'students'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function promotionData(Request $request){
        if ($request->idName != null){
            for ($i=0; $i<count($request->idName); $i++) {
                DB::table('students')
                    ->where('id',$request->idName[$i])
                    ->update([
                        'class_id' => $request->mclass[$i],
                        'session_id' => $request->msession[$i],

                    ]);

            }
            return redirect()->back();
        }
    }
}
