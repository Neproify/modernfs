<div class="container">
    <a href="{{ $topic->url() }}" class="h4">{{ $topic->name }}</a>
    <div class="row">
        <div class="col-md-6">
            <!-- There should be short description of topic(for example first 64 characters from it) -->
        </div>
        <div class="col-md-3">
            Posts: {{ $topic->posts->count() }}
        </div>
        <div class="col-md-3">
            Last post by:
            <a href="{{ $topic->latestPost->author->url() }}">{{ $topic->latestPost->author->name }}</a>
        </div>
    </div>
    <hr />
</div>