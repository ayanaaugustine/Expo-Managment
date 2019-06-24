<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class UserviewController extends Controller
{
    public function index() {
        $users = DB::select('select * from tbl_user');
        return view('admintest.profile',['users'=>$users]);
     }
     public function insert()
     {
         
     }
  
}
