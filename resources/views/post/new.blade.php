@extends('layouts.app')
@section('title')
    New post in topic {{ $topic->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">New post in topic {{ $topic->name }}</h4>
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ action('PostController@create') }}">
                            {{ csrf_field() }}

                            <input id="topic" name="topic" type="text" value="{{ $topic->id }}" hidden/>

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content" class="control-label">Content</label>

                                <textarea id="content" type="text" class="form-control" name="content" rows="9"
                                          required autofocus>{{ old('content') }}</textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Send reply
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection