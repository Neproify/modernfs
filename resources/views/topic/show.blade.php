@extends('layouts.app')
@section('title')
    {{ $topic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4>{{ $topic->name }}</h4>
                Started by: <a href="{{ $topic->author->url() }}">{{ $topic->author->name }}</a>
                on: {{ $topic->created_at }}<br/>
                <a class="btn btn-primary" href="{{ route('post.new', ['topic' => $topic->id]) }}">Reply to topic</a>
                @each('post.post', $topic->posts, 'post')
            </div>
        </div>
    </div>
@endsection