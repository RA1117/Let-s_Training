<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Music;

class MusicController extends Controller
{
    public function index(Music $music)
    {
        //return view('graphs.weights.show')->with(['records' => $record->getdatePaginateByLimit(7)]);
        return view('musics.index')->with(['nusics' => $music->get()]);
    }
}
