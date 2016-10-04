@extends('layouts.app')
@section('title')
    {{ $topic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @each('post.post', $topic->posts, 'post')
            </div>
        </div>
    </div>
@endsection