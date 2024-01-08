<?php

namespace App\Models\Blog;

use App\Models\Comment;
use App\Models\Tag;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Orchid\Attachment\Attachable;
use Orchid\Attachment\Models\Attachment;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Post extends Model implements Searchable
{
    use AsSource, Attachable, Filterable, HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'meta_description',
        'meta_keywords',
        'published_at',
        'description',
        'anchor_link',
        'view_count',
        'post_type',
        'thumbnail',
        'featured',
        'user_id',
        'content',
        'status',
        'title',
        'slug',
    ];

    protected $casts = [
        'anchor_link' => 'array',
        'featured' => 'boolean',
        'thumbnail' => 'array',
    ];

    protected $allowedSorts = [
        'id',
        'title',
        'view_count',

    ];

    protected $allowedFilters = [
        'view_count' => Like::class,
        'post_type' => Like::class,
        'slug' => Like::class,
        'name' => Like::class,
    ];

    /*
     * xử lý ngày tháng
     *
     */
    public function publishedAt()
    {
        Carbon::setLocale('vi'); // hiển thị ngôn ngữ tiếng việt.
        // $dt = Carbon::create(2018, 10, 18, 14, 40, 16);
        $pls = Carbon::create($this->published_at);

        return $pls->diffForHumans(Carbon::now());
    }

    // Builder description more view
    public function builderWord($wordCount = 12)
    {

        $content = app(MarkdownRenderer::class)
            ->disableAnchors()
            ->toHtml($this->content);

        return Str::words($content, $wordCount, ' ...');
    }

    // Convert markdown to html
    public function markdownToHtml()
    {
        return app(MarkdownRenderer::class)
            ->highlightTheme('github-dark')
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

    public function vzt()
    {
        return visits($this);
    }

    // end
}
