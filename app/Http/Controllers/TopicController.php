<?php

namespace ModernFS\Http\Controllers;

use Illuminate\Http\Request;

use ModernFS\Http\Requests;
use ModernFS\Topic;

class TopicController extends Controller
{
    /**
     * Show topic.
     *
     * @param $id
     * @param $name
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id, $name)
    {
        $topic = Topic::findOrFail($id);
        return view('topic.show', ['topic' => $topic]);
    }
}
