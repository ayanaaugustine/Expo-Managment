<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\addticket;

class AddTicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select * from tbl_addexpo');
        return view('exhibitor.addticket',['users'=>$users]);
    }
    public function fetch(Request $data)
    {
        $users = DB::select('select * from tbl_addexpo');
        //return view('exhibitor.addticket',['users'=>$users]);
        $d=$data->get('expotitle');
        $users = addticket::where('expotitle',$d)->get();
        return view('users.addticketview',['users'=>$users]);
    }
    public function book(Request $data)
    {
        $d=$data->get('expo');
        // $users = addticket::where('expotitle',$d)->get();

        $users = DB::table('tbl_addexpo')->where('expotitle',$d)->get();
        return view('users.payment',['users'=>$users]);
      
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
