<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class settingController extends Controller
{
    public function index()
    {

        $settings=DB::table('settings')->first();
        return view('admin.pages.setting', compact('settings'));

    }

    public function insert(Request $request){
        if($request->hasFile('logo')){
        $logo = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('admin/images'), $logo);
        DB::table('settings')->where('id', 1)->update([
                'logo'=>$logo
            ]);
        }
            DB::table('settings')->where('id', 1)->update([
                'name'=>$request->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'eiin'=>$request->eiin,
                'est'=>$request->est,
                'code'=>$request->code,
                'address'=>$request->address,
            ]);
        Toastr::success('Messages in here', 'Data Update Successfully');
        return redirect()->back();

    }
}
