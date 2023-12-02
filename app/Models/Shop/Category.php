<?php

namespace App\Models\Shop;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
// use Orchid\Attachment\Models\Attachment;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Category extends Model
{
  use HasFactory, AsSource, Filterable, Attachable;

  protected $table    = 'categories';

  protected $fillable = [
    'meta_description',
    'meta_keyword',
    'meta_title',
    'thumbnail',
    'parent_id',
    'status',
    'color',
    'slug',
    'name',
  ];

  protected $casts = [

    'thumbnail' => 'array',

  ];

  protected $allowedSorts = [

    'created_at',
    'name',
    'slug',
    'id',

  ];

  protected $allowedFilters = [

    'name' => Like::class,
    'slug' => Like::class,

  ];

  public function products(): BelongsToMany
  {
    return $this->belongsToMany(Product::class, 'product_category')->where('status', true);
  }

  public function children(): HasMany
  {
    return $this->hasMany(Category::class, 'parent_id')->where('status', true);
  }
}
