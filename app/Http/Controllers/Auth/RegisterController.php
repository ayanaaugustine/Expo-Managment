<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\login;
use App\exhiprofile;
use App\comprofile;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            //'name' => ['required', 'string', 'max:255'],
            //'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           // 'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'type' => $data['type'],
            'status' => 1,
            'password' => Hash::make($data['password']),
        ]);
        if($data['type']==1)
        {
            login::create([ 
                'id'=> $user->id,
                'name' => $data['name'],
                'age' => $data['age'],
                'housename' => $data['housename'],
                'mobno' => $data['mobno'],
                'country' => $data['country'],
                'state' => $data['state'],
                'district' => $data['district'],
                'status' => 1,

            ]);
        }
       
    
       elseif($data['type']==2)
        {
            exhiprofile::create([ 
                'id'=> $user->id,
                'name' => $data['name'],
                 'mobno' => $data['mobno'],
                'country' => $data['country'],
                'state' => $data['state'],
                'experience' => $data['experience'],
                'address' => $data['address'],
                'image' => $data['image'],
                'status' => 1,

            ]);
    }
    
    elseif($data['type']==3)
    {
        comprofile::create([ 
            'id'=> $user->id,
            'name' => $data['name'],
             'mobno' => $data['mobno'],
            'country' => $data['country'],
            'state' => $data['state'],
            'district' => $data['district'],
            'comexperience' => $data['comexperience'],
            'comaddress' => $data['comaddress'],
            'landmark' => $data['landmark'],
            'status' => 1,

        ]);
}
return $user;
}

}

