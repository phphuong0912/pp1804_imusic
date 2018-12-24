<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Music;
use App\Models\User;

class Rating extends Model
{
    protected $table = "ratings";
    public function musics()
    {
        return $this->belongsTo(Music::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

}
