@extends('layouts.app')
@section('title')
	{{ $forum->name }}
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 m-t-1">
				{!! Breadcrumbs::render('forum', $forum) !!}
				<div class="row">
					<div class="col-md-8">
						<h4>{{ $forum->name }}</h4>
					</div>
					<div class="col-md-4">
						<a class="btn btn-primary float-right" href="{{ route('topic.new', ['forum' => $forum->id]) }}">New topic</a>
					</div>
				</div>
				<div class="col-md-12 m-t-1">
					@each('topic.topic', $forum->topics, 'topic')
				</div>
			</div>
		</div>
	</div>
@endsection