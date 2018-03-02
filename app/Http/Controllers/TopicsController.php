<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;

class TopicsController extends Controller
{
    public function index()
    {
        return view('topics', ['data' => Topic::all()]);
    }

    public function show($id)
    {
        return view('topic', ['data' => Topic::find($id)]);
    }

    public function save(Request $request)
    {
        $topic = Topic::find($request->input('id'));
        $topic->question = $request->question;
        $topic->answer = $request->answer;
        $topic->save();
        return view('topic' ,['data' => $topic]);
    }
}
