<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Setting extends Model
{
    use HasFactory, AsSource, Attachable, Filterable;

    protected $table = 'settings';

    protected $fillable = [

        'label',
        'key',
        'value',
        'attributes',

    ];

    protected $casts = [
        'attributes' => 'array',
    ];

    protected $allowedSorts = [

        'id',
        'key',
        'label',
        'value',
        'attributes',

    ];

    protected $allowedFilters = [

        'key'   => Like::class,
        'value' => Like::class,
        'label' => Like::class,

    ];

}
