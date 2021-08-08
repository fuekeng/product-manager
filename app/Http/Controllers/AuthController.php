<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
  public function login(){
       return view('user.login');
  }

  public function signin(Request $request){
      $request->validate([
        'email'=>'required',
        'password'=>'required'
      ]);

   if(Auth::attempt([
       'email' => $request->email, 
       'password' => $request->password
   ]))

   {
       return  redirect()->intended(route('listuser'));
   }
       return  redirect()->back()->with('success','Login is incorrect');  
  }

  public function logout(){
       Auth::logout();
       return redirect()->back();
  }

}