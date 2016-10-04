@extends('layouts.app')
@section('title')
    {{ $forum->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @each('topic.topic', $forum->topics, 'topic')
            </div>
        </div>
    </div>
@endsection