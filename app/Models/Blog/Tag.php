<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
// use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Tag extends Model
{
    use HasFactory, AsSource, Filterable, Attachable, Filterable;

    protected $table    = 'tags';

    protected $fillable = [

        'name',
        'slug',
        'type',

    ];

    // protected $casts = [];

    protected $allowedSorts = [

        'id',
        'name',
        'slug',
        'type',
        'created_at'

    ];

    protected $allowedFilters = [

        'name' => Like::class,
        'slug' => Like::class,
        'type' => Like::class,

    ];

    public function posts(): BelongsToMany
    {
        if ($this->type == 'post') {

            return $this->belongsToMany(Post::class, 'post_tags')->where('status', true);

        }
    }

    public function projects(): BelongsToMany
    {
        if($this->type == 'project') {

            return $this->belongsToMany(Post::class, 'post_tags')->where('status', true);

        }
    }
}
