<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RequestType;
use App\Transformers\RequestTypeTransformer;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class RequestTypesController extends ApiGuardController
{
    public function index()
    {
        $requestTypes = RequestType::all();
        return $this->response->withCollection($requestTypes, new RequestTypeTransformer());
    }
}
