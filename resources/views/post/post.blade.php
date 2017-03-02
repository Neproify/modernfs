<div class="card">
    <div class="card-block">
        <div class="row">
            <div class="col-md-6">
                <h5 class="card-title">Reply to topic {{ $post->topic->name }}</h5>
            </div>
            <div class="col-md-6">
                Created by: <a href="{{ $post->author->url() }}">{{ $post->author->name }}</a> on: {{ $post->created_at }}
            </div>
        </div>
        <div class="col-md-12">
            {{ $post->content }}
        </div>
    </div>
</div>