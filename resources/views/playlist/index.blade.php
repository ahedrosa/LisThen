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
            <input type="submit" class="btn btn-primary" value="Delete playlist"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">Playlists</h1>
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
                                <a href="{{ route('playlist.index', $orderidasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('playlist.index', $orderiddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Name
                                <a href="{{ route('playlist.index', $ordernameasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('playlist.index', $ordernamedesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th class="plus" scope="col"><a href="{{ url('playlist/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($playlists as $playlist)
                            @if( $playlist->user_id == $user_id  )
                                <?php $hayplaylist = true; ?>
                                
                                <tr>
                                    <td>
                                        {{ $playlist->id }}
                                    </td>
                                    <td>
                                        {{ $playlist->name }}
                                    </td>
                                    
                                    <td>
                                        <a href="{{ url('playlist/' . $playlist->id) }}">Show</a>
                                    </td>
                                    <td>
                                        <a href="{{ url('playlist/' . $playlist->id . '/edit') }}">Edit</a>
                                    </td>
                                    <td> 
                                        <a href="javascript: void(0);" onclick="deletes('{{ $playlist->name }}','{{ url('playlist/' . $playlist->id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                
                            @endif
                        @endforeach
                    </tbody>
                  </table>
                  
            </div>
            
            <div class="row flechas">
                <div class="col-md-7">
                    <div class="row">
                        {{ $playlists->onEachSide(2)->links() }}
                    </div>
                </div>
                
                <div class="col-md-5">
                    <ul class="pagination">
                        @foreach ($rpps as $linkData)
                            <li class="page-item @if($rpp == $linkData['rpp']) active @endif ">
                                <a href="{{ route ('playlist.index', $linkData) }}" class="page-link"> {{ $linkData['rpp'] }} </a>
                            </li>
                        @endforeach
                        <li class="page-item"> <span class="btn btn-light" style="text-align:center; vertical-align:middle">Per Page</span></li>
                        
                    </ul>
                </div>
                
            </div>
            
            @if(!isset($appendData) && !isset($hayplaylist) )
                <hr>
                <div class="container container2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-7">
                                <h2>You have not Playlist created yet</h2>
                            </div>
                            
                            <div class="col-md-3">
			                    <div class="sidebar-footer"><a href="{{route('playlist.create')}}" class="btn btn-block btn-danger btn-air btn-bold"><i class="ion-md-musical-note"></i> <span>Add New Playlist</span></a></div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            @endif
            
          </div>
              
        </div>
      </div>
</div>



@endsection