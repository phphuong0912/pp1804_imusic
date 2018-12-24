<?php

namespace App\Models;

use App\Models\Artist;
use App\Models\Album;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = "images";

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
