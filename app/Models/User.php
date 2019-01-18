<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Comment;
use App\Models\Playlist;
use App\Models\Rating;
use App\Models\File;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function playlists()
    {
        return $this->hasMany(Playlist::class);
    }

    public function image()
    {
        return $this->belongsTo('App\Models\Image');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function files()
    {
        return $this->hasMany(File::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(Music::class, 'favorites', 'user_id', 'music_id')->withTimeStamps();
    }
}
