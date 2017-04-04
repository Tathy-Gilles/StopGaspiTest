<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\UserRegistration;

class RegistrationController extends Controller
{
    public function create() {
      return view('registration.create');
    }

    public function store() {

      $this->validate(request(), [
        'siret' => 'required',
        'company' => 'required',
        'lastname' => 'required',
        'firstname' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
      ]);

      $user = User::create(request(['siret', 'company', 'lastname', 'firstname', 'email', 'password']));

      \Mail::to($user)->send(new UserRegistration($user));

      return redirect()->home();

    }
}
