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


<div class="container">
  <h1 class=" wow fadeInRight">Album</h1>
  <h2 class="text-primary wow fadeInRight">{{$album->name}}</h2> <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
  @if(Session::has('message'))
      <div class="alert alert-{{ session()->get('type') }}" role="alert">
          {{ session()->get('message') }}
      </div>
  @endif
      <div class="page-banner home-banner">
        <div class="row flex-wrap-reverse h-100">
          <div class="col-md-3 relleno"></div>
          <div class="col-md-6 pt-5 wow fadeInLeft">

                          
              <table class="table table-rounded" style="border-spacing: 0px; border-collapse: separate;">
                <thead class="bg-primary">
                    <tr>
                        <th scope="col">Attribute</th>
                        <th scope="col">Value</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <th>Album's ID</th>
                            <td>{{ $album->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $album->name }}</td>
                        </tr>
                        
                        <tr>
                            <th>Type</th>
                            <td>{{ $album->type }}</td>
                        </tr>
                        
                </tbody>
            </table>
            <div class="col md-3 mt-5">
                <a class="btn btn-primary" href="{{ url('album/' . $album->id . '/edit') }}">Edit</a>
                <a class="btn btn-primary"href="javascript: void(0);" onclick="deletes('{{ $album->name }}','{{ url('album/' . $album->id) }}')" data-name="{{ $album->name }}" data-url="{{ url('album/' . $album->id) }}" data-toggle="modal" data-target="#modalDelete">Delete</a>
            </div>
              
          </div>
        </div>
      </div>
</div>


@endsection