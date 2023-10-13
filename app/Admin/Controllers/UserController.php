<?php
namespace App\Admin\Controllers;
use App\Admin\Forms\Setting;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use OpenAdmin\Admin\Layout\Content;

class UserController extends Controller
{
    public function index(){
        return ('this si');
    }
    public function store(Request $request){
        dd($request->all());
    }

}
