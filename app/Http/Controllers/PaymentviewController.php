<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class PaymentviewController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from tbl_payment where ');
       // return view('users.addexpoview',['users'=>$users]);
    }

}
