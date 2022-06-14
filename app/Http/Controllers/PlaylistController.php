<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;
use DB;

class PlaylistController extends Controller
{
    
    private function getAllAttributes($model) {
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();
        $add = array_merge(array_flip($columns), $attributes);
        $add['id'] = 0;
        return $add;
    }
    
    private function verifySort($sort) {
        /*$sorts = ['id' => 1, 'name' => 1, 'category' => 1, 'playlist' => 1, 'budget' => 1];*/
        $sorts = $this->getAllAttributes(new Playlist());
        if(isset($sorts[$sort])) {
            return $sort;
        }
        return null;
    }
    
    
    private function verifyOrder($order) {
        if($order == null) {
            return $order;
        } elseif($order == 'desc'){
            return $order;
        }
        return 'asc';
    }

    private function getRecordsPerPageArray($array) {
        $result = [];
        $rpps = $this->getRpps();
        foreach($rpps as $rpp => $value) {
            $result['rpps'][] = array_merge($array, ['rpp' =>  $rpp]);
        }
        return $result;
    }
    
    private function getOrderArrays($array) {
        $data = [];
        $orders = ['asc', 'desc'];
        $sorts = $this->getAllAttributes(new Playlist());
        foreach($orders as $order){
            foreach($sorts as $sortindex => $sort){
                $data['order' . $sortindex . $order] = array_merge(['sort' => $sortindex, 'order' => $order], $array);
            }
        }
        return $data;
    }
    
    private function getRpps() {
        return [2 => 1, 5 => 1, 10 => 1, 20 => 1, 50 => 1, 100 => 1];
    }
    
    private function verifyRpp($rpp) {
        $rpps = $this->getRpps();
        if(isset($rpps[$rpp])) {
            return $rpp;
        }
        return 10;
    }
    
    
    
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $data = [];
        $appendData = [];
        $filterData = [];
        $rppData = [];
        $sortData = [];
        $searchData = [];
        
        $page = $request->input('page');
        $filter = $request->input('filter');
        $search = $request->input('search');
        $sort = $this->verifySort($request->input('sort'));
        $order = $this->verifyOrder($request->input('order'));
        $rpp = $this->verifyRpp($request->input('rpp'));
        
        if($sort != null && $order != null) {
            $sortData = ['sort' => $sort, 'order' => $order];
        }

        if($rpp != 10) {
            $rppData['rpp'] = $rpp;
        }
    
        if($search != null){
            $searchData['search'] = $search;
            // $data['search']  = $search;
        }
        
        $appendData = array_merge($appendData, $rppData);
        $appendData = array_merge($appendData, $sortData);
        $appendData = array_merge($appendData, $searchData);

        $data = array_merge($data, $this->getOrderArrays($rppData, $searchData));
        $data = array_merge($data, $this->getRecordsPerPageArray($appendData));
        $data['rpp'] = $rpp;

        $playlist = new Playlist();
        
        if($search != null) {
            
            // $playlist = DB::table('playlist')
            //         -> leftJoin('artist', 'artist.id' , '=' , 'artist_id')
            //         -> leftJoin ('album' , 'album.id', '=', 'album_id' )
            //         -> leftJoin ('genre' , 'genre.id', '=', 'genre_id' )
            //         -> where ('playlist.id', 'like', '%' . $search . '%')
            //              ->orWhere('playlist.name', 'like', '%' . $search . '%')
            //              ->orWhere('album_id', 'like', '%' . $search . '%')
            //              ->orWhere('artist_id', 'like', '%' . $search . '%')
            //              ->orWhere('genre_id', 'like', '%' . $search . '%')
            //              ->orWhere('duration', 'like', '%' . $search . '%')
            //              ->orWhere('genre.name', 'like', '%' . $search . '%')
            //              ->orWhere('album.name', 'like', '%' . $search . '%')
            //              ->orWhere('artist.name', 'like', '%' . $search . '%')
            //             ;
            
            $playlist = $playlist   //-> leftJoin ('artist' , 'artist.id', 'artist_id' )
                                    // -> leftJoin ('album' , 'album.id',  'album_id' )
                                    // -> leftJoin ('genre' , 'genre.id',  'genre_id' )
                                    
                                    // -> addSelect('playlist.id as id')
                                    // -> addSelect('playlist.name as name')
                                    // -> addSelect('artist.name as playlist_artist_name')
                                    // -> addSelect('album.name as playlist_album_name')
                                    // -> addSelect('genre.name as playlist_genre_name')
                                    // -> addSelect('playlist.duration as duration')
                                    // -> addSelect('artist.id as playlist_artist_id')
                                    // -> addSelect('album.id as playlist_album_id')
                                    // -> addSelect('genre.id as playlist_genre_id')
                                    
                                    -> where ('id', 'like', '%' . $search . '%')
                                                 ->orWhere('name', 'like', '%' . $search . '%')
                                                //  ->orWhere('album_id', 'like', '%' . $search . '%')
                                                //  ->orWhere('artist_id', 'like', '%' . $search . '%')
                                                //  ->orWhere('genre_id', 'like', '%' . $search . '%')
                                                //  ->orWhere('duration', 'like', '%' . $search . '%')
                                                //  ->orWhere('genre.name', 'like', '%' . $search . '%')
                                                //  ->orWhere('album.name', 'like', '%' . $search . '%')
                                                //  ->orWhere('artist.name', 'like', '%' . $search . '%')
                                                 
                                                ;
          
        }
        
