<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'theme_id', 'title', 'description', 'file'
    ];

    public function theme() {
       return $this->belongsTo(Theme::class);
    }
}
