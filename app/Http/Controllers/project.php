<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
    //
    
    function userlist()
    { 
        return view('userlist');
    }
    function create()
    {
        return view('create');
    }
    function loginsubmit(Request $req)
    {
        print-r($req->input());
    }
}
