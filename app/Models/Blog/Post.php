<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
// use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Post extends Model
{
    use HasFactory, AsSource, Filterable, Attachable, Filterable;

    protected $table    = 'posts';

    protected $fillable = [

        'user_id',
        'title',
        'slug',
        'description',
        'content',
        'thumbnail',
        'status',
        'published',

    ];

    protected $casts = [

        'thumbnail' => 'array',

    ];

    protected $allowedSorts = [

        'id',
        'title',
        'slug',
        'created_at',
        'published',

    ];

    protected $allowedFilters = [

        'name' => Like::class,
        'slug' => Like::class,

    ];

    public $pathPhotos = 'images/post';

    public function user () : BelongsTo
    {

        return $this->belongsTo(User::class, 'user_id');

    }

    public function topics ():BelongsToMany
    {

        return $this->belongsToMany(Topic::class, 'post_topics');

    }

    public function tags (): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }


    public function metaTags (): BelongsToMany
    {
        return $this->belongsToMany(MetaTag::class, 'post_meta_tags', 'post_id', 'meta_tag_id');
    }


}
