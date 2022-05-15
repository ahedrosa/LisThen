<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/landing.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 11:38:06 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords"
        content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
    <title>Listhen App - Online Music Streaming App</title>
    <base href="{{url('/')}}/" >
    <link href="{{url ('/assets/images/logos/favicon.png') }}') }}')}}" rel="icon">
    <link rel="apple-touch-icon" href="{{url ('/assets/admin/images/logos/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url ('/assets/admin/images/logos/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url ('/assets/admin/images/logos/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{url ('/assets/admin/images/logos/touch-icon-ipad-retina.png') }}">
    <link href="{{url ('/assets/admin/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{url ('/assets/admin/css/styles.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    
</head>

<body>
    <div id="loading">
        <div class="loader">
            <div class="eq"><span class="eq-bar eq-bar--1"></span> <span class="eq-bar eq-bar--2"></span> <span
                    class="eq-bar eq-bar--3"></span> <span class="eq-bar eq-bar--4"></span> <span
                    class="eq-bar eq-bar--5"></span> <span class="eq-bar eq-bar--6"></span></div><span
                class="text">Loading</span>
        </div>
    </div>
    <div id="wrapper" data-scrollable="true">
        <header id="landing-header">
            <div class="container d-flex align-items-center py-3"><a
                    href="https://www.kri8thm.in/html/listen/theme/index.html" class="brand"><img
                        src="https://www.kri8thm.in/html/listen/theme/assets/images/logos/logo.svg"
                        alt="listen-app"></a>
                <ul class="header-auto-options ml-auto d-flex align-items-center">
                @guest
                    @if (Route::has('login'))
                        <li>
                            <a href="#" class="link" data-toggle="modal" data-target="#signIn">Sign in</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li>
                            <a href="#" class="btn btn-pill btn-air btn-sm btn-danger" data-toggle="modal" data-target="#register">Sign up</a>
                        </li>
                    @endif
                    @else
                    <li>
                        {{ Auth::user()->name }}
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <span class="h5"><ion-icon name="log-out-outline"></ion-icon></span>
                            Logout
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </header>
        <div class="banner landing-banner bg-landing">
            <div class="banner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 mx-auto text-center">
                            <h1>World's best music app</h1>
                            <h1></h1>
                            <p class="font-lg">More than 10 millions free music & 15 millions paid music track. Listen now!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center mb-5">
                        <h3>Features of Listen App</h3>
                        <p class="font-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6 text-center feature"><img
                                    src="https://www.kri8thm.in/html/listen/theme/assets/images/svg/music.svg" alt="">
                                <h5 class="mt-3">Songs</h5>
                                <p>Millions of free and paid track available in this app.</p>
                            </div>
                            <div class="col-lg-3 col-sm-6 text-center feature"><img
                                    src="https://www.kri8thm.in/html/listen/theme/assets/images/svg/comment.svg" alt="">
                                <h5 class="mt-3">Comments</h5>
                                <p>You can share your thought on your favorite.</p>
                            </div>
                            <div class="col-lg-3 col-sm-6 text-center feature"><img
                                    src="https://www.kri8thm.in/html/listen/theme/assets/images/svg/event.svg" alt="">
                                <h5 class="mt-3">Events</h5>
                                <p>Create free and paid event in a few minutes</p>
                            </div>
                            <div class="col-lg-3 col-sm-6 text-center feature"><img
                                    src="https://www.kri8thm.in/html/listen/theme/assets/images/svg/other.svg" alt="">
                                <h5 class="mt-3">Other</h5>
                                <p>You can also like, dislike, share, add favorite and many more.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-section light-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto mb-5 text-center">
                        <h3>Upcoming Events</h3>
                        <p class="font-md">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam.</p>
                    </div>
                </div>
                <div class="row h-100">
                    <div class="col-lg-3 pb-4">
                        <div class="h-100 event event-v bg-img bg-img-radius-lg"
                            style="background-image: url('{{url ('/assets/admin/images/background/vertical/1.jpg') }}')">
                            <div class="event-content p-4"><a href="#">
                                    <h6>New Year Party</h6>
                                </a><span class="countdown mb-3"></span> <a href="#"
                                    class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-50 pb-4">
                            <div class="h-100 event event-h bg-img bg-img-radius-lg"
                                style="background-image: url('{{url ('/assets/admin/images/background/horizontal/1.jpg') }}')">
                                <div class="event-content p-4"><a href="#">
                                        <h6>Dance with DJ Nowan</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex
                                        explicabo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-50 pb-4">
                            <div class="h-100 event event-h bg-img bg-img-radius-lg"
                                style="background-image: url('{{url ('/assets/admin/images/background/horizontal/2.jpg') }}')">
                                <div class="event-content p-4">
                                    <a href="#">
                                        <h6>Move You's Legs</h6>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex
                                        explicabo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 pb-4">
                        <div class="h-100 event event-v bg-img bg-img-radius-lg"
                            style="background-image: url('{{url ('/assets/admin/images/background/vertical/1.jpg') }}')">
                            <div class="event-content p-4">
                                <a href="#"> <h6>New Year Party</h6> </a>
                                <span class="countdown mb-3"></span> 
                                <a href="#" class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto text-center mb-5">
                        <h3>Trending Artist</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-10 mx-auto">
                        <div class="carousel-item-6">
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/1.jpg') }}" alt="Arebica Luna"></div>
                                <h6 class="mb-0 mt-2">Arebica Luna</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/2.jpg') }}" alt="Gerrina Linda"></div>
                                <h6 class="mb-0 mt-2">Gerrina Linda</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/3.jpg') }}" alt="Arebica Luna"></div>
                                <h6 class="mb-0 mt-2">Zunira Willy</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/4.jpg') }}" alt="Johnny Marro"></div>
                                <h6 class="mb-0 mt-2">Johnny Marro</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/5.jpg') }}" alt="Jina Moore"></div>
                                <h6 class="mb-0 mt-2">Jina Moore</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/admin/images/cover/large/6.jpg') }}" alt="Rasomi Pelina"></div>
                                <h6 class="mb-0 mt-2">Rasomi Pelina</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer" class="bg-img">
            <div class="footer-content"><a href="#" class="email">info@listenapp.com</a>
                <div class="platform-btn-inline">
                    <a href="#" class="btn btn-dark btn-air platform-btn"><ion-icon name="logo-facebook"></ion-icon>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">Android</span>
                        </div>
                    </a>
                    <a href="#" class="btn btn-danger btn-air platform-btn">
                        <i class="ion-logo-apple"></i>
                        <div class="platform-btn-info">
                            <span class="platform-desc">Available on</span>
                            <span class="platform-name">App Store</span>
                        </div>
                    </a>
                </div>
            </div>
        </footer>
    </div>
    @include('auth.login')
    
    @include('auth.register')
    
    
    
    
    
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="backdrop header-backdrop"></div>
    <div class="backdrop sidebar-backdrop"></div>
    <script src="{{url ('/assets/admin/js/vendors.bundle.js') }}"></script>
    <script src="{{url ('/assets/admin/js/scripts.bundle.js') }}"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
    {{-- $modal=true --}}
    
    {{-- Session::put('modal_login',$modal) --}}
    {{-- dd(session()) --}}
    @if(Session::has('modal'))
        <script type="text/javascript" >
        
            jQuery(document).ready(function($) {
                $( document ).ready(function() {
                    $('#signIn').modal('toggle');
                });
            });   
        </script>
    @elseif(Session::has('errors'))        
        <script type="text/javascript" >
        
            jQuery(document).ready(function($) {
                $( document ).ready(function() {
                    $('#register').modal('toggle');
                });
            });   
            
        </script>
    @endif
    
    <!--  RouteServiceProvider   -->
</body>

</html>