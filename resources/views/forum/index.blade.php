@extends('layouts.app')
@section('title')
    Index page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @each('forum.forum', $forums, 'forum')
            </div>
        </div>
    </div>
@endsection