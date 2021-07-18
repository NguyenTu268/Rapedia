<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>RAPEDIA - News</title>
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
						<li><a href="{{URL::to('news')}}">News</a></li>
						<li><a href="{{URL::to('contact')}}">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page top section -->
	<section class="page-top-section set-bg" data-setbg="{{ asset('./public/img/spacespeaker.jpg')}}">
		<div class="page-info">
			<h2>News</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a>  /
				<span>News</span>
			</div>
		</div>
	</section>
	<!-- Page top end-->


	<!-- Blog page -->
	<section class="blog-page">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<ul class="blog-filter">
						<li><a href="#">Celeb</a></li>
						<li><a href="#">Group</a></li>
						<li><a href="#">Top trend</a></li>
						<li><a href="#">Most view</a></li>
					</ul>
					@foreach($data as $value)
					<div class="big-blog-item">
						<img style="width: 70%; height: 70%" src="{{ asset($value->image)}}" alt="#" class="blog-thumbnail">
						<div class="blog-content text-box text-white">
							<div class="top-meta">{{$value->created_at->format('d.m.Y - h:m:s') }}  /  in <a href="">News</a></div>
							<h3>{{$value->title}}</h3>
							<p>>{{$value->presentation}}</p>
							<a href="story/{{$value->slug}}" class="read-more">Read More  <img src="{{asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					@endforeach
					
					<div class="site-pagination">
						@if ($currentPage > 1 && $countPage > 1)
						<a href="{{URL::to('news/'.($currentPage-1))}}">Previous</a>
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
						<a href="{{URL::to('news/'.$i)}}" class="active">{{$i}}</a>
						@else
						<a href="{{URL::to('news/'.$i)}}">{{$i}}</a>
						@endif
						@endif

						@endfor

						@if ($currentPage < $countPage - 2)
						<a href="3">...</a>
						@endif


						@if ($currentPage < $countPage && $countPage > 1)
						<a href="{{URL::to('news/'.($currentPage+1))}}">Next</a>
						@else
						<a href="">Next</a>
						@endif

					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<form class="search-widget">
								<input type="text">
								<button>search</button>
							</form>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">
								<span style="color: white">t</span>
								<span style="color: #F9D342">r</span>
								<span style="color: white">e</span>
								<span style="color: #F9D342">n</span>
								<span style="color: white">d</span>
								<span style="color: #F9D342">i</span>
								<span style="color: white">n</span>
								<span style="color: #F9D342">g</span>
							</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dcod.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Group</a></div>
										<h5>DC GanG</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dcod.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Group</a></div>
										<h5>DC GanG</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dcod.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Group</a></div>
										<h5>DC GanG</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dcod.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Group</a></div>
										<h5>DC GanG</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">
									<span style="color: white">c</span>
									<span style="color: #F9D342">a</span>
									<span style="color: white">t</span>
									<span style="color: #F9D342">e</span>
									<span style="color: white">g</span>
									<span style="color: #F9D342">o</span>
									<span style="color: white">r</span>
									<span style="color: #F9D342">i</span>
									<span style="color: white">e</span>
									<span style="color: #F9D342">s</span>
								</h4>
								<ul>
									<li><a href="">Celeb</a></li>
									<li><a href="">Groups</a></li>
									<li><a href="">Top trend</a></li>
									<li><a href="">Top search</a></li>
									<li><a href="">Trending</a></li>
									<li><a href="">Community</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<h4 class="widget-title">
								<span style="color: #F9D342">latest-comments</span>
							</h4>
							<div class="latest-comments">
								<div class="lc-item">
									<img src="{{ asset('./public/img/blog-widget/gducky.jpg')}}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">GDucky</a> <span>On</span> MCK: Hiện tượng mạng mới nổi</div>
								</div>
								<div class="lc-item">
									<img src="{{asset('./public/img/blog-widget/gducky.jpg')}}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">GDucky</a> <span>On</span> MCK: Hiện tượng mạng mới nổi</div>
								</div>
								<div class="lc-item">
									<img src="{{asset('./public/img/blog-widget/gducky.jpg')}}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">GDucky</a> <span>On</span> MCK: Hiện tượng mạng mới nổi</div>
								</div>
								<div class="lc-item">
									<img src="{{asset('./public/img/blog-widget/gducky.jpg')}}" class="lc-avatar" alt="#">
									<div class="tw-text"><a href="">GDucky</a> <span>On</span> MCK: Hiện tượng mạng mới nổi</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<a href="#" class="add">
								<img src="{{asset('./public/img/mtp.jpg')}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog page end-->


	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></button>
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
