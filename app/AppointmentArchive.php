<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppointmentArchive extends Model
{
  protected $fillable = [
      'user_id', 'adviser_id', 'type', 'link', 'date'
  ];

  public function user() {
     return $this->hasOne(UserArchive::class, 'id', 'user_id');
  }

  public function adviser() {
     return $this->hasOne(UserArchive::class, 'id', 'adviser_id');
  }
}
