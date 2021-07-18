<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>RAPEDIA - Top trend</title>
		<meta name="description" content="An experimental slideshow with an inclined look with three slide previews and a content view on click." />
		<meta name="keywords" content="slideshow, javascript, tweenmax, rotation, animation, css" />
		<meta name="author" content="Codrops"/>
		<link rel="shortcut icon" href="{{ asset('./public/img/rapedia.ico')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('./public/css/base.css')}}"/>
		<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>
	</head>
	<body class="loading">
		<main>
			<div class="content">
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url('{{ asset('./public/img/top-trend/dechoat.jpg')}}');"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">Sai Gon, November 11</span>
						<h2 class="content__item-header-title">Dế Choắt</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						<b>Dế Choắt</b> tên thật là <b>Châu Hải Minh</b> (sinh năm 1996), là một rapper đồng thời cũng là một thợ tatoo. Anh nổi tiếng với lần "dizz" Hot Boy Xăm Trổ và trận "Beef" với Phúc Rey. Năm 2020, anh tham gia chương trình Rap Việt về đội Wowy và gây tiếng vang tại show truyền hình này, trở thành quán quân mùa 1 của chương trình Rap Việt.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url('{{ asset('./public/img/top-trend/gducky.jpg')}}');"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">HaNoi, November 14</span>
						<h2 class="content__item-header-title">GDucky</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						<b>Đặng Mai Việt Hoàng</b> (sinh ngày 12 tháng 12 năm 1998) hay còn được biết đến với tên gọi <b>G Ducky</b> hay <b>G Crazy</b> là một rapper người Việt Nam. Bắt đầu chơi rap vào năm 2018, G.Ducky đã có những lúc gặp khó khăn thất bại nhưng anh chưa từng có ý định từ bỏ bộ môn này.
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url('{{ asset('./public/img/top-trend/justatee.jpg')}}');"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">DaNang, November 14</span>
						<h2 class="content__item-header-title">JustaTee</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						JustaTee tên thật là <b>Nguyễn Thanh Tuấn</b> (sinh ngày 1-11-1991), tại Thành phố Hà Nội. Anh được biết đến là một ca sĩ hát nhạc Rap rất thành công và được đông đảo khán giả trong thị trường âm nhạc Việt Nam biết đến và yêu mến
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
				<article class="content__item">
					<div class="img-wrap img-wrap--content">
						<div class="img img--content" style="background-image: url('{{ asset('./public/img/top-trend/mck.jpg')}}');"></div>
					</div>
					<header class="content__item-header">
						<span class="content__item-header-meta">HaNoi, November 14</span>
						<h2 class="content__item-header-title">MCK</h2>
					</header>
					<div class="content__item-copy">
						<p class="content__item-copy-text">
						<b>Nghiêm Vũ Hoàng Long</b> (sinh ngày 2 tháng 3 năm 1999 tại Hà Nội, Việt Nam) được biết đến với tên <b>MCK</b> còn có thể là <b>Ngơ</b> hay <b>Nger</b> là một rapper viết lời nhạc theo phong cách "rap melody"
						</p>
						<a href="#" class="content__item-copy-more">more +</a>
					</div>
				</article>
			</div>
			<div class="revealer">
				<div class="revealer__inner"></div>
			</div>
			<div class="grid grid--slideshow">
				<figure class="grid__item grid__item--slide">
					<span class="number">01</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url('{{ asset('./public/img/top-trend/dechoat.jpg')}}');">
						</div>
					</div>
					<figcaption class="caption">Sai Gon, November 14</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">02</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url('{{ asset('./public/img/top-trend/gducky.jpg')}}');"></div>
					</div>
					<figcaption class="caption">HaNoi, November 14</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">03</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url('{{ asset('./public/img/top-trend/justatee.jpg')}}');"></div>
					</div>
					<figcaption class="caption">DaNang, November 14</figcaption>
				</figure>
				<figure class="grid__item grid__item--slide">
					<span class="number">04</span>
					<div class="img-wrap">
						<div class="img" style="background-image: url('{{ asset('./public/img/top-trend/mck.jpg')}}');"></div>
					</div>
					<figcaption class="caption">HaNoi, November 14</figcaption>
				</figure>
				<div class="titles-wrap">
					<div class="grid grid--titles">
						<h3 class="grid__item grid__item--title">Dế Choắt</h3>
						<h3 class="grid__item grid__item--title">GDucky</h3>
						<h3 class="grid__item grid__item--title">JustaTee</h3>
						<h3 class="grid__item grid__item--title">MCK</h3>
					</div>
				</div>
				<div class="grid grid--interaction">
					<div class="grid__item grid__item--cursor grid__item--left"></div>
					<div class="grid__item grid__item--cursor grid__item--center"></div>
					<div class="grid__item grid__item--cursor grid__item--right"></div>
				</div>
			</div>
			<div class="frame">
				<div class="frame__title-wrap">
					<a href="./home" class="frame__title">
						<b>RAPEDIA</b>
					</a>
					<div class="frame__links">
						<a href="./login">Login</a>
						<a href="./register">Register</a>
						<a href="./contact">@<b>A.T Comp</b></a>
					</div>
					<div class="frame__mode" role="radiogroup">
						<div class="frame__mode-item frame__mode-item--dark">
							<input id="mode-1" type="radio" name="mode" class="frame__mode-input"></input>
							<label class="frame__mode-label" for="mode-1">Dark mode</label>
						</div>
						<div class="frame__mode-item">
							<input id="mode-2" type="radio" name="mode" class="frame__mode-input" checked></input>
							<label class="frame__mode-label frame__mode-label--light" for="mode-2">Light mode</label>
						</div>
					</div>
				</div>
			</div><!-- /frame -->
		</main>
		<script src="{{ asset('./public/js/imagesloaded.pkgd.min.js')}}"></script>
		<script src="{{ asset('./public/js/charming.min.js')}}"></script>
		<script src="{{ asset('./public/js/TweenMax.min.js')}}"></script>
		<script src="{{ asset('./public/js/demo.js')}}"></script>
		<script src="{{ asset('./public/js/snow.js')}}"></script>
		
	</body>
</html>
