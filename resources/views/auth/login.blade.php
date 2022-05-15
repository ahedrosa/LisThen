



<div class="modal fade" id="signIn" tabindex="-1" role="dialog" aria-labelledby="loginTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0 pb-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <h6 class="modal-title text-center mb-3" id="loginTitle">Login For Awesome Listing Experience</h6>
                <div class="modal-body">
                    
                    <form  method="POST" action="{{ route('login') }}" class="mx-4 pb-5">
                        @csrf
                        <div class="social-login">
                            
                            <div class="form-group">
                                <input id="email" name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            
                            <div class="form-group">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Password" autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            
                            <div class="d-flex align-items-center">
                                <label for="remember" class="setting-label pr-2">
                                    Remember me
                                </label>
                                <div class="switch switch-primary ml-auto">
                                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}> <label for="remember"></label>
                                </div>
                            </div>
                            
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            
                            <button type="submit" class="btn btn-block btn-bold btn-air btn-info load-page">
                                Login
                            </button>
                            
                        
                        
                        
                        
                        </div>
                    
                        <a href="javascript:void(0);" class="w-100 btn btn-social btn-facebook btn-default-air">
                            <span class="btn-content">
                                <ion-icon name="logo-facebook"></ion-icon>
                                <span class="pl-2">Login With Facebook</span>
                            </span>
                        </a>
                        <a href="javascript:void(0);" class="w-100 mt-3 btn btn-social btn-google btn-default-air">
                            <span class="btn-content">
                                <ion-icon name="logo-google"></ion-icon>
                                <span class="pl-2">Login With Google</span>
                            </span>
                        </a>
                        
                    </form>
                </div>
            </div>
        </div>
</div>

                    <!--<form method="POST" action="{{ route('login') }}">-->
                    <!--    @csrf-->

                    <!--    <div class="row mb-3">-->
                    <!--        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

                    <!--        <div class="col-md-6">-->
                    <!--            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->

                    <!--            @error('email')-->
                    <!--                <span class="invalid-feedback" role="alert">-->
                    <!--                    <strong>{{ $message }}</strong>-->
                    <!--                </span>-->
                    <!--            @enderror-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="row mb-3">-->
                    <!--        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

                    <!--        <div class="col-md-6">-->
                    <!--            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

                    <!--            @error('password')-->
                    <!--                <span class="invalid-feedback" role="alert">-->
                    <!--                    <strong>{{ $message }}</strong>-->
                    <!--                </span>-->
                    <!--            @enderror-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="row mb-3">-->
                    <!--        <div class="col-md-6 offset-md-4">-->
                    <!--            <div class="form-check">-->
                    <!--                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                    <!--                <label class="form-check-label" for="remember">-->
                    <!--                    {{ __('Remember Me') }}-->
                    <!--                </label>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->

                    <!--    <div class="row mb-0">-->
                    <!--        <div class="col-md-8 offset-md-4">-->
                    <!--            <button type="submit" class="btn btn-primary">-->
                    <!--                {{ __('Login') }}-->
                    <!--            </button>-->

                    <!--            @if (Route::has('password.request'))-->
                    <!--                <a class="btn btn-link" href="{{ route('password.request') }}">-->
                    <!--                    {{ __('Forgot Your Password?') }}-->
                    <!--                </a>-->
                    <!--            @endif-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</form>-->