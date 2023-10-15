<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;

    protected $table    = 'meta_tags';

    protected $fillable = [

        'url',
        'title',
        'keywords',
        'description',

    ];
}

