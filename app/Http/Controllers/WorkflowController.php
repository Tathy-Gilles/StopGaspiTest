<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Auth;

class WorkflowController extends Controller
{

  public function __construct() {
    $this->middleware('guest', ['only' => ['index', 'login']]);
    $this->middleware('adviser', ['except' => ['index', 'login']]);
  }

  public function index() {
    return view('workflow.home');
  }

  public function login() {

    if(!auth()->attempt(request(['email', 'password']))) {
      return view('workflow.home');
    }
    return redirect('/workflow/dashboard');

  }

  public function dashboard() {
    $dayTasks = Auth::user()->rdv()->whereDate('date', \Carbon\Carbon::now()->format('Y-m-d'))->orderby('date', 'ASC')->get();
    return view('workflow.dashboard', compact('dayTasks'));
  }

}