        if($sort != null && $order != null) {
            $playlist = $playlist->orderBy($sort, $order);
        }
        
        //dd([$appendData, $data]);
        $data['appendData'] = $appendData;
        $playlist = $playlist->orderBy('playlist.name', 'asc')->paginate($rpp)->appends($appendData);
        $data['playlists'] = $playlist; //Playlist::paginate(10);
        $data['rutaSearch'] = route('playlist.index');
        $data['user_id'] = $request->user()->id;
        return view('playlist.index', $data);
        
        
        // return view('playlist.index', ['playlists' => Playlist::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Playlist $playlist)
    {
        $data = [];
        $data['playlist'] = $playlist;
        return view ('playlist.create', $data);
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
        $data['message'] = 'New playlist has been inserted successfully.';
        $data['type'] = 'success';
        $playlist = new playlist($request->all());
        try {
            $result = $playlist->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The playlist can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('playlist')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist, Request $request)
    {
        
        $playlist_id = $playlist->id;
        $user_id = $request->user()->id;
        $playlistQuery = DB::table('playlist')
                    -> leftJoin('playlist_songs', 'playlist_songs.playlist_id' , '=' , 'playlist.id')
                    -> leftJoin('song', 'song.id' , '=' , 'playlist_songs.song_id')
                    -> where ('playlist.user_id', '=', $user_id )
                    -> where ('playlist.id', '=', $playlist_id )
                        -> addSelect('playlist.id as id')
                        -> addSelect('playlist.name as name')
                        -> addSelect('song.id as playlist_song_id')
                        -> addSelect('song.name as playlist_song_name')
                        -> addSelect('song.duration as playlist_song_duration')
                        -> addSelect('playlist_songs.id as playlist_songs_id')
                        -> get();
                    
                    
                    
                        //  ->orWhere('playlist.name', 'like', '%' . $search . '%')
                        //  ->orWhere('album_id', 'like', '%' . $search . '%')
                        //  ->orWhere('artist_id', 'like', '%' . $search . '%')
                        //  ->orWhere('genre_id', 'like', '%' . $search . '%')
                        //  ->orWhere('duration', 'like', '%' . $search . '%')
                        //  ->orWhere('genre.name', 'like', '%' . $search . '%')
                        //  ->orWhere('album.name', 'like', '%' . $search . '%')
                        //  ->orWhere('artist.name', 'like', '%' . $search . '%')
                        
                         
                        ;
        
        return view('playlist.show', ['playlist' => $playlistQuery],['playlist_name'=> $playlist->name]);                                                
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        $data = [];
        $data['playlist'] = $playlist;
        return view('playlist.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $data = [];
        $data['message'] = 'The playlist ' . $playlist->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $playlist->update($request->all());
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The playlist can not be updated. ';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('playlist')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Playlist $playlist)
    {   
        
        $data = [];
        $data['message'] = 'The playlist ' . $playlist->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $playlist->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The playlist ' . $playlist->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('playlist')->with($data);
    }
    
}
