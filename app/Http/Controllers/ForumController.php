<?php

namespace ModernFS\Http\Controllers;

use ModernFS\Forum;

class ForumController extends Controller
{
    /**
     * View forum index.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $forums = Forum::with('latestTopic.latestPost')->get();

        return view('forum.index', ['forums' => $forums]);
    }

    /**
     * Show forum and it's content.
     *
     * @param $id
     * @param string $name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function show($id, $name = '')
    {
        if ($name == '') {
            $forum = Forum::findOrFail($id);

            return redirect($forum->url());
        }
        $forum = Forum::with('topics.latestPost', 'topics.author')->where('id', '=', $id)->first();

        return view('forum.show', ['forum' => $forum]);
    }
}
