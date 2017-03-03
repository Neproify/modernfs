@extends('layouts.app')
@section('title')
    {{ $topic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-t-1">
                {!! Breadcrumbs::render('topic', $topic) !!}
                <div class="row">
                    <div class="col-md-8">
                        <h4>{{ $topic->name }}</h4>
                        Started by: <a href="{{ $topic->author->url() }}">{{ $topic->author->name }}</a>
                        on: {{ $topic->created_at }}
                    </div>
                    <div class="col-md-4">
                        <a class="btn btn-primary float-right" href="{{ route('post.new', ['topic' => $topic->id]) }}">Reply to topic</a>
                    </div>
                </div>
                <div class="col-md-12 m-t-1">
                    @each('post.post', $topic->posts, 'post')
                </div>
                {{ $topic->posts->links() }}
            </div>
        </div>
    </div>
@endsection