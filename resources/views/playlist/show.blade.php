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
        <p>Confirm delete <span id="deleteSpan">XXX</span> from {{$playlist_name}} ?</p>
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


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">{{$playlist_name }}</h1>
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
                            <th scope="col">Song Number 
                            </th>
                            <th scope="col">Name
                                
                            </th>
                            
                            <th scope="col">Duration
                                
                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number = 1 ?>
                        @foreach ($playlist as $song)
                            @if($song->playlist_song_name != '')
                                <tr>
                                    <td>
                                        {{ $number }}
                                    </td>
                                    <td>
                                        <a href="{{ url('song/' . $song->playlist_song_id) }}">                                    
                                            {{ $song->playlist_song_name }}
                                        </a> 
                                    </td>
                                    <td>
                                        {{ $song->playlist_song_duration }}
                                    </td>
    
                                    <td></td>
                                    <td></td>
                                    
                                    <td></td>
                                    </td><td>
                                        <a href="{{ url('song/' . $song->playlist_song_id) }}">Show</a>
                                    </td>
                                    <td> 
                                        <a href="javascript: void(0);" onclick="deletes('{{ $song->playlist_song_name }}','{{ url('playlistsongs/' . $song->playlist_songs_id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                            Delete 
                                        </a>
                                    </td>
                                </tr>
                            @endif
                            <?php $number++ ?>
                        @endforeach
                    </tbody>
                  </table>
            </div>
            
            
            
            
            
          </div>
              
        </div>
      </div>
</div>


@endsection