@extends('layouts.app')
@section('title')
    Index page
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-t-1">
                <div class="col-md-12">
                    @each('forum.forum', $forums, 'forum')
                </div>
            </div>
        </div>
    </div>
@endsection