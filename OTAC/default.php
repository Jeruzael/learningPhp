<?php include_once('IdGenerator.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>OTAC</title>
	<style type="text/css">
		* {
			padding: 0;
			margin: 0;
		}

		.container {
			width: 100vw;
			height: 100vh;
			display: flex;
			flex-direction: row;
			justify-content: space-evenly;
			align-items: center;
		}

		.subCont {
			width: 30vw;
			height: 70vh;
			/*border: 1px solid red;*/	
			overflow: hidden;		
			border-radius: 10px;
		}

		.subCont form {
			display: flex;
			flex-direction: column;
			justify-content: space-evenly;
			//border: 1px solid red;
			width: initial;
			height: 60vh;
			//background-color: rgba(230, 117, 94, 1.0);
			background-image: linear-gradient(rgba(230, 117, 94, .7), rgba(230, 117, 94, 1));
			border-radius: 10px;
			align-items: center;
			box-shadow: 1px 1px 3px rgba(0, 0, 0, .5);
		}

		.form-s {
			width: 20vw;
			border-radius: 10px;
			padding: 5px;
			border: 1px solid white;
			transition: .5s;
		}

		.form-s.btn {
			width: 10vw !important;
		}

		.form-s.btn:hover {
			color: white;
			background-color: rgba(0, 0, 0, .7);
		}

		.form-s.btn:active {
			color: white;
			background-color: rgba(100, 0, 0, .7);
		}		

		.hide {
			display: none;
		}

		.nd {
			border: 1px solid rgba(0,0,0,0.5);
		}

	</style>
</head>
<body>
	<div class="container">
		<div class="subCont" id="signin">
			<form method="post" action="otac.php">
				<p>SIGN IN</p>
				<div>					
					<input type="text" name="username" placeholder="Username/Email/number" class="form-s">					
				</div>
				<div>					
					<input type="Password" name="pass" placeholder="Password" class="form-s"> 
				</div>								
					<input type="submit" name="submit" value="Log in" class="form-s btn">
					<button type="button" class="form-s btn" id="switch">Signup</button>
					<button type="button" class="form-s btn" id="test">Test</button>
			</form>
		</div>

		<!--<div id="testerId">
			<h2>code</h2>
		</div>-->

		<div class="subCont" id="signup">
			<form method="post" action="signup.php">
				<p>SIGN UP</p>						
					<input type="text" name="username" placeholder="Username" class="form-s">									
					<input type="Password" name="pass" placeholder="Password" class="form-s">
					<input type="Password" name="retype-pass" placeholder="Retype Password" class="form-s">
					<input type="email" name="email" placeholder="Email" class="form-s">				
					<input type="submit" name="submit" value="Submit" class="form-s btn">
					<button type="button" class="form-s btn" id="switch-back">Signin</button>
				</div>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="control.js"></script>
</body>
</html>