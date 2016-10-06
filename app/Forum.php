<?php

namespace ModernFS;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    /**
     * Get url to the forum.
     *
     * @return string
     */
    public function url()
    {
        return route('forum', ['id' => $this->id, 'name' => str_slug($this->name)]);
    }

    /**
     * Get topics in forum.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function topics()
    {
        return $this->hasMany('ModernFS\Topic');
    }

    /**
     * Get last topic in forum(sorted by last post).
     *
     * @return mixed
     */
    public function getLastTopic()
    {
        return $this->topics->sortByDesc('last_post_id')->first();
    }
}
