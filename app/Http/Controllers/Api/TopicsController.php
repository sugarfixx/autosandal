<?php

namespace App\Http\Controllers\Api;

use App\Platform;
use App\RequestType;
use App\User;
use App\UserTopic;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use App\Topic;
use App\Transformers\TopicsTransformer;
use Chrisbjr\ApiGuard\Models\ApiKey;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TopicsController extends ApiGuardController
{
    protected $user;

    public function initialize()
    {
        $this->user = $this->apiKey->user;
    }

    public function index()
    {
        $topis = Topic::all();
        return $this->response->withCollection($topis, new TopicsTransformer());
    }

    public function store(Request $request)
    {
        $key= DB::table('api_keys')->where('key', $request->header('X-Authorization'))->first();

        $requestType = RequestType::find($request->input('requestType'));
        $platform = Platform::find($request->input('platform'));
        $topic = new Topic();
        $topic->platform_id = $platform->id;
        $topic->request_type_id = $requestType->id;
        $topic->question = $request->input('question');
        $topic->answer = '';
        $topic->save();
        $this->createUserTopic($key->apikeyable_id , $topic->id);

        return $this->response->withItem($topic, new TopicsTransformer());
    }

    protected function createUserTopic($user_id, $topic_id)
    {
        return UserTopic::firstOrCreate(['user_id' => $user_id, 'topic_id' => $topic_id]);
    }
}
