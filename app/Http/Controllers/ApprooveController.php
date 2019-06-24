<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\User;
//use App\Auth\Register;
use View;
class ApprooveController extends Controller
{
    public function Approve($id)
    {
    $value = User::where('id', '=', $id)->get();
     //  $st=DB::select("select * from tbl_user,tbl_login where type='1' and tbl_user.id=tbl_login.id");
       foreach ($value as $object)
       { 
        if($object->status == '1')
           {
            User::where('id', $id)
            ->update(['status' => 0]);
               
           }
        else
           {
            User::where('id', $id)
            ->update(['status' => 1]);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
      return redirect('/listruser');
    }
   public function approveExhibitor($id)
    {
    
       $value = User::where('id', '=', $id)->get();
       //$st=DB::select("select * from tbl_reg,logins where role='1' and tbl_reg.reg_id=logins.reg_id");
       foreach ($value as $object)
       { 
        if($object->status == '1')
           {
            User::where('id', $id)
            ->update(['status' => 0]);
               
           }
        else
           {
            User::where('id', $id)
            ->update(['status' => 1]);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
      return redirect('/listrexhi');
    }
    public function approveCompany($id)
    {
    
       $value = User::where('id', '=', $id)->get();
       //$st=DB::select("select * from tbl_reg,logins where role='1' and tbl_reg.reg_id=logins.reg_id");
       foreach ($value as $object)
       { 
        if($object->status == '1')
           {
            User::where('id', $id)
            ->update(['status' => 0]);
               
           }
        else
           {
            User::where('id', $id)
            ->update(['status' => 1]);
           }
           
         }
        // return View('/Admins/accordion');
        //return view('');
      return redirect('/listcompany');
    }
    /*public function deleteBuilder($id)
    {
    
      $a=$id;
      if (is_array($a)) 
      {
          User::destroy($a);
      }
      else
      {
          User::findOrFail($a)->delete();
      }
      return redirect('/accordion');
    
    }
    public function deleteCustomer($id)
    {
       $a=$id;
      if (is_array($a)) 
      {
          User::destroy($a);
      }
      else
      {
          User::findOrFail($a)->delete();
      }
      return redirect('/approve');
    }
    public function search(Request $req)
    {
      $search=$req->input('search');
      $st=DB::select("select * from tbl_reg,logins where reg_fname='$search' and logins.reg_id=tbl_reg.reg_id;");
      return view('Admins/accordion',compact('st'));
    }*/
}