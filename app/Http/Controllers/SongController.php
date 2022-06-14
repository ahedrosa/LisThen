<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Album;
use Illuminate\Http\Request;
use DB;

class SongController extends Controller
{
    private function getAllAttributes($model) {
        $columns = $model->getFillable();
        $attributes = $model->getAttributes();
        $add = array_merge(array_flip($columns), $attributes);
        $add['id'] = 0;
        return $add;
    }
    
    private function verifySort($sort) {
        /*$sorts = ['id' => 1, 'name' => 1, 'category' => 1, 'song' => 1, 'budget' => 1];*/
        $sorts = $this->getAllAttributes(new Song());
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
        $sorts = $this->getAllAttributes(new Song());
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

        $song = new Song();
        
        if($search != null) {
            
            // $song = DB::table('song')
            //         -> leftJoin('artist', 'artist.id' , '=' , 'artist_id')
            //         -> leftJoin ('album' , 'album.id', '=', 'album_id' )
            //         -> leftJoin ('genre' , 'genre.id', '=', 'genre_id' )
            //         -> where ('song.id', 'like', '%' . $search . '%')
            //              ->orWhere('song.name', 'like', '%' . $search . '%')
            //              ->orWhere('album_id', 'like', '%' . $search . '%')
            //              ->orWhere('artist_id', 'like', '%' . $search . '%')
            //              ->orWhere('genre_id', 'like', '%' . $search . '%')
            //              ->orWhere('duration', 'like', '%' . $search . '%')
            //              ->orWhere('genre.name', 'like', '%' . $search . '%')
            //              ->orWhere('album.name', 'like', '%' . $search . '%')
            //              ->orWhere('artist.name', 'like', '%' . $search . '%')
            //             ;
            
            $song = $song   -> leftJoin ('artist' , 'artist.id', 'artist_id' )
                            -> leftJoin ('album' , 'album.id',  'album_id' )
                            -> leftJoin ('genre' , 'genre.id',  'genre_id' )
                            
                            -> addSelect('song.id as id')
                            -> addSelect('song.name as name')
                            -> addSelect('artist.name as song_artist_name')
                            -> addSelect('album.name as song_album_name')
                            -> addSelect('genre.name as song_genre_name')
                            -> addSelect('song.duration as duration')
                            -> addSelect('artist.id as song_artist_id')
                            -> addSelect('album.id as song_album_id')
                            -> addSelect('genre.id as song_genre_id')
                            
                            -> where ('song.id', 'like', '%' . $search . '%')
                                         ->orWhere('song.name', 'like', '%' . $search . '%')
                                         ->orWhere('album_id', 'like', '%' . $search . '%')
                                         ->orWhere('artist_id', 'like', '%' . $search . '%')
                                         ->orWhere('genre_id', 'like', '%' . $search . '%')
                                         ->orWhere('duration', 'like', '%' . $search . '%')
                                         ->orWhere('genre.name', 'like', '%' . $search . '%')
                                         ->orWhere('album.name', 'like', '%' . $search . '%')
                                         ->orWhere('artist.name', 'like', '%' . $search . '%')
                                         
                                        ;
          
        }
        
        if($sort != null && $order != null) {
            $song = $song->orderBy($sort, $order);
        }
        
        //dd([$appendData, $data]);
        $data['appendData'] = $appendData;
        $song = $song->orderBy('song.name', 'asc')->paginate($rpp)->appends($appendData);
        $data['songs'] = $song; //Song::paginate(10);
        $data['rutaSearch'] = route('song.index');
        
        $data['albums'] = Album::all();
        $data['artists'] = Artist::all();
        $data['genres'] = Genre::all();
        $data['playlists'] = Playlist::all();
        return view('song.index', $data);
        
        
        // return view('song.index', ['songs' => Song::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Song $song)
    {
        $data = [];
        $data['song'] = $song;
        $data['albums'] = Album::all();
        $data['artists'] = Artist::all();
        $data['genres'] = Genre::all();
        
        return view ('song.create', $data);
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
        $data['message'] = 'New song has been inserted successfully.';
        $data['type'] = 'success';
        $song = new song($request->all());
        try {
            $result = $song->save();
        } catch( \Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The song can not be inserted.';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('song')->with($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        return view('song.show', ['song' => $song]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        $data = [];
        $data['song'] = $song;
        $data['albums'] = Album::all();
        $data['artists'] = Artist::all();
        $data['genres'] = Genre::all();
        return view('song.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {
        $data = [];
        $data['message'] = 'The song ' . $song->name . ' has been updated successfully.';
        $data['type'] = 'success';
        try {
            $result = $song->update($request->all());
        } catch(\Exception $e) {
            $result = false;
        }
        if(!$result) {
            $data['message'] = 'The song can not be updated. ';
            $data['type'] = 'danger';
            return back()->withInput()->with($data);
        }
        return redirect('song')->with($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
     
    public function destroy(Song $song)
    {
        $data = [];
        $data['message'] = 'The song ' . $song->name . ' has been removed.';
        $data['type'] = 'success';
        try {
            $song->delete();
        } catch( \Exception $e) {
            $data['message'] = 'The song ' . $song->name . ' has NOT been removed.';
            $data['type'] = 'danger';
        }
        return redirect('song')->with($data);
    }
    
}
