
<!DOCTYPE html>
<html>
<head>
	<title>Login/Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/learnslide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="loginval.php" method="post">
					<label for="chk" aria-hidden="true">Sign up</label>
					<input type="text" name="username" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pswd" placeholder="Password" required="">
					
					<button>Sign up</button>
				</form>
			</div>

			<div class="login">
				<form action="chechkpass.php" method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="usname" placeholder="Username" required="">
					<input type="password" name="uspswd" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>