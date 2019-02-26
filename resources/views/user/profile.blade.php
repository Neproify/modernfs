@extends('layouts.app')
@section('title')
    {{ $user->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 m-t-1">
                {!! Breadcrumbs::render('profile', $user) !!}
                <h1>{{ $user->name }}</h1>
                <b>Registered:</b> {{ $user->created_at }}
            </div>
        </div>
    </div>
@endsection