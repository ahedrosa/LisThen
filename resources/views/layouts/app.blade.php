<!DOCTYPE html>
<html lang="en">
	<!-- Mirrored from www.kri8thm.in/html/listen/theme/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Mar 2022 11:38:13 GMT -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<meta name="description" content="Listen App - Online Music Streaming App Template">
		<meta name="keywords" content="music template, music app, music web app, responsive music app, music, themeforest, html music app template, css3, html5">
        <base href="{{url('/assets')}}/" >
		<title>Listen App - Online Music Streaming App</title>
		<link href="../assets/images/logos/favicon.png" rel="icon">
		<link rel="apple-touch-icon" href="../assets/images/logos/touch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="152x152" href="../assets/images/logos/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="180x180" href="../assets/images/logos/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="167x167" href="../assets/images/logos/touch-icon-ipad-retina.png">
		<link href="../assets/css/vendors.bundle.css" rel="stylesheet" type="text/css">
		<link href="../assets/css/styles.bundle.css" rel="stylesheet" type="text/css">
		<link href="../assets/css/style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="loading">
			<div class="loader">
				<div class="eq"><span class="eq-bar eq-bar--1"></span> <span class="eq-bar eq-bar--2"></span> <span class="eq-bar eq-bar--3"></span> <span class="eq-bar eq-bar--4"></span> <span class="eq-bar eq-bar--5"></span> <span class="eq-bar eq-bar--6"></span></div>
    			<span class="text">Loading</span>
			</div>
		</div>
		<div id="wrapper" data-scrollable="true">
			
			<aside id="sidebar" class="sidebar-primary">
				<div class="sidebar-header d-flex align-items-center"><a href="{{route('home')}}" class="brand"><img src="https://www.kri8thm.in/html/listen/theme/assets/images/logos/logo.svg" alt="listen-app"> </a><button type="button" class="btn p-0 ml-auto" id="hideSidebar"><i class="ion-md-arrow-back h3"></i></button> <button type="button" class="btn toggle-menu" id="toggleSidebar"><span></span> <span></span> <span></span></button></div>
				<nav class="navbar">
					<ul class="navbar-nav" data-scrollable="true">
						<li class="nav-item nav-header">Browse Music</li>
						<li class="nav-item"><a href="{{route('home')}}" class="nav-link active"><span ><ion-icon class="h5" name="home-outline"></ion-icon> Home</span></a></li>
						<li class="nav-item"><a href="genres.html" class="nav-link"><span><ion-icon class="h5" name="diamond-outline"></ion-icon> Genres</span></a></li>
						<li class="nav-item"><a href="music.html" class="nav-link"><span><ion-icon class="h5" name="musical-notes-outline"></ion-icon> Albums</span></a></li>
						<li class="nav-item"><a href="artists.html" class="nav-link"><span><ion-icon class="h5" name="mic-outline"></ion-icon> Artists</span></a></li>
						<li class="nav-item nav-header">Your Music</li>
						<li class="nav-item"><a href="stations.html" class="nav-link"><span><ion-icon class="h5" name="list-circle-outline"></ion-icon> Playlists</span></a></li>
						<li class="nav-item"><a href="add-event.html" class="nav-link"><span><ion-icon name="add-circle-outline"></ion-icon> Add Playlist</span></a></li>
						<li class="nav-item"><a href="history.html" class="nav-link"><span><ion-icon class="h5" name="time-outline"></ion-icon> History</span></a></li>
					</ul>
				</nav>
				<div class="sidebar-footer"><a href="add-music.html" class="btn btn-block btn-danger btn-air btn-bold"><i class="ion-md-musical-note"></i> <span>Add Music</span></a></div>
			</aside>
			
			<main id="pageWrapper">
				<header id="header" class="bg-primary">
					<div class="d-flex align-items-center">
						<button type="button" class="btn toggle-menu mr-3" id="openSidebar"><span></span> <span></span> <span></span></button>
						<form action="#" id="searchForm">
							<button type="button" class="btn ion-search"><ion-icon class="mb-0" name="search-outline"></ion-icon></button> <input type="text" placeholder="Search..." id="searchInput" class="form-control">
							<div class="search-card" data-scrollable="true">
								<div class="mb-3">
									<div class="d-flex"><span class="text-uppercase mr-auto font-weight-bold text-dark">Artists</span> <a href="artists.html">View All</a></div>
									<hr>
									<div class="row">
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/1.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Arebica Luna</p>
												</a>
											</div>
										</div>
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/2.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Gerrina Linda</p>
												</a>
											</div>
										</div>
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/3.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Zunira Willy</p>
												</a>
											</div>
										</div>
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/4.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Johnny Marro</p>
												</a>
											</div>
										</div>
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/5.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Jina Moore</p>
												</a>
											</div>
										</div>
										<div class="col-xl-2 col-md-4 col-6">
											<div class="custom-card mb-3">
												<a href="artist-details.html" class="text-dark">
													<img src="../assets/images/cover/medium/6.jpg" alt="" class="card-img--radius-md">
													<p class="text-truncate mt-2">Rasomi Pelina</p>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="mb-3">
									<div class="d-flex"><span class="text-uppercase mr-auto font-weight-bold text-dark">Track</span> <a href="songs.html">View All</a></div>
									<hr>
									<div class="row">
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">I Love You Mummy</p>
														<p class="text-truncate text-muted font-sm">Arebica Luna</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">Shack your butty</p>
														<p class="text-truncate text-muted font-sm">Gerrina Linda</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">Do it your way(Female)</p>
														<p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div>
									<div class="d-flex"><span class="text-uppercase mr-auto font-weight-bold text-dark">Albums</span> <a href="songs.html">View All</a></div>
									<hr>
									<div class="row">
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">Say yes</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">Where is your letter</p>
													</div>
												</a>
											</div>
										</div>
										<div class="col-xl-4 col-md-6 col-12">
											<div class="custom-card mb-3">
												<a href="song-details.html" class="text-dark custom-card--inline">
													<div class="custom-card--inline-img"><img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm"></div>
													<div class="custom-card--inline-desc">
														<p class="text-truncate mb-0">Hey not me</p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>

						
