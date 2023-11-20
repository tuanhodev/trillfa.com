<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Illuminate\Support\Str;

class Truyenthong extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table = 'truyenthongs';

    protected $fillable = [

        'topic_id',
        'group',
        'ordering',
        'title',
        'description',
        'route',
        'image',
        'color-primary',
        'color-secondary',

    ];

    protected $casts = [

        'image' => 'array',

    ];

    protected $allowedSorts = [

        'id',
        'title',
        'ordering',

    ];

    protected $allowedFilters = [

        'group' => Like::class,
        'title' => Like::class,
        'description' => Like::class,
        'route' => Like::class,

    ];

    public function cover()
    {
        return $this->hasOne(Attachment::class, 'id', 'image')->withDefault();
    }

    // Builder description more view
    public function builderWord()
    {
        $desc = $this->description;

        return Str::words($desc, 12, ' ...');
    }
}
