<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function addstudent()
	{
		
	
		//$countries = DB::table("countries")->pluck("name","id");
		$countries = DB::table("tbl_country")->pluck("name","id");
	
		return view('user.registration',compact('countries'));
	

		
		//return view('admin.add_student',compact('departments'));
	}

    public function getStateList(Request $request)
    {
        $states = DB::table("tbl_state")
        ->where("country_id",$request->country_id)
        ->pluck("name","id");
        return response()->json($states);
    }

    public function getCityList(Request $request)
    {
        $cities = DB::table("tbl_district
        ")
        ->where("state_id",$request->state_id)
        ->pluck("name","id");
        return response()->json($cities);
	}
}
