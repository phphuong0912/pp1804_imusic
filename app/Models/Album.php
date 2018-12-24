<?php

namespace App\Models;

use App\Models\Music;
use App\Models\Image;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "albums";

    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }
}
