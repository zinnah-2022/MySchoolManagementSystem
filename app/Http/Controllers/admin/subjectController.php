<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class subjectController extends Controller
{
    public function index(){

        return view('admin.pages.subject.create');
    }
    public function subject_view(){
        $years= DB::table('subjects')->get();
        return response()->json($years);
    }


    public function store(Request $request){
        DB::table('subjects')->updateOrInsert([
            'subject_name'=>$request->subject_name,
            'created_at'=>Carbon::now()
        ]);
    }
    public function subject_delete($id){
        DB::table('subjects')->where('id', '=', $id)->delete();
    }

}
