<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
  public function __construct() {
    $this->middleware('admin')->except('userManager');
    $this->middleware('adviser')->only('userManager');;

    // $this->middleware('adviser')->only('userManager');

  }

  public function browser() {

    $files = \Storage::disk('local')->files('public/images');

    return view('administration.manager.home', compact('files'));
  }

  public function uploader() {

    request()->file('file')->store('public/images');

    return back();
  }

  public function userManager() {
    $users = \App\User::where(['adviser' => 0, 'admin' => 0, 'validate' => 1])->orderby('company', 'ASC')->paginate(1);
    return view('workflow.manager.home', compact('users'));
  }
}
