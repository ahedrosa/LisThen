@extends ('app')

@section('main')

<div class="container">
  <h1 class="wow fadeInRight">Album Edit</h1>
  <h2 class="text-primary wow fadeInRight">{{$album->name}}</h2> <h2 class="wow fadeInRight back"style="float: right;margin-top: -45px;"><a href="{{ url()->previous() }}"><span id="ico" class="mai-arrow-back-circle-outline"></span>Back</a></h2>
   
  @if(Session::has('message'))
    <div class="alert alert-{{ session()->get('type') }}" role="alert">
        {{ session()->get('message') }}
    </div>
  @endif
      <div class="page-banner home-banner h-50 mt-4">
        <div class="row flex-wrap-reverse">

          <form class="col-md-11 m-4 mt-5 mb-5 wow fadeInUp" action="{{ url('album') }}" method="post">
              @csrf
              <div class="form-row">
                  <div class="form-group col-md-4">
                      <label for="">Name</label>
                      <input class="form-control" value="{{ old('name') }}" type="text" name="name" placeholder="album's name" minlength="1" maxlength="80" required />
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