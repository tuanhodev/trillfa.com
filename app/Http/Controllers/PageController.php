<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
use App\Models\Blog\Topic;

// use Illuminate\Http\Request;

class PageController extends Controller
{

    public function topicPostView(Topic $topic)
    {

        return view('post.topic-post-list', [
            'topic' => $topic,
        ]);

    }

    public function tagPostView()
    {
        //
    }

    public function postView(Post $post)
    {

        $next = Post::where('id', '>', $post->id)->min('id');

        $prev = Post::where('id', '<', $post->id)->max('id');

        $prevPost = Post::where('status', true)->find($prev);

        $nextPost = Post::where('status', true)->find($next);

        // fetch post in topic
        $topic = $post->topics;

        $topicId = collect();

        foreach ($topic as $item) {
            $topicId = $topicId->push($item->id);
        }

        $posts = Post::whereHas('topics', function ($query) use ($topicId) {

            $query->whereIn('topic_id', $topicId);
        })->limit(30)->get();

        return view('post.view', [
            'post' => $post,
            'nextPost' => $nextPost,
            'prevPost' => $prevPost,
            'posts' => $posts
        ]);
    }

    public function about()
    {
        return view('page.about');
    }
}
