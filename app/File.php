<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'theme_id', 'title', 'description', 'file'
    ];

    public function theme() {
       return $this->belongsTo(Theme::class);
    }
}
