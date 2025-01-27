<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req){
      //return $req->input();
      $user = User::where(['email'=>$req->email])->first();

      //echo $req->password.'<br/>'.$user->password;exit;
      if(!$user || !Hash::check($req->password,$user->password)){
        return "Username and password not match";
      }else{
        $req->session()->put('user',$user);
        return redirect("/");
      }
    }
}
