<?php

namespace ModernFS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ModernFS\Post;
use ModernFS\Topic;

class PostController extends Controller
{
    /**
     * Generate form for new post in topic.
     *
     * @param $topic
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function createForm($topic)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $topic = Topic::findOrFail($topic);

        return view('post.new', ['topic' => $topic]);
    }

    public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $this->validate($request, [
            'topic' => 'required|integer',
            'content' => 'required|string|min:3|max:4096',
        ]);

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'topic_id' => $request->input('topic'),
            'content' => $request->input('content'),
        ]);

        return redirect($post->topic->url());
    }
}
