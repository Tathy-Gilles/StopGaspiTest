<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserArchive extends Model
{
  protected $fillable = [
      'siret', 'company', 'firstname', 'lastname', 'email', 'password', 'validate',
  ];

  protected $hidden = [
      'password', 'remember_token',
  ];

  public function isAdmin() {
    return $this->admin;
  }

  public function isAdviser() {
    return $this->adviser;
  }

  public function rdv() {
    if($this->adviser) {
      return $this->hasMany(Appointment::class, 'adviser_id', 'id');
    }
    return $this->hasMany(Appointment::class);
  }
}
