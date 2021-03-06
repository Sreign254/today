<h2>Welcome to aManager</h2>
<link rel="stylesheet" href="../css/homepage.css">

<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
  <link rel="shortcut icon" href="/image/pencil.jpeg" type="image/svg+xml">



<title>aManager</title>
<div class="container" id="container">
	<?php include "r.php";?>
	<div class="form-container sign-up-container">
		<form  method="POST" >
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="name" placeholder="Name" />
			<input type="email"  name="email" placeholder="Email" />
			<input type="password"  name="password" placeholder="Password" />
			<input type="confirmpassword" name="confirm_password" placeholder="confirmpassword" />
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Register</button>
			</div>
		</div>
	</div>
</div>
<script src="../js/homepage.js"></script>

<footer>
	<p>
		Created  <i class="fa fa-heart"></i> by
		<a target="_gmail" href="#">No name</a>
		
	</p>
</footer>