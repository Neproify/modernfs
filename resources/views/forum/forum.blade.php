<div class="container">
	<a href="{{ $forum->url() }}" class="h3">{{ $forum->name }}</a>
	<div class="row">
		<div class="col-md-9">
			{{ $forum->description }}
		</div>
		<div class="col-md-3">
			@if($forum->latestTopic)
				Last post in:<br/>
				<a href="{{ $forum->latestTopic->url() }}">{{ $forum->latestTopic->name }}</a><br/>
				Created by:<br/>
				<a href="{{ $forum->latestTopic->latestPost->author->url() }}">{{ $forum->latestTopic->latestPost->author->name }}</a>
			@else
				No topics.
			@endif
		</div>
	</div>
	<hr />
</div>