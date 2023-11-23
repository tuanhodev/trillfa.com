<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Orchid\Attachment\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Topic extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table    = 'topics';

    protected $fillable = [
        'meta_description',
        'meta_keyword',
        'meta_title',
        'thumbnail',
        'topic_type',
        'parent_id',
        'status',
        'slug',
        'name',
    ];

    protected $casts = [

        'thumbnail' => 'array',

    ];

    protected $allowedSorts = [

        'topic_type',
        'created_at',
        'name',
        'slug',
        'id',

    ];

    protected $allowedFilters = [

        'topic_type' => Like::class,
        'name' => Like::class,
        'slug' => Like::class,

    ];

    public function posts (): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_topics')->where('status', true);
    }

    public function children(): HasMany
    {
        return $this->hasMany(Topic::class, 'parent_id')->where('status', true);
    }



}
