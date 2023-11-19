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
        'parent_id',
        'name',
        'slug',
        'thumbnail',
        'meta_title',
        'meta_keyword',
        'meta_description',
        'status',
    ];

    protected $casts = [

        'thumbnail' => 'array',

    ];

    protected $allowedSorts = [

        'id',
        'name',
        'slug',
        'created_at'

    ];

    protected $allowedFilters = [

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
