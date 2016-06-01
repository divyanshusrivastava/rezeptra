<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
   public function postLogin(Request $request)
    {

        $v=$this->validate($request,[
            'email' => 'required|email|max:255',
            'password'=>'required|min:5'
            ]);
       
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/register/patient');
        }
        else {
            return "Credentials not correct";
        }
     
        # code...
        return "
            <script>alert('You tried to access login'); </script>
        ";
    }
    public function logout()
    {
        # code...
        Auth::logout();
        return view('ui.index');
    }
}
