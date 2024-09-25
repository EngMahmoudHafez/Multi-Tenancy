<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public  function index(){

        $users=User::where('tenant_id',auth()->user()->tenant_id)->get();
        return view('users',compact('users'));
    }
}
