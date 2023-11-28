<?php

namespace App\Http\Controllers;

use Spatie\Searchable\Search;
use Illuminate\Http\Request;
use App\Models\Blog\Topic;
use App\Models\Blog\Post;
use App\Models\Blog\Tag;
// use Illuminate\Http\Request;

class PageController extends Controller
{

    public function collection()
    {
        $sortBy  = 'ASC';
        $orderBy = 'id';

        $posts = Post::where('status', true)
            ->where('post_type', 'collection')
            ->orderBy($orderBy, $sortBy)
            ->paginate(20);

        return view('post.collection', [
            'posts' => $posts,
        ]);
    }

    public function blog()
    {

        $sortBy  = 'ASC';
        $orderBy = 'id';

        $posts = Post::where('status', true)
            ->where('post_type', 'post')
            ->orderBy($orderBy, $sortBy)
            ->paginate(20);

        return view('post.post-list', [
            'posts' => $posts,
        ]);
    }

    public function search(Request $request)
    {
        $term = $request->input('search');

        $searchResults = (new Search())
            ->registerModel(Post::class, ['title', 'content'])
            ->perform($term ?? '');

        return view('search-results', compact('searchResults'));
    }

    public function topicPostList(Topic $topic)
    {

        $sortBy  = 'ASC';

        $orderBy = 'id';

        $posts = $topic->posts()
            // ->where('post_type', 'post')
            ->orderBy($orderBy, $sortBy)
            ->paginate(20);

        return view('post.topic-post-list', [
            'topic' => $topic,
            'posts' => $posts,
        ]);
    }

    public function tagPostList(Tag $tag)
    {
        $sortBy  = 'ASC';

        $orderBy = 'id';

        $posts = $tag->posts()
            ->where('post_type', 'post')
            ->orderBy($orderBy, $sortBy)
            ->paginate(20);

        return view('post.tag-post-list', [
            'tag' => $tag,
            'posts' => $posts,
        ]);
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
