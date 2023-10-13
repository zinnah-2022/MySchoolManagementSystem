<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class classController extends Controller
{
    public function index(){

        return view('admin.pages.class.create');
    }
    public function class_view(){
        $years= DB::table('calsses')->get();
        return response()->json($years);
    }


    public function store(Request $request){
        DB::table('calsses')->updateOrInsert([
            'class_name'=>$request->class_name,
            'created_at'=>Carbon::now()
        ]);
    }
    public function class_delete($id){
        DB::table('calsses')->where('id', '=', $id)->delete();
    }
}
