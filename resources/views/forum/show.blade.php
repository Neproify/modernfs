@extends('layouts.app')
@section('title')
    {{ $forum->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-primary" href="{{ route('topic.new', ['forum' => $forum->id]) }}">New topic</a>
                @each('topic.topic', $forum->topics, 'topic')
            </div>
        </div>
    </div>
@endsection