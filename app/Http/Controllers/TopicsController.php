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
}
