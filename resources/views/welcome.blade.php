<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Listen App - Online Music Streaming App Template">
    <meta name="keywords" content="music template, music app, music web app, music, html music app">
    <title>Listhen App - Online Music Streaming App</title>
     <base href="{{url('/assets')}}/" >
    <link href="{{url ('/assets/images/logos/favicon.png') }}" rel="icon">
    <link rel="apple-touch-icon" href="{{url ('/assets/images/logos/touch-icon-iphone.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url ('/assets/images/logos/touch-icon-ipad.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url ('/assets/images/logos/touch-icon-iphone-retina.png') }}">
    <link rel="apple-touch-icon" sizes="167x167" href="{{url ('/assets/images/logos/touch-icon-ipad-retina.png') }}">
    <link href="{{url ('/assets/css/vendors.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{url ('/assets/css/styles.bundle.css') }}" rel="stylesheet" type="text/css">
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
            <div class="container d-flex align-items-center py-3">
                <a href="{{route('welcome')}}/" class="brand">
                <svg viewBox="-42.36968934329531 -82.72753440817931 84.73937868659063 117.55451042076287" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" class="jsx-2263963463 artboard-inner" style="width: 139.124px; height: 120px; max-height: 100%;"><g transform="translate(-26.598143924498622 0) scale(0.5592694542753528)" fill="#232323"><g id="line1"><path d="M39.973 0L39.973-10.090L14.766-10.090L14.766-50.414L4.676-50.414L4.676 0Z"></path><path d="M53.834-47.883C53.834-48.750 53.664-49.576 53.324-50.361C52.985-51.146 52.522-51.826 51.936-52.400C51.350-52.975 50.664-53.432 49.879-53.771C49.094-54.111 48.256-54.281 47.365-54.281C46.475-54.281 45.637-54.111 44.852-53.771C44.067-53.432 43.387-52.975 42.813-52.400C42.238-51.827 41.781-51.147 41.442-50.361C41.102-49.576 40.932-48.750 40.932-47.883C40.932-46.992 41.102-46.160 41.442-45.387C41.781-44.613 42.238-43.939 42.813-43.365C43.387-42.791 44.067-42.334 44.852-41.994C45.637-41.654 46.475-41.484 47.365-41.484C48.256-41.484 49.094-41.654 49.879-41.994C50.664-42.334 51.350-42.791 51.936-43.365C52.522-43.939 52.984-44.613 53.324-45.387C53.664-46.160 53.834-46.992 53.834-47.883ZM52.182 0L52.182-37.652L42.514-37.652L42.514 0Z"></path><path d="M78.489 0C80.129 0 81.676-0.311 83.129-0.932C84.582-1.553 85.848-2.408 86.926-3.498C88.004-4.588 88.860-5.854 89.492-7.295C90.125-8.736 90.442-10.289 90.442-11.953C90.442-13.594 90.125-15.105 89.492-16.488C88.860-17.871 88.004-19.055 86.926-20.039C85.848-21.023 84.582-21.791 83.129-22.342C81.676-22.893 80.129-23.168 78.489-23.168L68.504-23.168C67.848-23.168 67.285-23.408 66.817-23.889C66.348-24.369 66.114-24.949 66.114-25.629C66.114-26.285 66.348-26.848 66.817-27.316C67.285-27.785 67.848-28.020 68.504-28.020L87.946-28.020L87.946-37.582L68.504-37.582C66.840-37.582 65.282-37.271 63.828-36.650C62.375-36.029 61.110-35.180 60.032-34.102C58.953-33.023 58.104-31.758 57.483-30.305C56.862-28.852 56.551-27.293 56.551-25.629C56.551-23.965 56.862-22.406 57.483-20.953C58.104-19.500 58.953-18.229 60.032-17.139C61.110-16.049 62.375-15.188 63.828-14.555C65.282-13.922 66.840-13.605 68.504-13.605L78.489-13.605C79.145-13.605 79.707-13.500 80.176-13.289C80.645-13.078 80.879-12.633 80.879-11.953C80.879-11.297 80.645-10.734 80.176-10.266C79.707-9.797 79.145-9.563 78.489-9.563L56.551-9.563L56.551 0Z"></path></g></g><g transform="translate(-42.72360204482894 34.4337396775462) scale(0.5592694542753528)" fill="#232323"><g id="line2"><path d="M25.840 0L25.840-40.324L40.957-40.324L40.957-50.414L0.633-50.414L0.633-40.324L15.785-40.324L15.785 0Z"></path><path d="M53.201 0L53.201-21.516C53.201-22.500 53.389-23.432 53.764-24.311C54.139-25.189 54.654-25.957 55.311-26.613C55.967-27.270 56.740-27.785 57.631-28.160C58.522-28.535 59.471-28.723 60.479-28.723C61.463-28.723 62.389-28.535 63.256-28.160C64.123-27.785 64.885-27.270 65.541-26.613C66.197-25.957 66.713-25.189 67.088-24.311C67.463-23.432 67.651-22.500 67.651-21.516L67.580-21.516L67.580 0L77.248 0L77.248-21.516C77.248-23.836 76.809-26.021 75.930-28.072C75.051-30.123 73.856-31.916 72.344-33.451C70.832-34.986 69.057-36.193 67.018-37.072C64.979-37.951 62.799-38.391 60.479-38.391C59.213-38.391 57.971-38.209 56.752-37.846C55.533-37.482 54.350-36.867 53.201-36L53.201-52.629L43.604-52.629L43.604 0Z"></path><path d="M97.367-9.211L115.367-30.902C114.477-32.168 113.446-33.311 112.274-34.330C111.102-35.350 109.842-36.211 108.494-36.914C107.147-37.617 105.723-38.156 104.223-38.531C102.723-38.906 101.188-39.094 99.617-39.094C96.969-39.094 94.479-38.613 92.147-37.652C89.815-36.691 87.776-35.344 86.030-33.609C84.283-31.875 82.907-29.777 81.899-27.316C80.891-24.855 80.387-22.137 80.387-19.160C80.387-16.254 80.891-13.588 81.899-11.162C82.907-8.736 84.283-6.645 86.030-4.887C87.776-3.129 89.815-1.758 92.147-0.773C94.479 0.211 96.969 0.703 99.617 0.703C101.188 0.703 102.717 0.521 104.205 0.158C105.694-0.205 107.112-0.738 108.459-1.441C109.807-2.145 111.061-3.000 112.221-4.008C113.381-5.016 114.407-6.152 115.297-7.418L108.266-14.484C107.891-13.641 107.405-12.873 106.807-12.182C106.209-11.490 105.530-10.904 104.768-10.424C104.006-9.943 103.192-9.574 102.324-9.316C101.457-9.059 100.555-8.930 99.617-8.930C99.243-8.930 98.868-8.947 98.492-8.982C98.118-9.018 97.743-9.094 97.367-9.211ZM102.289-29.004L91.110-14.168C90.922-14.496 90.770-14.871 90.653-15.293C90.536-15.715 90.436-16.154 90.354-16.611C90.272-17.068 90.213-17.520 90.178-17.965C90.143-18.410 90.125-18.809 90.125-19.160C90.125-20.730 90.371-22.143 90.864-23.396C91.356-24.650 92.030-25.723 92.885-26.613C93.741-27.504 94.748-28.189 95.908-28.670C97.069-29.150 98.305-29.391 99.617-29.391C100.086-29.391 100.537-29.367 100.971-29.320C101.405-29.273 101.844-29.168 102.289-29.004Z"></path><path d="M128.104 0L128.104-21.516C128.104-22.500 128.291-23.432 128.666-24.311C129.041-25.189 129.557-25.957 130.213-26.613C130.870-27.270 131.643-27.785 132.534-28.160C133.424-28.535 134.373-28.723 135.381-28.723C136.366-28.723 137.291-28.535 138.159-28.160C139.026-27.785 139.788-27.270 140.444-26.613C141.100-25.957 141.616-25.189 141.991-24.311C142.366-23.432 142.553-22.500 142.553-21.516L142.553 0L152.151 0L152.151-21.516C152.151-23.836 151.711-26.021 150.832-28.072C149.954-30.123 148.752-31.916 147.229-33.451C145.705-34.986 143.924-36.193 141.885-37.072C139.846-37.951 137.678-38.391 135.381-38.391C133.248-38.391 131.204-38.010 129.246-37.248C127.289-36.486 125.538-35.402 123.991-33.996L120.827-37.652L118.506-37.652L118.506 0Z"></path></g></g><g transform="translate(-25.312060796232508 -87.06659897948063) scale(0.5104781848589797)" id="logomark"><g fill="#232323"><path d="M36.222 42.647L24.131 63.591h24.183zM49 60.778v-13.67l-10.257-4.096zM49 79.485V65.59h-8.022zM34.646 41.377l-9.938-3.968 6.114 10.59zM37.514 36.41H27.6l8.056 3.216zM72.4 36.41h-9.914l1.857 3.216zM50 18.783L37.737 40.024h24.526z"></path><path d="M50 8.5C27.08 8.5 8.5 27.08 8.5 50S27.08 91.5 50 91.5 91.5 72.92 91.5 50 72.92 8.5 50 8.5zm28.468 55.59a1 1 0 0 1-.866 1.5h-16.27L50.865 83.718a1 1 0 0 1-1.732 0L38.669 65.59h-16.27a1 1 0 0 1-.867-1.5L29.667 50l-8.135-14.09a1 1 0 0 1 .866-1.5h16.27l10.466-18.128c.357-.619 1.375-.619 1.732 0L61.332 34.41h16.27a1 1 0 0 1 .866 1.5L70.332 50l8.136 14.09z"></path><path d="M69.178 48l6.115-10.591-9.94 3.968zM51.686 63.59h24.183L63.778 42.648zM51 60.778l10.257-17.766L51 47.107zM41.664 42.024L50 45.353l8.336-3.329zM51 79.485l8.022-13.894H51z"></path></g></g></svg>
                
                
                </a>
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
                            
                            @auth
                                <a href="{{url('')}}/home" class="btn btn-pill btn-air btn-sm btn-danger">GO HOME!</a>    <!------------------  ????????¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿???????????¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿¿   ------------------->
                            @endauth
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
                            style="background-image: url('{{url ('/assets/images/background/vertical/1.jpg') }}')">
                            <div class="event-content p-4"><a href="#">
                                    <h6>New Year Party</h6>
                                </a><span class="countdown mb-3"></span> <a href="#"
                                    class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="h-50 pb-4">
                            <div class="h-100 event event-h bg-img bg-img-radius-lg"
                                style="background-image: url('{{url ('/assets/images/background/horizontal/1.jpg') }}')">
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
                                style="background-image: url('{{url ('/assets/images/background/horizontal/2.jpg') }}')">
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
                            style="background-image: url('{{url ('/assets/images/background/vertical/1.jpg') }}')">
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
                                        src="{{url ('/assets/images/cover/large/1.jpg') }}" alt="Arebica Luna"></div>
                                <h6 class="mb-0 mt-2">Arebica Luna</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/images/cover/large/2.jpg') }}" alt="Gerrina Linda"></div>
                                <h6 class="mb-0 mt-2">Gerrina Linda</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/images/cover/large/3.jpg') }}" alt="Arebica Luna"></div>
                                <h6 class="mb-0 mt-2">Zunira Willy</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/images/cover/large/4.jpg') }}" alt="Johnny Marro"></div>
                                <h6 class="mb-0 mt-2">Johnny Marro</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/images/cover/large/5.jpg') }}" alt="Jina Moore"></div>
                                <h6 class="mb-0 mt-2">Jina Moore</h6>
                            </div>
                            <div class="text-center">
                                <div class="avatar avatar-xl avatar-circle mx-auto"><img
                                        src="{{url ('/assets/images/cover/large/6.jpg') }}" alt="Rasomi Pelina"></div>
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
    
    @include('user.logout')
    
    
    <div class="backdrop header-backdrop"></div>
    <div class="backdrop sidebar-backdrop"></div>
    <script defer src="{{url ('/assets/js/vendors.bundle.js') }}"></script>
    <script defer src="{{url ('/assets/js/scripts.bundle.js') }}"></script>
    <script  defer type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    
    @if(Session::has('errors'))
    
        @if (Session::has('register-modal'))
        <script type="text/javascript" >
        
            jQuery(document).ready(function($) {
                $( document ).ready(function() {
                    $('#register').modal('toggle');
                });
            });   
            
        </script>
        @else
            <script type="text/javascript" >
            
                jQuery(document).ready(function($) {
                    $( document ).ready(function() {
                        $('#signIn').modal('toggle');
                    });
                });   
            </script>
        @endif
        
    @elseif(Session::has('login-modal'))
    
        <script type="text/javascript" >
        
            jQuery(document).ready(function($) {
                $( document ).ready(function() {
                    $('#signIn').modal('toggle');
                });
            });   
        </script>
    @endif
    
    {{-- dd(session()) --}}
    
    <!--  RouteServiceProvider   -->
</body>

</html>