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
        $songs = Music::all();
        $albums = Album::all();
        $artists = Artist::all();
        
        return view('admin.page.index',compact('songs', 'albums', 'artists'));
    }

    public function getBlog()
    {
        return view('admin.page.blog');
    }

    public function getBrowse()
    {
        return view('admin.page.browse');
    }

    public function getContact()
    {
        return view('admin.page.contact');
    }

    public function getRadio()
    {
        return view('admin.page.radio');
    }

    public function getSingle()
    {
        return view('admin.page.single');
    }

    public function getTypography()
    {
        return view('admin.page.typography');
    }
}

