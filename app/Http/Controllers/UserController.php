<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserArchive;
use App\Mail\UserEnabled;

class UserController extends Controller
{
  public function __construct() {
    $this->middleware('admin');
  }

  public function index() {

    $users = User::where(['validate' => 1, 'admin' => 0, 'adviser' => 0])->get();
    $pendingUsers = User::where('validate', 0)->get();
    $admins = User::where('admin', 1)->get();
    $advisers = User::where('adviser', 1)->get();

    return view('administration.user.home', compact(['users', 'pendingUsers', 'admins', 'advisers']));
  }

  public function activate($id) {

    $user = User::find($id);

    $user->validate = 1;
    $user->save();

    \Mail::to($user)->send(new UserEnabled($user));

    return redirect('/admin/user');
  }

  public function create() {
    return view('administration.user.create');
  }

  public function store() {

    $this->validate(request(), [
      'lastname' => 'required',
      'firstname' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed',
      'role' => 'required'
    ]);

    $user = new User;
    $user->lastname = request('lastname');
    $user->firstname = request('firstname');
    $user->email = request('email');
    $user->password = request('password');
    $user->validate = 1;

    foreach (request('role') as $role) {
      if($role == 'admin') {
        $user->admin = 1;
      }
      if($role == 'adviser') {
        $user->adviser = 1;
      }
    }

    $user->save();

    return redirect('/admin/user');
  }

  public function edit($id) {

    $user = User::find($id);

    return view('administration.user.edit', compact(['user']));
  }

  public function update($id) {

    $user = User::find($id);

    $user->lastname = request('lastname');
    $user->firstname = request('firstname');
    $user->email = request('email');

    $user->save();

    return redirect('/admin/user');
  }

  public function delete($id) {

    $oldUser = User::find($id);

    $user = new UserArchive;
    $user->id = $oldUser->id;
    $user->siret = $oldUser->siret;
    $user->company = $oldUser->company;
    $user->firstname = $oldUser->firstname;
    $user->lastname = $oldUser->lastname;
    $user->email = $oldUser->email;
    $user->password = $oldUser->password;
    $user->validate = $oldUser->validate;
    $user->admin = $oldUser->admin;
    $user->adviser = $oldUser->adviser;
    $user->remember_token = $oldUser->remember_token;
    $user->created_at = $oldUser->created_at;
    $user->updated_at = $oldUser->updated_at;

    $user->save();
    $oldUser->delete();

    return redirect('/admin/user');
  }

}
