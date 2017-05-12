<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\Input;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Redirect;

class SessionsController extends Controller
{
  

  public function create() {
    return view('sessions.create');
  }

  public function store(Request $req) {

    $this->validate($req, [
        'email' => 'required|email',
        'password' => 'required',
      ],
        [   
        'email.required' => 'Il le faut un email niama',
        'email.email' => 'Email mauvais format zoba',
        'password.required' => 'Il le faut un password kisengui',
           
        ]);

        if (Auth::attempt(['email' => Input::get('email'),'password' => Input::get('password') ]))
         return view('home');
       else {
         return Redirect::back()->withErrors('Email ou mots de passe incorrect');
       }
       }

  public function destroy() {
    auth()->logout();

    return redirect()->home();
  }
}
