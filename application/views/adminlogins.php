<!DOCTYPE HTML>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		}) //end of document JQuery 
	</script><!-- end script -->
</head><!-- end head -->
<body>
	<div id="container">
		<h1>PokeDealer Login</h1>
		<form action="/admins/login" method="post">
			PokEmail: <input type="text" name="email" placeholder="email">
			Password: <input type="password" name="password" placeholder="********">
			<input type="submit" value="Login">
		</form>
		<?= $this->session->flashdata("errors") ?>
	</div>
</body>
</html>