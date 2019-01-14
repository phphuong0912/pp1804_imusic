<?php

namespace App\Models;

use App\Models\Playlist;
use App\Models\Rating;
use App\Models\Category;
use App\Models\Album;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{

    protected $table = "musics";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'view_count', 
        'path', 
        'lyrics', 
        'type',
        'artist_id',
        'album_id'
    ];

    public function playlists()
    {
        return $this->belongsToMany(Playlist::class); 
    }

    public function ratings()
    {
    	return $this->hasMany(Rating::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function categories()
    {
    	return $this->belongsToMany(Category::class);
    }

    public function albums()
    {
    	return $this->belongsToMany(Album::class);
    }

    public function artists()
    {
    	return $this->belongsToMany(Artist::class);
    }

}
