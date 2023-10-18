<?php

namespace App\Models;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Comment extends Model
{
    use HasFactory, Filterable, AsSource;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'content',
        'visible',
        'publiched_at',
    ];

    protected $casts = [
    ];

    protected $allowedSorts = [

        'id',
        'content',
        'visible',
        'publiched_at',

    ];

    protected $allowedFilters = [

        'content' => Like::class,
        'visible' => Like::class,
        'publiched_at' => Like::class,

    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }


    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'comment_post');
    }


}
