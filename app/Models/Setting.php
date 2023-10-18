<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;
use Orchid\Attachment\Attachable;
use Orchid\Filters\Types\Like;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;
use Psy\Shell;

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

    public static function get($key)
    {

        $seting = new self();

        $entry = $seting->where('key', $key)->first();

        return $entry ? $entry->value : null;
    }

    public static function set($key, $value = null)
    {
        $setting = new self();
        $entry = $setting->where('key', $key)->firstOrFail();
        $entry->value = $value;
        $entry->saveOrFail();
        Config::set('key', $value);
        if (Config::get($key) == $value) {
            return true;
        }
        return false;
    }
}
