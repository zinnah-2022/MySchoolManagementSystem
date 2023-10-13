<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class designationController extends Controller
{
    public function index(){

        return view('admin.pages.designation.create');
    }
    public function designation_view(){
        $years= DB::table('designations')->get();
        return response()->json($years);
    }


    public function store(Request $request){
        DB::table('designations')->updateOrInsert([
            'designation_name'=>$request->designation_name,
            'created_at'=>Carbon::now()
        ]);
    }
    public function designation_delete($id){
        DB::table('designations')->where('id', '=', $id)->delete();
    }
}
