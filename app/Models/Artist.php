<?php

namespace App\Models;

use App\Models\Music;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $table = "artists";

    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
