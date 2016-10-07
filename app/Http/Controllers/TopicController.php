<?php

namespace ModernFS\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ModernFS\Forum;
use ModernFS\Topic;
use ModernFS\Post;

class TopicController extends Controller
{
    /**
     * Show topic.
     *
     * @param $id
     * @param $name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, $name)
    {
        $topic = Topic::with('posts.author')->where('id', '=', $id)->first();

        return view('topic.show', ['topic' => $topic]);
    }

    /**
     * Generate form for new topic.
     *
     * @param $forum
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createForm($forum)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $forum = Forum::findOrFail($forum);

        return view('topic.new', ['forum' => $forum]);
    }

    /**
     * Create new topic.
     *
     * It creates topic and then first post. Redirects to created topic.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function create(Request $request)
    {
        if (!Auth::check()) {
            return redirect('/');
        }

        $this->validate($request, [
            'name' => 'required|string|min:3|max:64',
            'content' => 'required|string|min:3|max:4096',
        ]);

        $topic = Topic::create([
            'user_id' => Auth::user()->id,
            'forum_id' => $request->input('forum'),
            'name' => $request->input('name'),
        ]);

        $post = Post::create([
            'user_id' => Auth::user()->id,
            'topic_id' => $topic->id,
            'content' => $request->input('content'),
        ]);

        return redirect($topic->url());
    }
}
