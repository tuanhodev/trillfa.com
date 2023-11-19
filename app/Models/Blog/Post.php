<?php

namespace App\Models\Blog;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Orchid\Attachment\Models\Attachment;
use Spatie\Searchable\SearchResult;
use Spatie\Searchable\Searchable;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Illuminate\Support\Str;
use App\Models\User;
use Carbon\Carbon;

class Post extends Model implements Searchable
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table    = 'posts';

    protected $fillable = [

        'user_id',
        'title',
        'slug',
        'description',
        'content',
        'anchor_link',
        'thumbnail',
        'post_type',
        'status',
        'meta_keywords',
        'meta_description',
        'published_at',
        'view_count',

    ];

    protected $casts = [

        'thumbnail' => 'array',
        'anchor_link' => 'array',

    ];

    protected $allowedSorts = [

        'id',
        'title',
        'view_count'

    ];

    protected $allowedFilters = [

        'name'       => Like::class,
        'slug'       => Like::class,
        'post_type'  => Like::class,
        'view_count' => Like::class,

    ];

    public function publishedAt()
    {
        Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.
        // $dt = Carbon::create(2018, 10, 18, 14, 40, 16);
        $pls = Carbon::create($this->published_at);

        return $pls->diffForHumans(Carbon::now());
    }

    // Builder description more view
    public function builderWord()
    {

        $content = app(MarkdownRenderer::class)
            ->disableAnchors()
            ->toHtml($this->content);

        return Str::words($content, 12, ' ...');
    }

    // Convert markdown to html
    public function markdownToHtml()
    {

        return app(MarkdownRenderer::class)
            ->disableAnchors()
            ->toHtml($this->content);
    }

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function topics(): BelongsToMany
    {
        return $this->belongsToMany(Topic::class, 'post_topics');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }

    public function comments(): BelongsToMany
    {
        return $this->belongsToMany(Comment::class, 'comment_post');
    }

    public function cover()
    {
        return $this->hasOne(Attachment::class, 'id', 'thumbnail')->withDefault();
    }

    public function photos()
    {
        return $this->hasMany(Attachment::class);
    }


    // Searchable
    public function getSearchResult(): SearchResult
    {
        $url = route('blog.post.view', $this);

        return new \Spatie\Searchable\SearchResult(
            $this,
            $this->title,
            $url
        );
    }
}
