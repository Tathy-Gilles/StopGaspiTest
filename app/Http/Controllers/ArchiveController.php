<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserArchive;
use App\User;
use App\Appointment;
use App\AppointmentArchive;

class ArchiveController extends Controller
{
  public function __construct() {
    $this->middleware('admin');
  }

  public function displayUser() {
    $users = UserArchive::where(['validate' => 1, 'admin' => 0, 'adviser' => 0])->get();
    $admins = UserArchive::where('admin', 1)->get();
    $advisers = UserArchive::where('adviser', 1)->get();

    return view('administration.archive.display-user', compact(['users', 'admins', 'advisers']));
  }

  public function enableUser($id) {
    $oldUser = UserArchive::find($id);

    $user = new User;
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

    return redirect('/admin/archive/user');
  }
}
