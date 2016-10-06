<div class="card">
    <div class="card-block">
        <h4 class="card-title"><a href="{{ $forum->url() }}">{{ $forum->name }}</a></h4>
        <div class="col-md-6">
            {{ $forum->description }}
        </div>
        <div class="col-md-3">
            Topics: {{ $forum->topics->count() }}
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
</div>