






<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 pb-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h6 class="modal-title text-center mb-3" id="loginTitle">Register For Awesome Listing Experience</h6>
                <div class="modal-body">
                    
                    
                    <form class="mx-4 pb-5" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="social-login">
                            
                            <div class="form-group">
                                <input  id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Your Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input  id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input  id="password" name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="password" placeholder="Your Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Your Password" >
                            </div>
                            
                            
                            <button type="submit" class="btn btn-block btn-bold btn-air btn-info load-page">
                                {{ __('Register') }}
                            </button>
                            
                        </div>
                        
                        
                        <a href="javascript:void(0);" class="w-100 btn btn-social btn-facebook btn-default-air">
                            <span class="btn-content">
                                <ion-icon name="logo-facebook"></ion-icon>
                                <span class="pl-2">Register With Facebook</span>
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="w-100 mt-3 btn btn-social btn-google btn-default-air">
                            <span class="btn-content">
                                <ion-icon name="logo-google"></ion-icon>
                                <span class="pl-2">Register With Google</span>
                            </span>
                        </a>
                    </form>
                    
                    
                </div>
            </div>
        </div>
</div>


