<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Learn Php</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style type="text/css">
		.col {
			border: 1px solid red;
		}

		.col-2 {
			border: 1px solid red;
		}

		.row {
			border: 1px solid red;
			height: 100vh;
		}

		.comp-body {
			display: flex;
			flex-direction: column;
		}

	</style>
</head>
<body>
	<div class="container-fluid">
		<div class="row ">
			<div class="col-lg-2">
				<div class="list-group" id="list-tab">
					 <button>Compose</button>
					 <button>Inbox</button>
					 <button>Sent</button>
					 <button>Draft</button>
				</div>
			</div>
			<div class="col">
				<h3>Compose a message</h3>
				<form method="post" action="send.php" class="comp-body">
					<label for="recipient">To: </label>
					<input type="email" name="recipient" required>
					<label for="subject">Subject: </label>
					<input type="text" name="subject" required>
					<textarea name="message" rows="20" cols="30" required></textarea>
					<input type="submit" name="submit">
				</form>
			</div>
			
		</div>		
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

