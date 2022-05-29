<!DOCTYPE html>
<html>

<!-- Head -->
<head>

	<title>Library Management System </title>

	<!-- Meta-Tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="keywords" content="Library Member Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<!-- //Meta-Tags -->

	<!-- Style --> 
	<link type="text/css" href="front_assets/css/style.css" rel="stylesheet" media="all">

	<!-- Fonts -->
		<link href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
	<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

	<h1>LIBRARY MANAGEMENT SYSTEM</h1>

	<div class="container">

		<div class="login">
			<h2>Sign In</h2>
			<form action="/login" method="post">
				@csrf
				<input type="text" Name="Email" placeholder="Email" required>
				@error('Email')
				{{$message}}
				@enderror
				<input type="password" Name="Password" placeholder="Password" required="">
				@error('Password')
				{{$message}}
				@enderror
			<div class="send-button">
				<!--<form>-->
					<input type="submit" name="signin"; value="Sign In">
				</form>
			</div>
			
			<div class="clear"></div>
		</div>

		<div class="register">
			<h2>Sign Up</h2>
			<form action="/register" method="post">
				@csrf
				<input type="text" Name="Name" placeholder="Name" required>
				@error('Name')
				{{$message}}
				@enderror
				<input type="text" Name="Email" placeholder="Email" required>
				@error('Email')
				{{$message}}
				@enderror
				<input type="password" Name="Password1" placeholder="Password" required>
				@error('Password1')
				{{$message}}
				@enderror
				<input type="text" Name="mobno" placeholder="Phone Number" required>
				@error('mobno')
				<p>Le numero de telephonne doit etre contient 8 chiffres</p>
				@enderror
				<br>
			
			
			<br>
			<div class="send-button">
			    <input type="submit" name="signup" value="Sign Up">
			    </form>
			</div>
			<p>By creating an account, you agree to our <a class="underline" href="">Terms</a></p>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="">
		
		
	</div>
    
        
    </body>
  </html>