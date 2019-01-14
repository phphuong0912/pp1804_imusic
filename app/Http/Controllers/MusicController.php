<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $musics = Music::orderBy('updated_at', 'DESC')->paginate(config('custom.paginate_5'));

        return view('admin.music.index', compact('musics'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artists = Artist::all();
        $albums = Album::all();

        return view('admin.file.create', compact('artists', 'albums'));  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->filename;
        $file->move('file', 'file/' . $file->getClientOriginalName());
        $file->path = 'file/' . $file->getClientOriginalName();

        Music::create([
            'name' => $request->song,
            'path' => $file->path,
            'view_count' => config('custom.view_count'),
            'artist_id' => $request->artist_id,
            'album_id' => $request->album_id,
            'lyrics' => $request->lyrics,
            'type' => $file->getClientMimeType(),
        ]);
        
        return redirect()->route('musics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $music = Music::find($id);

        return view('admin.music.show', compact('music'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $music = Music::find($id);

        return view('admin.music.edit', compact('music'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $music = Music::find($id);

        $music->update([
            'name' => $request->song,
            'artist' => $request->artist_id,
            'album' => $request->album_id,
            'lyrics' => $request->lyrics,
            'type' => $request->type,
        ]);

        return redirect()->route('musics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $music = Music::destroy($id);

        return redirect()->route('musics.index');
    }
}
