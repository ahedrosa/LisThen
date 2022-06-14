<?php

namespace App\Http\Controllers;

use App\Models\PlaylistSongs;
use Illuminate\Http\Request;

class PlaylistSongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
       
        $data = [];
        $data['message'] = 'New song has been added successfully to your playlist.';
        $data['type'] = 'success';
        $playlistSongs = new playlistSongs($request->all());
        try {
            $result = $playlistSongs->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The song can not be added to the playlist.  '.$e;
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return back()->withInput()->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlaylistSongs  $playlistSongs
     * @return \Illuminate\Http\Response
     */
    public function show(PlaylistSongs $playlistSongs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlaylistSongs  $playlistSongs
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaylistSongs $playlistSongs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlaylistSongs  $playlistSongs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlaylistSongs $playlistSongs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlaylistSongs  $playlistSongs
     * @return \Illuminate\Http\Response
     */
    public function destroy($playlistSong_id)
    {
        
        $data = [];
        $data['message'] = 'The song has been removed from the playlist.';
        $data['type'] = 'success';
        try {
            $playlistSongs = PlaylistSongs::find( $playlistSong_id );     
            $playlistSongs->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The song has NOT been removed from the playlist';
            $data['type'] = 'danger';
        }
        return back()->withInput()->with($data);
    }
}
