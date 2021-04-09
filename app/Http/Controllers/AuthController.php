<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
 

   public function register(Request $request)
   {
      $this->validate($request,[
           'email'=>"required|email",
           'password'=>"required|confirmed",
           'name'=>"required"
       ]);
      
            User::create([
               'email'=>$request->email,
               'password'=>Hash::make($request->password),
               'name'=>$request->name
            ]);  

           auth()->attempt($request->only('email','password'));
          
            return redirect()->route('dashboard');

    
   }

   
   public function login(Request $request)
   {
      $this->validate($request,[
         'email'=>"required|email",
         'password'=>"required",
     ]);
    
   
        
         auth()->attempt($request->only('email','password'));
        
          return redirect()->route('dashboard');
   }


   public function logout()
   {
       auth()->logout();
        return redirect()->route("welcome");
   }
}
