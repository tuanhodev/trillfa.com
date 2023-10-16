<?php

namespace App\Observers;

use App\Models\Blog\Post;

class PostObserver
{
    public function deleting(Post $post)
    {
        $post->cover()->delete();
        $post->attachment->each->delete();
    }

