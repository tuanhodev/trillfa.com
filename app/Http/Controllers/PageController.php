<?php

namespace App\Http\Controllers;

use App\Models\Blog\Post;
//use Illuminate\Support\Facades\Storage;
use App\Models\Blog\Topic;
use App\Models\Tag;
use Illuminate\Http\Request;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\Searchable\Search;

// use Illuminate\Http\Request;

class PageController extends Controller
{
    public function chuDeChinh(Topic $topic)
    {
        $sortBy = 'ASC';
        $orderBy = 'id';

        $children = $topic->children;

        $topicId = collect();

        if ($children) {
            foreach ($children as $item) {
                $topicId = $topicId->push($item->id);
            }
        }

        $posts = Post::whereHas('topics', function ($query) use ($topicId) {
            $query->whereIn('topic_id', $topicId);
        })->where('post_type', 'post')
            ->orderBy($orderBy, $sortBy)
            ->paginate(2);

        return view('post.topic-post-list', [
            'topic' => $topic,
            'posts' => $posts,
        ]);
    }

    // public function collection()
    // {
    //     $sortBy  = 'ASC';
    //     $orderBy = 'id';

    //     $posts = Post::where('status', true)
    //         ->where('post_type', 'collection')
    //         ->orderBy($orderBy, $sortBy)
    //         ->paginate(20);

    //     return view('post.collection', [
    //         'posts' => $posts,
    //     ]);
    // }

    public function blog()
    {

        $sortBy = 'ASC';
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

        $sortBy = 'ASC';

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
        $sortBy = 'ASC';
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

        $post->vzt()->increment();

        return view('post.view', [
            'post' => $post,
            'nextPost' => $nextPost,
            'prevPost' => $prevPost,
            'posts' => $posts,
        ]);
    }

    public function about()
    {
        // $mdFile = Storage::disk('local')->get('public/page/md/about.md');

        $mdFile = file_get_contents(resource_path('views/page/md/about.md'));

        $aboutContent = app(MarkdownRenderer::class)
            ->highlightTheme('github-dark')
            ->toHtml($mdFile);

        return view('page.about', compact('aboutContent'));
    }

    public function sitemap()
    {
        return response()->view('page.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function sitemapPage()
    {

        $topics = Topic::where('status', true)
            ->where('parent_id', '!=', null)
            ->orderBy('id', 'ASC')
            ->get();

        $tags = Tag::orderBy('id', 'ASC')->get();

        return response()->view('page.sitemap.page', [

            'topics' => $topics,
            'tags' => $tags,

        ])->header('Content-Type', 'text/xml');
    }

    public function sitemapPosts()
    {

        $posts = Post::where('status', true)->latest()->get();

        return response()->view('page.sitemap.posts', [

            'posts' => $posts,

        ])->header('Content-Type', 'text/xml');
    }
}
