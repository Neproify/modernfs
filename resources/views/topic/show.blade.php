@extends('layouts.app')
@section('title')
    {{ $topic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <a class="btn btn-primary" href="{{ route('post.new', ['topic' => $topic->id]) }}">Reply to topic</a>
                @each('post.post', $topic->posts, 'post')
            </div>
        </div>
    </div>
@endsection