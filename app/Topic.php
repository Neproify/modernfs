<?php

namespace ModernFS;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'forum_id', 'name'];

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
     * Get author of the topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function author()
    {
        return $this->belongsTo('ModernFS\User', 'user_id');
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

    /**
     * Get first post in topic.
     *
     * @return Post
     */

    public function firstPost()
    {
        return $this->hasOne('ModernFS\Post')->first();
    }

    /**
     * Get last post in topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function latestPost()
    {
        return $this->hasOne('ModernFS\Post')->latest();
    }

    /**
     * Get topic's parent forum.
     *
     * @return Forum
     */
    public function forum()
    {
        return $this->belongsTo('ModernFS\Forum');
    }
}
