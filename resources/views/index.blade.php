<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>RAPEDIA</title>
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


	<!-- Hero section -->
	<section class="hero-section overflow-hidden">
		<div class="hero-slider owl-carousel">
			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{ asset('./public/img/spacespeaker.jpg')}}">
				<div class="container">
					<h2>Suit on!</h2>
					<p>T??? ?????i "Spacespeaker" ch???p ???nh k??? ni???m 9 n??m ho???t ?????ng.</p>
					<a href="./info" class="site-btn">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
				</div>
			</div>

			<div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="{{ asset('./public/img/beef.jpg')}}">
				<div class="container">
					<h2>Burn it!</h2>
					<p>Tr???n beef ????ng mong ch??? gi???a YC (Rhymastic) v?? Torai9.</p>
					<a href="#" class="site-btn">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end-->


	<!-- Intro section -->
	<section class="intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">16.11.20  /  in <a href="">Groups</a></div>
						<h3>SpaceSpeaker l??? di???n th??nh vi??n th??? 12!</h3>
						<p>T??? ?????i "Spacespeaker" ch???p ???nh k??? ni???m 9 n??m ho???t ?????ng. Qua ???? l??? di???n th??nh vi??n th??? 12 s??? g??p m???t trong MV "Black Jack" c???a Soobin Ho??ng S??n.</p>
						<a href="#" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">17.11.20  /  in <a href="">Celeb</a></div>
						<h3>YC (Rhymastic a.k.a V?? ?????c Thi???n) vs Torai9</h3>
						<p>Tr???n beef th?? h??ng ???????c nhi???u fan mong ng??ng ???? ??i ?????n h???i k???t cho d?? c??? 2 b??n ch??a d???n dame ???? ph???i end game.</p>
						<a href="#" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="intro-text-box text-box text-white">
						<div class="top-meta">12.12.20  /  in <a href="">Celeb</a></div>
						<h3>Happy birhtday H??nh Or</h3>
						<p>C??ng ch??c m???ng sinh nh???t H??nh Or - th??nh vi??n team Binz trong Rap Vi???t. B???n c?? ???n t?????ng g?? v???i ch??ng th?? sinh mang khu??n m???t bad boy qua ????i tay r??n d??a c???a ng?????i th???y BigCityBoy.</p>
						<a href="#" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Latest News</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="{{URL::to('celeb/1')}}">Celeb</a></li>
						<li><a href="{{URL::to('gang/1')}}">Groups</a></li>
						<li><a href="{{URL::to('toptrend')}}">Top Trend</a></li>
						<li><a href="#">Most view</a></li>
					</ul>
					<!-- Blog item -->
					@foreach($news as $value)
					<div class="blog-item">
						<div class="blog-thumb">
							<img  src="{{ asset($value->image)}}" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">{{ $value->created_at->format('d.m.Y') }}  /  in <a href="">Celeb</a></div>
							<h3>{{$value->title}}</h3>
							<p>{{$value->presentation}}</p>
							<a href="news/story/{{$value->slug}}" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
						</div>
					</div>
					
					@endforeach
					<!-- Blog item -->
					
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/gducky.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">14.11.20  /  in <a href="">Celeb</a></div>
										<h5>GDucky - Ch??ng gia s?? m?? nh???c Rap</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/mck.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">20.11.20  /  in <a href="">Celeb</a></div>
										<h5>MCK - truy???n nh??n c???a Justatee?</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dsk.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">08.04.20  /  in <a href="">Celeb</a></div>
										<h5>DSK - th???n t?????ng Rap Vi???t</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="{{ asset('./public/img/blog-widget/dcod.jpg')}}" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">29.08.19  /  in <a href="">Groups</a></div>
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
									<li><a href="{{URL::to('celeb/1')}}">Celeb</a></li>
									<li><a href="{{URL::to('gang/1')}}">Groups</a></li>
									<li><a href="{{URL::to('toptrend')}}">Top trend</a></li>
									<li><a href="">Top search</a></li>
									<li><a href="">Trending</a></li>
									<li><a href="">Community</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
							<a href="https://www.youtube.com/watch?v=psZ1g9fMfeo" class="add">
								<img src="{{ asset('./public/img/mtp.jpg')}}" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->


	<!-- Intro section -->
	<section class="intro-video-section set-bg d-flex align-items-end " data-setbg="{{ asset('./public/img/poster.jpg')}}">
		<a href="" class="video-play-btn video-popup"><img src="{{ asset('./public/img/icons/play.png')}}" alt="#"></a>
		<div class="container">
			<div class="video-text">
				<h2>??i v??? nh?? c??ng Just v?? ??en n??o!!!</h2>
				<p>Kh??ng kh?? T???t ??ang ?????n g???n v???i nh???ng ng?????i ??ang xa x???.</p>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<section class="featured-section">
		<div class="featured-bg set-bg" data-setbg="{{ asset('./public/img/top-trend/mck.jpg')}}"></div>
		<div class="featured-box">
			<div class="text-box">
				<div class="top-meta">11.11.20  /  in <a href="">Celeb</a></div>
				<h3>MCK: Hi???n t?????ng m???ng m???i n???i</h3>
				<p>
Nghi??m V?? Ho??ng Long (sinh ng??y 2 th??ng 3 n??m 1999 t???i H?? N???i, Vi???t Nam) ???????c bi???t ?????n v???i t??n MCK c??n c?? th??? l?? Ng?? hay Nger l?? m???t rapper ng?????i vi???t l???i nh???c theo phong c??ch "rap melody", tr?????c khi thi ch????ng tr??nh Rap Vi???t anh ???????c bi???t v???i nh???ng ca kh??c nh??: Rap Ch???m Th??i, t??nh ?????ng nh?? ly c?? ph?? (h???p t??c c??ng v???i N??n.), Th??? ???? Cypher, v.v ... trong ch????ng tr??nh Rap Vi???t anh l?? ng?????i ???????c b???n hu???n luy???n vi??n ????nh gi?? cao. Gi??m kh???o JustaTee g???i anh l?? "ng?????i th???a k??? l???i rap melody" t???i Vi???t Nam, Wowy khen ng???i RPT MCK l?? "thi??n t??i" khi s??? d???ng auto live. B??n c???nh kh??? n??ng rap, RPT MCK c??n g??y ch?? ?? b???i chuy???n t??nh ng???t ng??o v???i n??? rapper Tlinh.</p>
				<a href="#" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
			</div>
		</div>
	</section>
	<!-- Featured section end-->



	<!-- Newsletter section -->
	<section class="newsletter-section">
		<div class="container">
			<h2>Subscribe to our newsletter</h2>
			<form class="newsletter-form">
				<input type="text" placeholder="ENTER YOUR E-MAIL">
				<button class="site-btn">subscribe  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></button>
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
	
</script>
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
  logged_in_greeting="Ch??o m???ng b???n ?????n v???i Rapedia. Ch??ng t??i c?? th??? gi??p g?? ???????c cho b???n."
  logged_out_greeting="Ch??o m???ng b???n ?????n v???i Rapedia. Ch??ng t??i c?? th??? gi??p g?? ???????c cho b???n.">
      </div>
</body>
</html>
