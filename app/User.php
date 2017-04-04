<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'siret', 'company', 'firstname', 'lastname', 'email', 'password', 'validate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($password) {
      $this->attributes['password'] = bcrypt($password);
    }

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
