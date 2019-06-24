<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\addproduct;
class ProductviewController extends Controller
{
    public function index() {
        $users = addproduct::all();
        return view('users.productview',['users'=>$users]);
     }
}
