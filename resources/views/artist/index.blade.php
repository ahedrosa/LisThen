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
            <input type="submit" class="btn btn-primary" value="Delete artist"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">Artists</h1>
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
                                <a href="{{ route('artist.index', $orderidasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('artist.index', $orderiddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col">Name
                                <a href="{{ route('artist.index', $ordernameasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                                <a href="{{ route('artist.index', $ordernamedesc) }}"><i class="fas fa-sort-alpha-up"></i></a>  
                            </th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th class="plus" scope="col"><a href="{{ url('artist/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($artists as $artist)
                            <tr>
                                <td>
                                    {{ $artist->id }}
                                </td>
                                <td>
                                    {{ $artist->name }}
                                </td>
                                <td>
                                    <a href="{{ url('artist/' . $artist->id) }}">Show</a>
                                </td>
                                <td>
                                    <a href="{{ url('artist/' . $artist->id . '/edit') }}">Edit</a>
                                </td>
                                <td> 
                                    <a href="javascript: void(0);" onclick="deletes('{{ $artist->name }}','{{ url('artist/' . $artist->id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                        Delete
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
                        {{ $artists->onEachSide(2)->links() }}
                    </div>
                </div>
                
                <div class="col-md-5">
                    <ul class="pagination">
                        @foreach ($rpps as $linkData)
                            <li class="page-item @if($rpp == $linkData['rpp']) active @endif ">
                                <a href="{{ route ('artist.index', $linkData) }}" class="page-link"> {{ $linkData['rpp'] }} </a>
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