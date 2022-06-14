@extends ('app')

@section('main')

<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h2>&times;</h2></span>
        </button>
      </div>
      <div class="modal-body">
        <p>Confirm delete <span id="deleteSpan">XXX</span>?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <form id="modalDeleteResourceForm" action="" method="post">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-primary" value="Delete song"/>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirm Add Song</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h2>&times;</h2></span>
        </button>
      </div>
      <div class="modal-body">
        <p>Choose the playlist to add: <span id="addSpan">XXX</span></p>
        <form id="modalAddResourceForm" action="{{ url('playlistsongs') }}" method="post">
            @csrf
            
            <input class="form-control" value="" hidden type="number" name="song_id" id="song_id" required />
            <input class="form-control" value="{{ auth()->user()->id }}" hidden type="number" name="user_id" required />
            <label for="">Playlist</label>
            <select class="form-control form-control-lg" name="playlist_id">
                @foreach ($playlists as $playlist)
                    @if($playlist->user_id == auth()->user()->id)
                        <option  value="{{ $playlist->id }}" >{{$playlist -> name }}</option>
                    @endif
                @endforeach
            </select>
            <br> 
            <input type="submit" class="btn btn-primary" value="Add Song"/>
            
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        
      </div>
    </div>
  </div>
</div>


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">Songs</h1>
      <div class="page-banner home-banner">
        <div class="row flex-wrap-reverse ">
          <div class="col-md-12 py-5 wow fadeInLeft" style="padding-left:55px">
            <div class="table-responsive">
                @if(Session::has('message'))
                    <div class="alert alert-{{ session()->get('type') }}" role="alert">
                        {{ session()->get('message') }}
                    </div>
                @endif
                              
              <table class="table table-rounded table-rounded2" style="border-spacing: 0px; border-collapse: separate;">
                    <thead class="bg-primary">
                        <tr>
                            <th scope="col">#id
                                <a href="{{ route('song.index', $orderidasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $orderiddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Name
                                <a href="{{ route('song.index', $ordernameasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $ordernamedesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Album
                                <a href="{{ route('song.index', $orderalbum_idasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $orderalbum_iddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Artist
                                <a href="{{ route('song.index', $orderartist_idasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $orderartist_iddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Genre
                                <a href="{{ route('song.index', $ordergenre_idasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $ordergenre_iddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Duration
                                <a href="{{ route('song.index', $orderdurationasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('song.index', $orderdurationdesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th class="plus" scope="col"><a href="{{ url('song/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($songs as $song)
                            <tr>
                                <td>
                                    {{ $song->id }}
                                </td>
                                <td>
                                    {{ $song->name }}
                                </td>
                                <td>
                                    
                                    @if($song->album)
                                        <a href="{{ url('album/' . $song->album->id) }}">
                                            {{ $song->album->name }}
                                        </a>
                                    @else
                                        <a href="{{ url('album/' . $song->song_album_id) }}">
                                            {{ $song->song_album_name }}
                                        </a>
                                    @endif
                                    
                                </td>
                                <td>
                                    
                                    @if($song->artist)
                                        <a href="{{ url('artist/' . $song->artist->id) }}">
                                            {{ $song->artist->name }}
                                        </a>
                                    @else
                                        <a href="{{ url('artist/' . $song->song_artist_id) }}">
                                            {{ $song->song_artist_name }}
                                        </a>
                                    @endif
                                    
                                </td>
                                
                                <td>
                                    @if($song->genre)
                                        <a href="{{ url('genre/' . $song->genre->id) }}">
                                            {{ $song->genre->name }}
                                        </a>
                                    @else
                                        <a href="{{ url('genre/' . $song->song_genre_id) }}">
                                            {{ $song->song_genre_name }}
                                        </a>
                                    @endif
                                    
                                    
                                </td>
                                <td>
                                    {{ $song->duration }}
                                </td>
                                <td>
                                    <a href="{{ url('song/' . $song->id) }}">Show</a>
                                </td>
                                <td>
                                    <a href="{{ url('song/' . $song->id . '/edit') }}">Edit</a>
                                </td>
                                <td> 
                                    <a href="javascript: void(0);" onclick="deletes('{{ $song->name }}','{{ url('song/' . $song->id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                        Delete
                                    </a>
                                </td>
                                <td> 
                                    <a href="javascript: void(0);" onclick="adds('{{ $song->name }}','{{ $song->id }}')"  data-toggle="modal" data-target="#modalAdd">
                                        <ion-icon name="add-circle-outline"></ion-icon>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
            
            <div class="row flechas">
                <div class="col-md-7">
                    <div class="row">
                        {{ $songs->onEachSide(2)->links() }}
                    </div>
                </div>
                
                <div class="col-md-5">
                    <ul class="pagination">
                        @foreach ($rpps as $linkData)
                            <li class="page-item @if($rpp == $linkData['rpp']) active @endif ">
                                <a href="{{ route ('song.index', $linkData) }}" class="page-link"> {{ $linkData['rpp'] }} </a>
                            </li>
                        @endforeach
                        <li class="page-item"> <span class="btn btn-light" style="text-align:center; vertical-align:middle">Per Page</span></li>
                        
                    </ul>
                </div>
                
            </div>
            
            
          </div>
              
        </div>
      </div>
</div>


@endsection