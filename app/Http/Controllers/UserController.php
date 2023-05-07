<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function login(Request $request)
    {   session()->get('userauth') ;
        // creating a session to store user data into it and also to configure the middleware
        $email       = $request->email ;
        $password    = $request->password ;

        $check_login = User::where(['password' => $password , 'email' => $email])->first();

        //check if a user exists with the given crediantals

        if(isset($check_login[0]->id))
        {
            $userData = User::where('id' , $check_login[0]->id)->first();
            session()->put('userauth' , $userData); // stored data into userauth session
            return redirect('dashboard');

        }
        else
        {
            return redirect()->back()->with('error' , 'No Data found Invalid Crediantals');
        }
    }
}
