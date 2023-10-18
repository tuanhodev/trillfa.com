<?php

namespace App\Models\Blog;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table    = 'posts';

    protected $fillable = [

        'user_id',
        'title',
        'slug',
        'description',
        'content',
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

    public $pathPhotos = 'images/post';

    public function user(): BelongsTo
    {

        return $this->belongsTo(User::class, 'user_id');
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

}
