@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Topic # {{$data->id}} | {{$data->requestType->name}}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                            <form action="/topic" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('POST') }}
                                <input type="hidden" name="id" value="{{$data->id}}">
                                <div class="form-group">
                                    <label for="question">Question:</label>
                                    <textarea class="form-control" rows="5" id="question" name="question">{{$data->question}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="answer">Answer:</label>
                                    <textarea class="form-control" rows="5" id="answer" name="answer">{{$data->answer or ''}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-default">Update</button>
                            </form>

                        <br>
                    </div>
                    <div class="panel-footer">
                        <a href="{{URL::route('home')}}" class="btn btn-primary">Dashboard</a>
                        <a href="{{URL::route('topic.index')}}" class="btn btn-primary">Topics</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection