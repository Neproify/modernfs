@extends('layouts.app')
@section('title')
    New topic in {{ $forum->name }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-block">
                        <h4 class="card-title">New topic in {{ $forum->name }}</h4>
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ action('TopicController@create') }}">
                            {{ csrf_field() }}

                            <input id="forum" name="forum" type="text" value="{{ $forum->id }}" hidden/>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Name</label>

                                <input id="name" type="text" class="form-control" name="name"
                                       value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }}">
                                <label for="content" class="control-label">Content</label>

                                <textarea id="content" type="text" class="form-control" rows="9" name="content" required
                                          autofocus>{{ old('content') }}</textarea>

                                @if ($errors->has('content'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('content') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Create topic
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection