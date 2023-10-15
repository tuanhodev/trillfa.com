<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostMetaTag extends Model
{
    use HasFactory;

    protected $table    = 'post_meta_tags';

    protected $fillable = [

        'post_id',
        'meta_tag_id',

    ];
}
