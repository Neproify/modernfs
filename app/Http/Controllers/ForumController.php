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
     * @param $name
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, $name)
    {
        $forum = Forum::findOrFail($id);

        return view('forum.show', ['forum' => $forum]);
    }
}
