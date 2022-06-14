@extends ('app')

@section('main')

<div class="container">
  <h1 class="wow fadeInRight">Song Edit</h1>
  <h2 class="text-primary wow fadeInRight">{{$song->name}}</h2> <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
   
  @if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
  @endif
      <div class="page-banner home-banner h-50 mt-4">
        <div class="row flex-wrap-reverse">

          <form class="col-md-11 m-4 mt-5 mb-5 wow fadeInUp" action="{{ url('song/'.$song->id) }}" method="post">
              @method('put')
              @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Name</label>
                      <input class="form-control" value="{{ old( 'name' , $song -> name)}}" type="text" name="name" placeholder="song's name" minlength="1" maxlength="80" required />
                  </div>
                  
                  <div class="form-group col-md-4">
                      <label for="">Duration</label>
                      <input class="form-control" value="{{ old( 'duration' , $song -> duration)}}" type="time" name="duration" placeholder="song's duration" step="1" required />
                  </div>
              
                  
              
              </div>
              <div class="form-row">
                  
                  <div class="form-group col-md-4">
                    <label for="">Album</label>
                    <select class="form-control form-control-lg" name="album_id">
                        <option @if(old('album_id') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($albums as $album)
                            <option  @if($album->id == $song->album_id) selected @endif value="{{ $album -> id }}" >{{$album -> name }}</option>
                        @endforeach
                    </select>
                  </div>
                
                  <div class="form-group col-md-4">
                    <label for="">Artist</label>
                    <select class="form-control form-control-lg" name="artist_id">
                        <option @if(old('artist_id') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($artists as $artist)
                            <option  @if($artist->id == $song->artist_id) selected @endif value="{{ $artist -> id }}" >{{$artist -> name }}</option>
                        @endforeach
                    </select>
                  </div>
                
                  <div class="form-group col-md-4">
                    <label for="">Genre</label>
                    <select class="form-control form-control-lg" name="genre_id">
                        <option @if(old('genre_id') == '')  selected @endif  value="">&nbsp;</option>
                        @foreach ($genres as $genre)
                            <option  @if($genre->id == $song->genre_id) selected @endif value="{{ $genre -> id }}" >{{$genre -> name }}</option>
                        @endforeach
                    </select>
                  </div>
                
              
              </div>
              <!--<div class="form-row">-->
                
              <!--  <div class="input-group col-md-6">-->
              <!--          <label class="col-md-12 p-0" for="">Profile picture</label>-->
                  
              <!--          <div class="input-group mb-5 form-goup">-->
              <!--              <div class="input-group-prepend">-->
              <!--                  <span class="input-group-text">Upload</span>-->
              <!--              </div>-->
              <!--              <div class="custom-file">-->
              <!--                  <input type="file" class="custom-file-input" id="inputGroupFile01">-->
              <!--                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>-->
              <!--              </div>-->
              <!--          </div>-->
                        
              <!--    </div>-->
                          
              <!--</div>    -->
                  
                    
              <div class="form-row">
                <div class="col-md-4">
                  <input type="submit" name="btCreate"  type="submit" value="Edit" class="btn btn-primary">
                </div>
              </div>
              
            </form>
            
            
          </div>
      </div>
    </div>
</div>


@endsection