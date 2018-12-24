<?php

namespace App\Models;

use App\Models\Music;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";

    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }
    
}
