<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h5>Reply to topic {{ $post->topic->name }}</h5>
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