<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    protected $guarded = [
        'id'
    ];

    public function requestType()
    {
        return $this->belongsTo('App\RequestType');
    }

    public function tags()
    {
        return $this->hasMany('App\TopicTag');
    }

    public function platform()
    {
        return $this->belongsTo('App\Platform');
    }
}
