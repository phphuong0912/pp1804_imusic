<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;
use App\Models\Album;
use App\Models\Artist;

class pageController extends Controller
{
    public function getIndex()
    {  
        $songs = Music::with('artists')->orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_8'));
        $charts = Music::with('artists')->orderBy('view_count', 'DESC')->paginate(config('custom.paginate_8'));
        $albums = Album::all();
        $artists = Artist::all();
        $serial = 0;

        return view('admin.page.index', compact('songs', 'albums', 'artists', 'charts', 'serial'));
    }

    public function getBlog()
    {
        return view('admin.page.blog');
    }

    public function getBrowse()
    {
        $songs = Music::all();
        $albums = Album::all();
        
        return view('admin.page.browse', compact('songs', 'albums'));
    }

    public function getContact()
    {
        return view('admin.page.contact');
    }

    public function getRadio()
    {
        $songs = Music::all();
        $albums = Album::all();
        $artists = Artist::all();

        return view('admin.page.radio', compact('songs', 'albums', 'artists'));
    }

    public function getSingle()
    {
        $artists = Artist::all();
        $albums = Album::all();
        return view('admin.page.single', compact('artists', 'albums'));
    }

    public function getTypography()
    {
        return view('admin.page.typography');
    }
}

