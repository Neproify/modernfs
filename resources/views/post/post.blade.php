<div class="container">
    <div class="row">
        <div class="col-md-6">
            @if($post->isFirst())
                <h5>Topic {{ $post->topic->name }}</h5>
            @else
                <h5>Reply to {{ $post->topic->name }}</h5>
            @endif

        </div>
        <div class="col-md-6">
            <h6>Created by: <a href="{{ $post->author->url() }}">{{ $post->author->name }}</a> on: {{ $post->created_at }}</h6>
        </div>
        <div class="col-md-12">
            {{ $post->content }}
        </div>
    </div>
    <hr />
</div>