<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\transaction;

class TransactionController extends Controller
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
        $d=$data['expotitle'];
        $s=$data['count'];
        $y=Auth::user()->id;
        $transaction= transaction::create([
            'count' => $data['count'],
            'expotitle' => $data['expotitle'],
            'lid'=>Auth::user()->id,
            ]);
            
   $transaction->save();
   $w=$transaction->id;
   $users = DB::table('tbl_addticket')->where('expotitle', '=', $d)->get();
   foreach($users as $e)
   {
       $t=$e->nooftickets;
       $ts=$t-$s;
   }
 
   
  $update=DB::select("update tbl_addticket set nooftickets='$ts' where expotitle='$d'");
  // return $users;
   //transaction::where('id', $pid)->update(['nooftickets' => DB::raw('nooftickets - count')]);

   //return redirect('/addexpoview')->with('alert', ' tickets  booked...');

  $view= DB::select("select * from tbl_payment where pid='$w'");
 
   return view('user/invoice',compact('view'));
   
//return  $view;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bill()
    {
        $users = DB::select('select * from tbl_addexpo');
        return view('user.invoice',['users'=>$users]);
    }
    
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
