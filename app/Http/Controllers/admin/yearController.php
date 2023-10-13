<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use http\Env\Url;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class yearController extends Controller
{
    public function index(){

        return view('admin.pages.year.create');
    }
    public function year_view(){
        $years= DB::table('years')->get();
        return response()->json($years);
    }


    public function store(Request $request){
       DB::table('years')->updateOrInsert([
           'year_name'=>$request->year_name,
           'created_at'=>Carbon::now()
       ]);
    }
    public function year_delete($id){
        DB::table('years')->where('id', '=', $id)->delete();
    }

}
