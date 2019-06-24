<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
       //return view('admin.home.homecontent');
       //return view('home');
       //return Auth::logout();
     if(Auth::user()->type == 'admin')
     {
         
        //if(Auth::user()->status == '1')
        //{
        // return view('admn.home.homecontents');
        return view('admintest.home');
     //}
        
     }
     elseif(Auth::user()->type == '1')
     {
        
           //return view('users.user');
//return  Auth::user()->status;
if(Auth::user()->status=='0')
{
    Auth::logout();
    return redirect('/login');                  
}
else
{
    return view('users.user');
}
    
    }
    elseif(Auth::user()->type == '2')
    {
        if(Auth::user()->status=='0')
{
    Auth::logout();
    return redirect('/login');                  
}
else
{
        return view('exhibitor.excontent');
       // return view('ex.index');
    }
}
     elseif(Auth::user()->type == '3')
     {
        if(Auth::user()->status=='0')
        {
            Auth::logout();
            return redirect('/login');                  
        }
        else
        {
        return view('company.cmcontent');
            
            }
    
     }
    
}

}

    

