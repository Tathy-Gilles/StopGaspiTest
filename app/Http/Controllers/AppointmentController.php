<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserArchive;
use App\Appointment;
use App\AppointmentArchive;

class AppointmentController extends Controller
{
  public function finish($id) {
      $appointment = Appointment::find($id);
      $appointment->status = request('status');
      $appointment->save();
    return redirect('/workflow/dashboard');
  }

  public function fetch() {
    if(request('view') == 'month') {
      $rdv = Appointment::where(['adviser_id' => request('adviser')])->whereMonth('date', request('month'))->whereYear('date', request('year'))->get();
    }
    if(request('view') == 'week') {
      $rdv = Appointment::where(['adviser_id' => request('adviser')])->whereBetween('date', [request('date'), request('dateTo')])->get();
    }
    if(request('view') == 'day') {
      $rdv = Appointment::where(['adviser_id' => request('adviser')])->whereDay('date', request('day'))->whereMonth('date', request('month'))->whereYear('date', request('year'))->get();
    }
    return $rdv;
  }

  public function store() {
    $this->validate(request(), [
      'adviser' => 'required',
      'company' => 'required',
      'type' => 'required',
      'date' => 'required'
    ]);

    $user = User::where('siret', request('company'))->first();

    $rdv = Appointment::where(['date' => request('date'), 'adviser_id' => request('adviser')])->first();

    $userBusy = Appointment::where(['date' => request('date'), 'user_id' => $user->id])->first();

    // Si le conseiller possède déja a un rdv à la date

    if($rdv) {
      return back();
    }

    // Si l'utilisateur possède déja a un rdv à la date

    if($userBusy) {
      return back();
    }

    $appointment = Appointment::create([
      'user_id' => $user->id,
      'adviser_id' => request('adviser'),
      'type' => request('type'),
      'date' => request('date')
    ]);

    \Mail::to($user)->send(new \App\Mail\AdviserCreateAppointment($user, $appointment));

    return redirect('/workflow/dashboard');

  }

}
