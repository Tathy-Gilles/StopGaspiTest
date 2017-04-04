<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    public function videos() {
       return $this->hasMany(Video::class);
    }

    public function files() {
       return $this->hasMany(File::class);
    }
}
