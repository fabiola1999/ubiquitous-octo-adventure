<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $fillable = [
        'name', 'path'
    ];

    public function courses() {
        return $this->belongsToMany('App\Course');
    }
}
