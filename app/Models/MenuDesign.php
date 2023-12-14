<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
// use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class MenuDesign extends Model
{
    use HasFactory, AsSource, Filterable, Attachable;

    protected $table = 'menus';

    protected $fillable = [

        'name', 'route', 'color', 'icon', 'ordering', 'group',

    ];

    // protected $casts = [];

    protected $allowedSorts = [

        'id',
        'name',
        'ordering',
        'group',
    ];

    protected $allowedFilters = [

        'name' => Like::class,
        'route' => Like::class,
        'group' => Like::class,
        'ordering' => Like::class,

    ];

    public function parent(): BelongsTo
    {
        return $this->belongsTo(MenuDesign::class, 'parent_id');
    }

    public function childrent(): HasMany
    {
        return $this->hasMany(MenuDesign::class, 'parent_id');
    }

    public function parentNam()
    {
        $parent = $this->parent;

        return $parent ? $parent->name : "<b>* * *</b>";
    }
}
