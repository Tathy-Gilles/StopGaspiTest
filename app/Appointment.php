<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
  protected $fillable = [
      'user_id', 'adviser_id', 'type', 'link', 'date'
  ];

  protected $with = array('user', 'adviser');

  public function user() {
     return $this->hasOne(User::class, 'id', 'user_id');
  }

  public function adviser() {
     return $this->hasOne(User::class, 'id', 'adviser_id');
  }
}
