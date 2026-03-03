<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    // ...existing code...

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        $musics = $album->musics; // Obtém todas as músicas relacionadas ao álbum
        return view('albums.show', compact('album', 'musics'));
    }

    // ...existing code...
}
