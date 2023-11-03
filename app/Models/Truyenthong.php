<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Truyenthong extends Model
{
    use HasFactory;

    // Builder description more view
    public function builderWord()
    {
        $desc = $this->description;

        return Str::words($desc, 12, ' ...');
    }


}
