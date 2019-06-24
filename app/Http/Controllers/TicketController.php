<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\addticket;
class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $d=$data->get('expotitle');
        $users = DB::table('tbl_addticket')->where('expotitle',$d)->get();
        if(count($users)!=0)
        {
    
         
            
           return Redirect('/addticket')->with('alert', ' you already added tickets for this expo');
    
        }
    
        else
        {
        $addticket= addticket::create([
            'expotitle' => $data['expotitle'],
            'tickettype' => $data['tickettype'],
            'ticketrate' => $data['ticketrate'],
            'nooftickets' => $data['nooftickets'],
            'id'=>Auth::user()->id,
            
            
            
        ]);
        $addticket->save();
        return redirect('/addticket')->with('message', ' tickets added...');
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
