<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\boothallocate;
 use App\Http\Controllers\Redirect;

class AllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $data)
    {
        $d=$data->get('request');
       $users = DB::table('tbl_boothallocate')->where('request',$d)->get();
    
    
        
    if(count($users)!=0)
    {

     
        
       return Redirect('/requestview')->with('alert', ' booth allocated...');

    }

    else

    {
      $boothallocate= boothallocate::create([
            'expotitle' => $data['expotitle'],
            'companyname' => $data['companyname'],
            'sdate' => $data['sdate'],
            'edate' => $data['edate'],
            'request' => $data['request'],
           
            
        ]);
        $boothallocate->save();
        return redirect('/requestview')->with('alert', ' you already allocated this booth...');
    }
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
