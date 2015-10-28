<!DOCTYPE HTML>
<html>
<head>
	<title>New Pokemon</title>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		}) //end of document JQuery 
	</script><!-- end script -->
</head><!-- end head -->
<body>
	<div id="container">
		<div id="header"></div> <!-- end Header -->
			
		<div id="mainContent">
			<h2>New Pokemon!</h2>
            <form action="/admins/create" method="post">
				<p>Description <textarea name="description" rows="5"></textarea></p>
				<p>Height <input type="number" name="height"></p>
				<p>Weight <input type="number" name="weight"></p>
				<p>Speed <input type="number" name="speed"></p>
				<p>Experience <input type="number" name="exp"></p>
				<p>Attack <input type="number" name="attack"></p>
				<p>Defense <input type="number" name="defense"></p>
				<p>Abilities <input type="text" name="abilities"></p>
				<p>Types <input type="text" name="types"></p>
				<p>Price <input type="number" name="price"><p>
				<p>Image <input type="file"/></p>
				<input type="submit" value="Create New Pokemon">
			</form>
		</div> <!-- end MainContent -->
	</div> <!-- end container -->
</body><!-- end body -->
</html>
