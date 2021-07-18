<?php if (isset($a)) {
			echo "Đăng kí tài khoản thành công";
		} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login & Register</title>
	<link rel="stylesheet" href="{{ asset('./public/css/login.css')}}"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link rel="shortcut icon" href="{{ asset('./public/img/rapedia.ico')}}">
</head>
<body>
<div class="login-form">
	<div class="form-box">
		<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
		</div>
		<div class="social-icons">
		<img src="{{ asset('./public/img/login-img/fb.png')}}">
		<img src="{{ asset('./public/img/login-img/tw.png')}}">
		<img src="{{ asset('./public/img/login-img/gp.png')}}">
	</div>
	<form id="login" class="input-group" action="{{('./login')}}" method="POST">
	{{ csrf_field() }}
		<input type="text" class="input-field" placeholder="User name" name="username" required="">
		<input type="password" class="input-field" placeholder="Password" name="password" required="">
		<input type="checkbox" class="check-box"><span>Remember Password</span>
		<button type="submit" name="submit" class="submit-btn">Log in</button>
		
	</form>
	<form id="register" class="input-group" action="{{('./postregister')}}" method="POST">
		{{ csrf_field() }}
		<input type="text" class="input-field" placeholder="User name" name="username" required="">
		<input type="email" class="input-field" placeholder="Email" name="email" required="">
		<input type="password" class="input-field" placeholder="Password" name="password" required="">
		<input type="checkbox" class="check-box" required=""><span>I agree to the terms & conditions</span>
		<button type="submit" class="submit-btn">Register</button>
	</form>
	</div>
</div>
<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z = document.getElementById("btn");

	function register(){
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	function login(){
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0";
	}
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
  logged_in_greeting="Chào mừng bạn đến với Rapedia. Chúng tôi có thể giúp gì được cho bạn."
  logged_out_greeting="Chào mừng bạn đến với Rapedia. Chúng tôi có thể giúp gì được cho bạn.">
      </div>
</body>
</html>