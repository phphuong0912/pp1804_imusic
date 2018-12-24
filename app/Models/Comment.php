<?php

namespace App\Models;

use App\Models\Music;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = "comments";

    public function musics()
    {
        return $this->belongsTo(Music::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
