<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class sectionController extends Controller
{
    public function index(){

        return view('admin.pages.section.create');
    }
    public function section_view(){
        $years= DB::table('sections')->get();
        return response()->json($years);
    }


    public function store(Request $request){
        DB::table('sections')->updateOrInsert([
            'section_name'=>$request->section_name,
            'created_at'=>Carbon::now()
        ]);
    }
    public function section_delete($id){
        DB::table('sections')->where('id', '=', $id)->delete();
    }
}
