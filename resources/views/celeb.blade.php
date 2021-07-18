<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>RAPEDIA - Celeb</title>
	<meta charset="UTF-8">
	<meta name="description" content="EndGam Gaming Magazine Template">
	<meta name="keywords" content="endGam,gGaming, magazine, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ asset('./public/img/rapedia.ico')}}">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('./public/css/bootstrap.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('./public/css/font-awesome.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('./public/css/slicknav.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('./public/css/owl.carousel.min.css')}}"/>
	<link rel="stylesheet" href="{{ asset('./public/css/magnific-popup.css')}}"/>
	<link rel="stylesheet" href="{{ asset('./public/css/animate.css')}}"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="{{ asset('./public/css/style.css')}}"/>



	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="header-social d-flex justify-content-end">
				<p>Follow us:</p>
				<a href="#"><i class="fa fa-pinterest"></i></a>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>
			</div>
			<div class="header-bar-warp d-flex">
				<!-- site logo -->
				<a href="{{URL::to('home')}}" class="site-logo">
					<img src="{{ asset('./public/img/logo4.png')}}" alt="">
				</a>
				<nav class="top-nav-area w-100">
					<?php 
					$name = Session::get('username');
					if (!$name) {
						# code...
					

					?>
					<div class="user-panel">
						<a href="{{URL::to('login')}}">Login</a> / <a href="./register">Register</a>
					</div>

					<?php
					}else{
					echo	"<div class='user-panel'>";
						echo "Hello, $name / <a href='logout'>Log out</a>";
						echo"</div>";
					}
					?>
					
					<!-- Menu -->
					<ul class="main-menu primary-menu">
						<li><a href="{{URL::to('home')}}">Home</a>
							<ul class="sub-menu">
								<li><a href="{{URL::to('home')}}">Home</a></li>
								<li><a href="{{URL::to('toptrend')}}">Top Trend</a></li>
							</ul>

						</li>
						<li><a href="{{URL::to('celeb/1')}}">Celeb</a>
							<ul class="sub-menu">
								<li><a href="{{URL::to('trending')}}">Trending</a></li>
								<li><a href="{{URL::to('toplike')}}">Top like</a></li>
								<li><a href="{{URL::to('topview')}}">Top view</a></li>
							</ul>
						</li>
						<li><a href="{{URL::to('gang/1')}}">Group</a>
							<ul class="sub-menu">
								<li><a href="{{URL::to('domesticgroup')}}">Domestic</a></li>
								<li><a href="{{URL::to('internationalgroup')}}">International</a></li>
								<li><a href="{{URL::to('topsearch')}}">Top search</a></li>
							</ul>
						</li>
						<li><a href="{{URL::to('news/1')}}">News</a></li>
						<li><a href="{{URL::to('contact')}}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{asset('./public/img/spacespeaker.jpg')}}">
		<div class="page-info">
			<h2>Celeb</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a>  /
				<span>Celeb</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Review section -->
	<section class="review-section">
		<div class="container">
			<ul class="game-filter">
				@for($i = 65; $i<91; $i++) 
					<li><a onclick="addParam('search','{{chr($i)}}')" href="#">{{chr($i)}}</a></li>
				@endfor
			</ul>
			@foreach($celeb as $value)
			<div class="review-item">
				<div class="row">
					<div class="col-lg-4">
						<div class="review-pic">
							@php($a = $value->image);
							<img style="width: 300px; height: 250px;" src="{{asset($a)}}" alt="">
						</div>
					</div>
					<div class="col-lg-8">
						<div class="review-content text-box text-white">
							<div class="rating">
								<h5><i>Rating</i><span>4.5</span> / 5</h5>
							</div>
							<div class="top-meta">{{ $value->created_at->format('d.m.Y') }}  /  in <a href="">Celeb</a></div>
							<h3>{{$value->name}}</h3>
							<p>{{$value->presentation}}</p>
							<a href="story/{{$value->slug}}" class="read-more">Read More  <img src="{{asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
				</div>
			</div>
			@endforeach
			<div class="site-pagination">
			@if ($currentPage > 1 && $countPage > 1)
			<a href="{{URL::to('celeb/'.($currentPage-1))}}">Previous</a>
				@else
				<a href="">Previous</a>
				@endif

				@if ($currentPage > 4)
				<a href="2">...</a>
				@endif

				@for ($i = $currentPage-2; $i <= $currentPage+2; $i ++)

				@if ($i < 1 || $i > $countPage )
				@else
				@if($i == $currentPage)
				<a href="{{URL::to('celeb/'.$i)}}" class="active">{{$i}}</a>
				@else
				<a href="{{URL::to('celeb/'.$i)}}">{{$i}}</a>
				@endif
				@endif

				@endfor

				@if ($currentPage < $countPage - 2)
				<a href="3">...</a>
				@endif


				@if ($currentPage < $countPage && $countPage > 1)
				<a href="{{URL::to('celeb/'.($currentPage+1))}}">Next</a>
				@else
				<a href="">Next</a>
				@endif

				</div>
				
					
					
					
				
			</div>
		</section>
		<!-- Review section end-->


		<!-- Newsletter section -->
		<section class="newsletter-section">
			<div class="container">
				<h2>Subscribe to our newsletter</h2>
				<form class="newsletter-form">
					<input type="text" placeholder="ENTER YOUR E-MAIL">
					<button class="site-btn">subscribe  <img src="{{ asset('./public/img/icons/double-arrow.png')}}" alt="#"/></button>
				</form>
			</div>
		</section>
		<!-- Newsletter section end -->


		<!-- Footer section -->
		<footer class="footer-section">
			<div class="container">
				<div class="footer-left-pic">
					<img src="{{ asset('./public/img/wowy&rhym.jpg')}}" alt="">
				</div>
				<div class="footer-right-pic">
					<img src="{{ asset('./public/img/dechoat&typh.jpg')}}" alt="">
				</div>
				<a href="#" class="footer-logo">
					<img src="{{ asset('./public/img/logo4.png')}}" alt="">
				</a>
				<ul class="main-menu footer-menu">
					<li><a href="{{URL::to('home')}}">Home</a></li>
				<li><a href="{{URL::to('celeb/1')}}">Celeb</a></li>
				<li><a href="{{URL::to('gang/1')}}">Group</a></li>
				<li><a href="{{URL::to('news/1')}}">News</a></li>
				<li><a href="{{URL::to('contact')}}">Contact</a></li>
				</ul>
				<div class="footer-social d-flex justify-content-center">
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
				<div class="copyright"><a href="">RAPEDIA</a> 2019 @ All rights reserved by <a href="">A.T Comp</a></div>
			</div>
		</footer>
		<!-- Footer section end -->


		<!--====== Javascripts & Jquery ======-->
		<script src="{{ asset('./public/js/jquery-3.2.1.min.js')}}"></script>
		<script src="{{ asset('./public/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('./public/js/jquery.slicknav.min.js')}}"></script>
		<script src="{{ asset('./public/js/owl.carousel.min.js')}}"></script>
		<script src="{{ asset('./public/js/jquery.sticky-sidebar.min.js')}}"></script>
		<script src="{{ asset('./public/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{ asset('./public/js/main.js')}}"></script>
		<script src="{{ asset('./public/js/snow.js')}}"></script>
		<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="105786201491647"
  theme_color="#f9d342"
  logged_in_greeting="Chào mừng bạn đến với Rapedia. Chúng tôi có thể giúp gì được cho bạn."
  logged_out_greeting="Chào mừng bạn đến với Rapedia. Chúng tôi có thể giúp gì được cho bạn.">
      </div>
	</body>
	</html>
<script type="text/javascript">
	function addParam(key, value) {

		const urlParams = new URLSearchParams(window.location.search);

		urlParams.set(key, value);

		window.location.search = urlParams;
	}
</script>