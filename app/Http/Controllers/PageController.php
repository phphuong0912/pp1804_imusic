<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class pageController extends Controller
{
    public function getIndex()
    {  
        $album = Album::all();
        
        return view('admin.page.index',compact('album'));
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

