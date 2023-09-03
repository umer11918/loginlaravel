<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Session;
class Users extends Controller
{
    //
    function userlist()
    {
        // return Session::get('logData');
        $user=User::all();
        return view('userlist' , ['user'=>$user] );
    }
    function create()
    {
        return view('create');
    }
    public function loginsubmit(Request $request) {
        // print_r($request->input());
        User::select('*')->where(
            [
                ['email','=',$request->email],
            ['password','=',$request->password]]
        )->get();
        $request->session()->put('logData' ,[$request->input()]);
        return redirect('/userlist');

    }
    public function createsubmit(Request $request) {
        {
            $user = new User;
            $user->name=$request->name;
            $user->email=$request->email;
            $user->password=$request->password;
            $result=$user->save();
            if($result)
            {
                $request->session()->put('logData' ,[$request->input()]);

                return redirect('/userlist');
            }
        }
    }




    // function loginsubmit(Request $req)
    // {
    //     print_r($req->input());
    // }
    function layout()
    {
        return view('layout');
    }
    // function login()
    // {
    //     return view('login');
    // }
    // function loginsubmit(Request $req)

}
