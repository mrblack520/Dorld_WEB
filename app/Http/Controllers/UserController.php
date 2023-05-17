<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use DB;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function login(Request $request)
    {   session()->get('userauth') ;
        // creating a session to store user data into it and also to configure the middleware
        $email       = $request->email ;
        $password    = $request->password ;

        $check_login = DB::table("users")->where(['email'=>$email])->first();
        $pass = $check_login->password;
        // dd($check_login);
        //check if a user exists with the given crediantals
        if(Hash::check($password, $pass)){
            //enter your code
        // }
        // if($check_login == false)
        // {
        //     // $userData = User::where('id' , $check_login[0]->id)->first();
            return redirect('dashboard')-> with('error' , 'No Data found Invalid Crediantals');

        }
        else
        {
            
            session()->put('userauth'); // stored data into userauth session
            return redirect('page_login');
        }
    }
}
