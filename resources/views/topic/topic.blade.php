<div class="card">
    <div class="card-block">
        <h4 class="card-title"><a href="{{ $topic->url() }}">{{ $topic->name }}</a></h4>
        <div class="col-md-6">
            <!-- There should be short description of topic(for example first 64 characters from it) -->
        </div>
        <div class="col-md-3">
            Posts: {{ $topic->posts->count() }}
        </div>
        <div class="col-md-3">
            Last post by:
            <a href="{{ $topic->getLastPost()->author->url() }}">{{ $topic->getLastPost()->author->name }}</a>
        </div>
    </div>
</div>