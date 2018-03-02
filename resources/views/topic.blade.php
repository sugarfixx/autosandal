@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Topic # {{$data->id}}</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{$data->question}}
                        <br>
                        {{$data->answer}}
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