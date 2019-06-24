<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\addrequest;
use App\comprofile;
class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = DB::select('select * from tbl_addexpo');
        return view('company.requestexpoview',['users'=>$users]);
    }
    public function request(Request $data)
    {
        $d=$data->get('expotitle');
        // $users = addticket::where('expotitle',$d)->get();

        $users = DB::table('tbl_addexpo')->where('expotitle',$d)->get();
       
        return view('company.addrequest',['users'=>$users]);
    }
    public function requestview(Request $data)
    {
        
        // $users = addticket::where('expotitle',$d)->get();
    $a=comprofile::all();
   // $f=$data->get('companyname');
       $users = DB::select('select * from tbl_addrequest');
       //$users=DB::where('id','=',Auth::id())->get();
       // return view('exhibitor.addrequestview',['users'=>$users]);
        return view('exhibitor.addrequestview',compact('users'),compact('a',$a));
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

     
        
       return Redirect('/request')->with('message', ' this booth is alredy reserved...');

    }

    else

    {
          $c=Auth::user()->id;
        $h=DB::select("select * from tbl_addrequest where id='$c'");
        $v="";
        foreach($h as $r)
        { 
           $v=$r->request;
        }
            if($v==$d)
            {
                return Redirect('/addrequest')->with('alert', ' request already adddd...');
            }
            else{

           
            $addrequest= addrequest::create([
                'expotitle' => $data['expotitle'],
                'sdate' => $data['sdate'],
                'edate' => $data['edate'],
                'noofbooth' => $data['noofbooth'],
                'request' => $data['request'],
                'id'=>Auth::user()->id,
                
                
                
            ]);
            $addrequest->save();
            
        return Redirect('/addrequest')->with('alert', ' request adddd...');
            }
        

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
    public function destroy(Request $request)
    {
        DB::delete('delete from tbl_addrequest where req_id = ?',[$request->req_id]);
        // $result=addproduct::delete($request->add_id); 
        return redirect('/requestview');
    }
}
