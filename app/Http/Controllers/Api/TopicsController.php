<?php

namespace App\Http\Controllers\Api;

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Topic;
use App\Transformers\TopicsTransformer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TopicsController extends ApiGuardController
{
    public function index()
    {
        $topis = Topic::all();
        return $this->response->withCollection($topis, new TopicsTransformer());
    }
}
