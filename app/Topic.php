<?php

namespace ModernFS;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * Get url to the topic.
     *
     * @return string
     */
    public function url()
    {
        return route('topic', ['id' => $this->id, 'name' => str_slug($this->name)]);
    }

    /**
     * Get posts in topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('ModernFS\Post');
    }
}
