<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Orchid\Attachment\Models\Attachment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Filterable;
use Orchid\Filters\Types\Like;
use Orchid\Screen\AsSource;

class Topic extends Model
{
    use AsSource, Attachable, Filterable, HasFactory;

    protected $table = 'topics';

    protected $fillable = [
        'meta_description',
        'meta_keyword',
        'meta_title',
        'thumbnail',
        'topic_type',
        'parent_id',
        'ordering',
        'status',
        'icon',
        'slug',
        'name',
    ];

    protected $casts = [

        'thumbnail' => 'array',

    ];

    protected $allowedSorts = [

        'topic_type',
        'created_at',
        'ordering',
        'name',
        'slug',
        'id',

    ];

    protected $allowedFilters = [

        'topic_type' => Like::class,
        'ordering' => Like::class,
        'name' => Like::class,
        'slug' => Like::class,

    ];

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'post_topics')->where('status', true);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id')
            ->where('parent_id', null)
            ->where('status', true)
            ->orderBy('ordering', 'DESC');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')
            ->where('parent_id', '!=', null)
            ->where('status', true)
            ->orderBy('ordering', 'DESC');
    }
}
