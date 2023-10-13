<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class classTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers=DB::table('teachers')->get();
        $sections=DB::table('sections')->get();
        $classes=DB::table('calsses')->get();
        $classTeahcer=DB::table('teachers')
            ->rightJoin('class_teachers', 'teachers.id' ,'=', 'class_teachers.teacher_id')
            ->select('class_teachers.*', 'teachers.name')->get();
        return view('admin.pages.classTeacher.index',compact('classTeahcer','teachers','sections','classes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('class_teachers')->insert([
            'teacher_id'=>$request->teacher_id,
            'class_name'=>$request->class,
            'section_name'=>$request->section,
        ]);
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
        DB::table('class_teachers')->where('id', $id)->delete();
    }
}
