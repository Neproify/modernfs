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
            @if($forum->getLastTopic())
                Last post in:<br/>
                <a href="{{ $forum->getLastTopic()->url() }}">{{ $forum->getLastTopic()->name }}</a><br/>
                Created by:<br/>
                <a href="{{ $forum->getLastTopic()->getLastPost()->author->url() }}">{{ $forum->getLastTopic()->getLastPost()->author->name }}</a>
            @else
                No topics.
            @endif
        </div>
    </div>
</div>