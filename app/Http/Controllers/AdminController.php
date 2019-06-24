<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function listruser(){
        $st=DB::select("select * from tbl_login,tbl_user where type='1' and tbl_login.id=tbl_user.id");

        return view('admintest.admin_list_user',compact('st'));
         }
         
    public function listrexhi(){
        $sd=DB::select("select * from tbl_login,tbl_exhibitor where type='2' and tbl_login.id=tbl_exhibitor.id");

        return view('admintest.admin_list_exhibitor',compact('sd'));
         }
         public function listcompany()
         {
            $ss=DB::select("select * from tbl_login,tbl_company where type='3' and tbl_login.id=tbl_company.id");
    
            return view('admintest.admin_list_company',compact('ss'));
             }
}

