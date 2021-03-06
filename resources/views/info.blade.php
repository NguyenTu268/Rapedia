<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>RAPEDIA - Info</title>
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
		<!-- <div class="page-info">
			<h2>Games</h2>
			<div class="site-breadcrumb">
				<a href="">Home</a>  /
				<span>Games</span>
			</div>
		</div> -->
	</section>
	<!-- Page top end-->


	<!-- Games section -->
	<section class="games-single-page">
		<div class="container">
			<div class="game-single-preview">
				<img src="{{('./public/img/spacespeaker.jpg')}}" alt="" >
			</div>
			<div class="row">
				<div class="col-xl-7 col-lg-6 col-md-7 game-single-content">
					<div class="gs-meta">11.11.18  /  in <a href="">Celeb</a></div>
					<?php 
					echo "<h2 class='gs-title'>".$inf->name."</h2>";
					echo $inf->content1;
					?>
					
					<div class="geme-social-share pt-5 d-flex">
						<p>Share:</p>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-dribbble"></i></a>
						<a href="#"><i class="fa fa-behance"></i></a>
					</div>
				</div>
				<div class="col-xl-5 col-lg-5 col-md-5 sidebar game-page-sideber">
					<div id="stickySidebar">
						<div class="widget-item">
							<div class="rating-widget">
								<h4 class="widget-title">
									<span style="color: white">i</span>
									<span style="color: #F9D342">n</span>
									<span style="color: white">f</span>
									<span style="color: #F9D342">o</span>
								</h4>
								<ul>
									<li>T??n th???t<span>Nghi??m V?? Ho??ng Long</span></li>
									<li>Nickname<span>MCK, RPT MCK, McKey, Ng??, Nger</span></li> 
									<li>Nh??m<span>Rapital, CDSL</span></li>
									<li>B???n b??/?????ng minh/H???p t??c<span>Karik, Justatee, Wowy</span></li>
									<li>?????i th???/K??? th??/Beef v???i<span>Osad, B2C
									</span></li>
									<li>D.O.B<span>
									2.3.1999</span></li>
								</ul>
								<!-- <div class="rating">
									<h5><i>Rating</i><span>4.5</span> / 5</h5>
								</div> -->
							</div>
						</div>
						<!-- <div class="widget-item">
							<div class="testimonials-widget">
								<h4 class="widget-title">Testimonials</h4>
								<div class="testim-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolo re magna aliqua. Quis ipsum suspend isse ultrices.</p>
									<h6><span>James Smith,</span>Gamer</h6>
								</div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Games end-->

	<section class="game-author-section">
		<div class="container">
			<div class="game-author-pic set-bg" data-setbg="{{ asset('./public/img/blog-widget/gducky.jpg')}}"></div>
			<div class="game-author-info">
				<h4>Written by: GDucky</h4>
				<p>?????ng Mai Vi???t Ho??ng (sinh ng??y 12 th??ng 12 n??m 1998) hay c??n ???????c bi???t ?????n v???i t??n g???i G Ducky l?? m???t rapper ng?????i Vi???t Nam. B???t ?????u ch??i rap v??o n??m 2018, G.Ducky ???? c?? nh???ng l??c g???p kh?? kh??n th???t b???i nh??ng anh ch??a t???ng c?? ?? ?????nh t??? b??? b??? m??n n??y.</p>
			</div>
		</div>
	</section>
	<section class="games-single-page">
		<div class="container">
			<section>
				<div class="hint">
					<h2 style="border-bottom: 2px solid #f9d342;color: #fff;text-align: center;">You may also like
					</h2>
				</div>
			</section>
			<section class="intro-section" style="border-bottom: 30px;">
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
								<p>C??ng ch??c m???ng sinh nh???t H??nh Or - th??nh vi??n team Binz trong Rap Vi???t. B???n c?? ???n t?????ng g?? v???i ch??ng th?? sinh mang khu??n m???t bad boy qua ????i tay r??n d??a c???a BigCityBoy.</p>
								<a href="#" class="read-more">Read More  <img src="{{ asset('./public/img/icons/double-right-arrow.png')}}" alt="#"/></a>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<div class="hint">
					<h2 style="border-top: 30px;text-align: center; margin-bottom: 100px; border-bottom: 2px solid #f9d342;color: #fff">
						Comments
					</h2>
				</div>
			</section>
			
		</div>
	</section>


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
