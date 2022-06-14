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
            <input type="submit" class="btn btn-primary" value="Delete album"/>
        </form>
      </div>
    </div>
  </div>
</div>


<div class="container container2">
    <h1 class="text-primary  wow fadeInRight">Albums</h1>
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
                            <a href="{{ route('album.index', $orderidasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                            <a href="{{ route('album.index', $orderiddesc) }}"><i class="fas fa-sort-alpha-up"></i></a>
                        </th>
                        <th scope="col">Name
                            <a href="{{ route('album.index', $ordernameasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                            <a href="{{ route('album.index', $ordernamedesc) }}"><i class="fas fa-sort-alpha-up"></i></a>
                        </th>
                        <th scope="col">Type
                            <a href="{{ route('album.index', $ordertypeasc) }}"><i class="fas fa-sort-alpha-down"></i></a>
                            <a href="{{ route('album.index', $ordertypedesc) }}"><i class="fas fa-sort-alpha-up"></i></a>
                        </th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th class="plus" scope="col"><a href="{{ url('album/create') }}">Add New<span class="mai-add-circle-outline"></span></a></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($albums as $album)
                        <tr>
                            <td>
                                {{ $album->id }}
                            </td>
                            <td>
                                {{ $album->name }}
                            </td>
                            <td>
                                {{ $album->type }}
                            </td>
                            <td>
                                <a href="{{ url('album/' . $album->id) }}">Show</a>
                            </td>
                            <td>
                                <a href="{{ url('album/' . $album->id . '/edit') }}">Edit</a>
                            </td>
                        <td> 
                            <a href="javascript: void(0);" onclick="deletes('{{ $album->name }}','{{ url('album/' . $album->id) }}')"  data-toggle="modal" data-target="#modalDelete">
                                Delete
                            </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
              
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection