<?php

namespace App\Models;

use App\Models\Music;
use App\Models\User;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    protected $table = "favorites";

    public function musics()
    {
        return $this->belongsTo(Music::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
