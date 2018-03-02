<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    protected $guarded = [
        'id'
    ];

    public function topics()
    {
        return $this->hasMany('App\Topic');
    }
}
