<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Login</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		}) //end of document JQuery 
	</script><!-- end script -->
</head><!-- end head -->
<body>
	<div class="col-md-4 col-md-offset-4">
		<form action="/admins/login" method="post">
		<div class="form-group">
			<h1>PokeDealer Login</h1>
		</div>
		<div class="form-group">
			<label for="email">PokEmail:</label>
			<input type="text" name="email" placeholder="email">
		</div>
		<div class="form-group">
				<label for="password">Password:</label>
				<input type="password" name="password" placeholder="********">
		</div>
			<input type="submit" value="Login">
		<div class="form-group">
			<?= $this->session->flashdata("errors") ?>
		</div>
		</form>
	</div>
</body>
</html>
