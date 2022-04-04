<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learning Space</title>
	<style type="text/css">
	* {
		padding: 0px;
		margin: 0px;		
	}	

	::-webkit-scrollbar {
		width: 5px;
		border-radius: 5px;
	}

	::-webkit-scrollbar-track {
		border: 1px solid rgba(0, 0, 0, .5);
		border-radius: 10px;
	}

	::-webkit-scrollbar-thumb {
		background-color: rgba(0, 0, 0, .3);
		border-radius: 10px;
	}

	.container {
		width: 100vw;
		height: 100vh;
		background-color: rgb(252, 233, 210);
		display: flex;
		flex-direction: row;
		justify-content: space-evenly;
	}

	header{
		width: 40vw;
		height: 60vh;
		background-color: rgb(247, 220, 188);
		box-shadow: 1px 1px 3px rgba(0, 0, 0, .2);
		padding: 20px;
		margin: auto;
		display: flex;
		flex-direction: column;
		justify-content: center;
	}

	section {
		width: 40vw;
		height: 60vh;
		background-color: rgb(247, 220, 188);
		box-shadow: 1px 1px 3px rgba(0, 0, 0, .2);
		margin: auto;
		padding: 20px;
		display: flex;
		flex-direction: row;
		overflow-y: scroll;
		flex-wrap: wrap;
		justify-content: space-evenly;
	}

	.btn-2 {
		width: 100px;
		height: 100px;
		margin: 20px;
		background-color: rgba(0, 0, 0, 0);
		border: 1px solid rgba(240, 240, 240, .6);
		box-shadow: 1px 1px 2px rgba(0, 0, 0, .3);
		border-radius: 10px;
		color: rgba(90, 90, 90, 1.0);
		transition: 0.5s;
	}

	.btn-2:hover {
		background-color: rgba(247, 231, 148);
	}

	.subCont {
		margin: 2px;
		position: relative;
		//border: 1px solid red;
		height: ;
	}


	</style>
</head>
<body>
	<div class="container">
		<header>
			<div style="margin: auto; color: rgba(240, 240, 240, 1); text-shadow: 1px 1px 2px rgba(50, 50, 50, .4);">
				<h2>PHP Learning Space</h2>
				<p>Collection of php learning practice.</p>
			</div>			
		</header>
		<section>
			<div class="subCont">
				<div id="emailTab" class="btn-l">
					<form method="post" action="emailTab.php">
						<input type="submit" name="email" class="btn-2" value="Email">
					</form>
				</div>				
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="OTAC/default.php">
						<input type="submit" name="signin" class="btn-2" value="OTAC">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
			<div class="subCont">
				<div id="signinTab" class="btn-l">
					<form method="get" action="signin.php">
						<input type="submit" name="signin" class="btn-2" value="signin">
					</form>
				</div>	
			</div>
		</section>
	</div>
</body>
</html>