<?php

namespace App\Http\Controllers\Api;

use App\Platform;
use Illuminate\Http\Request;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Transformers\PlatformsTransformer;

class PlatformsController extends ApiGuardController
{
    public function index()
    {
        $platforms = Platform::all();
        return $this->response->withCollection($platforms, new PlatformsTransformer());
    }

    public function show($key)
    {
        $platform = Platform::where('slug', $key)->first();
        $this->response->getManager()->parseIncludes('topics');
        return $this->response->withItem($platform, new PlatformsTransformer());
    }
}
