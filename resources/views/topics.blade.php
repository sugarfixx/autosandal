@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Topics</div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="list-group">
                            @foreach($data as $topic)
                                <a href="topic/{{$topic->id}}" class="list-group-item">{{$topic->question}}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="{{URL::route('home')}}" class="btn btn-primary">Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection