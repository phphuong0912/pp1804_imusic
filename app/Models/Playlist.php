<?php

namespace App\Models;

use App\Models\Music;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table = "playlists";
    
    public function musics()
    {
        return $this->belongsToMany(Music::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
