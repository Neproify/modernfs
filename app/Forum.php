<?php

namespace ModernFS;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function url()
    {
        return route('forum', ['id' => $this->id, 'name' => str_slug($this->name)]);
    }
}