<!-- ----------------------------------------      USER TOPBAR ZONE-----------------------------------------------------------------------------------------------------------------------------------------------------	-->


						<ul class="header-options d-flex align-items-center">
							<li class="dropdown fade-in">
								<a href="javascript:void(0);" class="d-flex align-items-center py-2" role="button" id="userMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<div class="avatar avatar-sm avatar-circle"><img src="../assets/images/users/thumb.jpg" alt="user"></div>
									<span class="pl-2">  
							            {{ Auth::user()->name }}
									</span>
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="userMenu">
									<a class="dropdown-item" href="profile.html"><i class="ion-md-contact"></i> <span>Profile</span></a> <a class="dropdown-item" href="plan.html"><i class="ion-md-radio-button-off"></i> <span>Your Plan</span></a> <a class="dropdown-item" href="settings.html"><ion-icon name="settings"></ion-icon> <span>Settings</span></a>
									<div class="dropdown-divider"></div>
									<div class="px-4 py-2"><a href="#" class="btn btn-sm btn-air btn-pill btn-danger" data-toggle="modal" data-target="#logoutModal">Logout</a></div>
								</div>
							</li>
						</ul>
					</div>
				</header>
				
				<div class="banner bg-home"></div>
				<div class="main-container" id="appRoute">
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>Top Charts</h4>
									<p>Listen top chart</p>
								</div>
								<a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-5 arrow-pos-3">
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'><img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>I Love You Mummy</h6>
									<p>Arebica Luna</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'><img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Shack your butty</h6>
									<p>Gerrina Linda</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'><img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Do it your way(Female)</h6>
									<p>Zunira Willy & Nutty Nina</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'><img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Say yes</h6>
									<p>Johnny Marro</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'><img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Where is your letter</h6>
									<p>Jina Moore & Lenisa Gory</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'><img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Hey not me</h6>
									<p>Rasomi Pelina</p>
								</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="section col-xl-7 col-lg-6">
							<div class="row h-100">
								<div class="col-sm-5 pb-4">
									<div class="h-100 event event-v bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/vertical/1.jpg')">
										<div class="event-content p-4">
											<a href="event-details.html">
												<h6>New Year Party</h6>
											</a>
											<span class="countdown mb-3"></span> <a href="#" class="btn btn-bold btn-pill btn-air btn-warning btn-sm">Buy Ticket</a>
										</div>
									</div>
								</div>
								<div class="col-sm-7">
									<div class="h-50 pb-4">
										<div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/1.jpg')">
											<div class="event-content p-4">
												<a href="event-details.html">
													<h6>Dance with DJ Nowan</h6>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
											</div>
										</div>
									</div>
									<div class="h-50 pb-4">
										<div class="h-100 event event-h bg-img bg-img-radius-lg" style="background-image: url('../assets/images/background/horizontal/2.jpg')">
											<div class="event-content p-4">
												<a href="event-details.html">
													<h6>Move You's Legs</h6>
												</a>
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae consectetur, ex explicabo.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="section col-xl-5 col-lg-6">
							<ul class="nav nav-tabs line-tabs line-tabs-primary text-uppercase mb-4" id="songsList" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent</a></li>
								<li class="nav-item"><a class="nav-link" id="trending-tab" data-toggle="tab" href="#trending" role="tab" aria-controls="trending" aria-selected="false">Trending</a></li>
								<li class="nav-item"><a class="nav-link" id="international-tab" data-toggle="tab" href="#international" role="tab" aria-controls="international" aria-selected="false">International</a></li>
							</ul>
							<div class="tab-content" id="songsListContent">
								<div class="tab-pane fade show active" id="recent" role="tabpanel" aria-labelledby="recent-tab">
									<div class="custom-list">
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">I Love You Mummy</p>
													<p class="text-truncate text-muted font-sm">Arebica Luna</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Shack your butty</p>
													<p class="text-truncate text-muted font-sm">Gerrina Linda</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Do it your way(Female)</p>
													<p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Say yes</p>
													<p class="text-truncate text-muted font-sm">Johnny Marro</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Where is your letter</p>
													<p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Hey not me</p>
													<p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Deep inside</p>
													<p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="trending" role="tabpanel" aria-labelledby="trending-tab">
									<div class="custom-list">
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">I Love You Mummy</p>
													<p class="text-truncate text-muted font-sm">Arebica Luna</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Shack your butty</p>
													<p class="text-truncate text-muted font-sm">Gerrina Linda</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Do it your way(Female)</p>
													<p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Say yes</p>
													<p class="text-truncate text-muted font-sm">Johnny Marro</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Where is your letter</p>
													<p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Hey not me</p>
													<p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Deep inside</p>
													<p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="international" role="tabpanel" aria-labelledby="international-tab">
									<div class="custom-list">
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">I Love You Mummy</p>
													<p class="text-truncate text-muted font-sm">Arebica Luna</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Shack your butty</p>
													<p class="text-truncate text-muted font-sm">Gerrina Linda</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Do it your way(Female)</p>
													<p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Say yes</p>
													<p class="text-truncate text-muted font-sm">Johnny Marro</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Where is your letter</p>
													<p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Hey not me</p>
													<p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
										<div class="custom-list--item">
											<div class="text-dark custom-card--inline">
												<div class="custom-card--inline-img"><img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm"></div>
												<div class="custom-card--inline-desc">
													<p class="text-truncate mb-0">Deep inside</p>
													<p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
												</div>
											</div>
											<ul class="custom-card--labels d-flex ml-auto">
												<li class="dropleft">
													<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
													<ul class="dropdown-menu">
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
														<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
														<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>New Releases</h4>
									<p>Listen recently release music</p>
								</div>
								<a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-5 arrow-pos-3">
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'><img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>I Love You Mummy</h6>
									<p>Arebica Luna</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'><img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Shack your butty</h6>
									<p>Gerrina Linda</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'><img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Do it your way(Female)</h6>
									<p>Zunira Willy & Nutty Nina</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'><img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Say yes</h6>
									<p>Johnny Marro</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'><img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Where is your letter</h6>
									<p>Jina Moore & Lenisa Gory</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'><img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Hey not me</h6>
									<p>Rasomi Pelina</p>
								</a>
							</div>
						</div>
					</div>
					
					
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>Featured Artists</h4>
									<p>Select you best to listen</p>
								</div>
								<a href="artists.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-6 arrow-pos-2">
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/1.jpg" alt="Arebica Luna" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Arebica Luna</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/2.jpg" alt="Gerrina Linda" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Gerrina Linda</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/3.jpg" alt="Zunira Willy" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Zunira Willy</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/4.jpg" alt="Johnny Marro" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Johnny Marro</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/5.jpg" alt="Jina Moore" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Jina Moore</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/6.jpg" alt="Rasomi Pelina" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Rasomi Pelina</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/9.jpg" alt="Lenisa Gory" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Lenisa Gory</h6>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="artist-details.html"><img src="../assets/images/cover/large/10.jpg" alt="Nutty Nina" class="card-img--radius-lg"></a></div>
								<a href="artist-details.html" class="custom-card--link mt-2">
									<h6 class="mb-0">Nutty Nina</h6>
								</a>
							</div>
						</div>
					</div>
					
					
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>Your Playlist</h4>
									<p>You best to listen</p>
								</div>
								<a href="playlist.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-4 arrow-pos-1">
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/1.jpg" alt="DJ Remix" class="card-img--radius-lg"> <span class="bg-blur">DJ Remix</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/2.jpg" alt="Rock Band" class="card-img--radius-lg"> <span class="bg-blur">Rock Band</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/3.jpg" alt="Solo Special" class="card-img--radius-lg"> <span class="bg-blur">Solo Special</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/4.jpg" alt="Romantic" class="card-img--radius-lg"> <span class="bg-blur">Romantic</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/5.jpg" alt="GYM" class="card-img--radius-lg"> <span class="bg-blur">GYM</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/6.jpg" alt="Retro Special" class="card-img--radius-lg"> <span class="bg-blur">Retro Special</span></a></div>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>New Albums</h4>
									<p>Listen the last Albums</p>
								</div>
								<a href="songs.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-6 arrow-pos-3">
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "I Love You Mummy", "artist": "Arebica Luna", "album": "Mummy", "url": "../assets/audio/ringtone-1.mp3", "cover_art_url": "../assets/images/cover/small/1.jpg"}'><img src="../assets/images/cover/large/1.jpg" alt="I Love You Mummy" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>I Love You Mummy</h6>
									<p>Arebica Luna</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Shack your butty", "artist": "Gerrina Linda", "album": "Hot Shot", "url": "../assets/audio/ringtone-2.mp3", "cover_art_url": "../assets/images/cover/small/2.jpg"}'><img src="../assets/images/cover/large/2.jpg" alt="Shack your butty" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Shack your butty</h6>
									<p>Gerrina Linda</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Do it your way(Female)", "artist": "Zunira Willy & Nutty Nina", "album": "Own Way", "url": "../assets/audio/ringtone-3.mp3", "cover_art_url": "../assets/images/cover/small/3.jpg"}'><img src="../assets/images/cover/large/3.jpg" alt="Do it your way(Female)" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Do it your way(Female)</h6>
									<p>Zunira Willy & Nutty Nina</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Say yes", "artist": "Johnny Marro", "album": "Say yes", "url": "../assets/audio/ringtone-4.mp3", "cover_art_url": "../assets/images/cover/small/4.jpg"}'><img src="../assets/images/cover/large/4.jpg" alt="Say yes" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Say yes</h6>
									<p>Johnny Marro</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
											<li><span class="badge badge-pill badge-danger"><ion-icon name="heart"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Where is your letter", "artist": "Jina Moore & Lenisa Gory", "album": "Letter", "url": "../assets/audio/ringtone-5.mp3", "cover_art_url": "../assets/images/cover/small/5.jpg"}'><img src="../assets/images/cover/large/5.jpg" alt="Where is your letter" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Where is your letter</h6>
									<p>Jina Moore & Lenisa Gory</p>
								</a>
							</div>
							<div class="custom-card">
								<div class="custom-card--img">
									<div class="custom-card--info">
										<ul class="custom-card--labels d-flex">
											<li><span class="badge badge-pill badge-warning"><ion-icon name="star"></ion-icon></span></li>
										</ul>
										<div class="dropdown dropdown-icon">
											<a href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><ion-icon name="ellipsis-vertical"></ion-icon></a>
											<ul class="dropdown-menu dropdown-menu-right">
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon></a></li>
												<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon></a></li>
												
												
											</ul>
										</div>
									</div>
									<a href="javascript:void(0);" class="external" data-audio='{"name": "Hey not me", "artist": "Rasomi Pelina", "album": "Find Soul", "url": "../assets/audio/ringtone-6.mp3", "cover_art_url": "../assets/images/cover/small/6.jpg"}'><img src="../assets/images/cover/large/6.jpg" alt="Hey not me" class="card-img--radius-lg"></a>
								</div>
								<a href="song-details.html" class="custom-card--link mt-2">
									<h6>Hey not me</h6>
									<p>Rasomi Pelina</p>
								</a>
							</div>
						</div>
					</div>
					
					<div class="section">
						<div class="heading">
							<div class="d-flex flex-wrap align-items-end">
								<div class="flex-grow-1">
									<h4>Genres</h4>
									<p>Select you genre</p>
								</div>
								<a href="genres.html" class="btn btn-sm btn-pill btn-air btn-primary">View All</a>
							</div>
							<hr>
						</div>
						<div class="carousel-item-6 arrow-pos-1">
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/1.jpg" alt="Remix Songs" class="card-img--radius-md"> <span class="bg-blur">Remix Songs</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/2.jpg" alt="Rock Songs" class="card-img--radius-md"> <span class="bg-blur">Rock Songs</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/3.jpg" alt="Sufi Songs" class="card-img--radius-md"> <span class="bg-blur">Sufi Songs</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/4.jpg" alt="Romantic Songs" class="card-img--radius-md"> <span class="bg-blur">Romantic Songs</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/5.jpg" alt="Sports Songs" class="card-img--radius-md"> <span class="bg-blur">Sports Songs</span></a></div>
							</div>
							<div class="custom-card">
								<div class="custom-card--img"><a href="javascript:void(0);"><img src="../assets/images/background/horizontal/6.jpg" alt="Old Songs" class="card-img--radius-lg"> <span class="bg-blur">Old Songs</span></a></div>
							</div>
						</div>
					</div>
					
				</div>
				
				<footer id="footer" class="bg-img">
					<div class="footer-content">
						<a href="#" class="email">info@listenapp.com</a>
						<div class="platform-btn-inline">
							<a href="#" class="btn btn-dark btn-air platform-btn">
								<i class="ion-logo-android"></i>
								<div class="platform-btn-info"><span class="platform-desc">Available on</span> <span class="platform-name">Android</span></div>
							</a>
							<a href="#" class="btn btn-danger btn-air platform-btn">
								<i class="ion-logo-apple"></i>
								<div class="platform-btn-info"><span class="platform-desc">Available on</span> <span class="platform-name">App Store</span></div>
							</a>
						</div>
					</div>
				</footer>
			
			</main>
			
			
			<!--------------------------------------------------------------------------------------------------------------------------------------------------------->
			<aside id="rightSidebar">
				<div class="right-sidebar-header">Listen Special</div>
				<div class="right-sidebar-body" data-scrollable="true">
					<ul class="list-group list-group-flush">
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="0" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/1.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">I Love You Mummy</p>
									<p class="text-truncate text-muted font-sm">Arebica Luna</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="1" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/2.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Shack your butty</p>
									<p class="text-truncate text-muted font-sm">Gerrina Linda</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="2" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/3.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Do it your way(Female)</p>
									<p class="text-truncate text-muted font-sm">Zunira Willy & Nutty Nina</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="3" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/4.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Say yes</p>
									<p class="text-truncate text-muted font-sm">Johnny Marro</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="4" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/5.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Where is your letter</p>
									<p class="text-truncate text-muted font-sm">Jina Moore & Lenisa Gory</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="5" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/6.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Hey not me</p>
									<p class="text-truncate text-muted font-sm">Rasomi Pelina</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="custom-list--item list-group-item">
							<div class="text-dark custom-card--inline amplitude-song-container amplitude-play-pause" data-amplitude-song-index="6" data-amplitude-playlist="special">
								<div class="custom-card--inline-img"><img src="../assets/images/cover/small/7.jpg" alt="" class="card-img--radius-sm"></div>
								<div class="custom-card--inline-desc">
									<p class="text-truncate mb-0">Deep inside</p>
									<p class="text-truncate text-muted font-sm">Pimila Holliwy</p>
								</div>
							</div>
							<ul class="custom-card--labels d-flex ml-auto">
								<li class="dropleft">
									<a href="javascript:void(0);" class="btn btn-icon-only p-0 w-auto h-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="la la-ellipsis-h"></i></a>
									<ul class="dropdown-menu">
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link favorite"><ion-icon name="heart-outline"></ion-icon> <span>Favorite</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><ion-icon name="add"></ion-icon> <span>Add to Playlist</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-download"></i> <span>Download</span></a></li>
										<li class="dropdown-item"><a href="javascript:void(0);" class="dropdown-link"><i class="la la-share-alt"></i> <span>Share</span></a></li>
										<li class="dropdown-item"><a href="song-details.html" class="dropdown-link"><i class="la la-info-circle"></i> <span>Song Info</span></a></li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			
            @include('layouts.user.logout')
			
		</div>
		<div class="backdrop header-backdrop"></div>
		<div class="backdrop sidebar-backdrop"></div>
		<script src="../assets/js/vendors.bundle.js"></script><script src="../assets/js/scripts.bundle.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	</body>
</html>