<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicTag extends Model
{
    protected $guarded = [
        'id'
    ];

    public function topic()
    {
        return $this->belongsTo('App\Topic');
    }

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }
}
