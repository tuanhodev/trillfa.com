<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;

// use Illuminate\Http\Request;

class PageController extends Controller
{

    public function about()
    {
        return view('page.about');
    }

    public function postView(Post $post)
    {

        $next = Post::where('id', '>', $post->id)->min('id');

        $prev = Post::where('id', '<', $post->id)->max('id');

        $prevPost = Post::where('status', true)->find($prev);

        $nextPost = Post::where('status', true)->find($next);

        return view('post.view', ['post' => $post, 'nextPost' => $nextPost, 'prevPost' => $prevPost]);
    }

}
