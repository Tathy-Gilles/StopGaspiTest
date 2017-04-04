<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministrationController extends Controller
{

    public function __construct() {
      $this->middleware('guest', ['only' => ['index']]);
    }

    public function index() {

      return view('administration.home');
    }

    public function login() {

      if(!auth()->attempt(request(['email', 'password']))) {
        return view('administration.home');
      }
      return redirect('/admin/user');

    }
}
