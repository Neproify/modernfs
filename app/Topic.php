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
     * Get posts in topic.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function posts()
    {
        return $this->hasMany('ModernFS\Post');
    }
}
