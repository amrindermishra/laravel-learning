<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function addUser(Request $request)
    {
        return view('fome');
    }
    public function usersubmit(Request $request)
    {
        
        $user = New User();
        $user->name=$request->fname;
        $user->email=$request->email;
        $user->password=$request->pwd;
        $user->file=$request->file;
        $user->save();

        echo"<prE>"; print_r($user->toArray()); die;


    }
}
