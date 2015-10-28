<!DOCTYPE HTML>
<html>
<head>
	<title>Edit Pokemon</title>
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
			<h2>Edit Pokemon: <?=$pokemon['id']?></h2>
			<h1><?=$pokemon['name']?></h1>
                <img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/<?= sprintf("%03d", $pokemon['id']) ?>.png" alt="<?=$pokemon['name']?> picture" >
            <form action="" method="post">
				<input type="text" name="description" value="<?=$pokemon['description']?>">
				<input type="number" name="height" value="<?=$pokemon['height']?>">
				<input type="number" name="weight" value="<?=$pokemon['weight']?>">
				<input type="number" name="speed" value="<?=$pokemon['speed']?>">
				<input type="number" name="exp" value="<?=$pokemon['exp']?>">
				<input type="number" name="attack" value="<?=$pokemon['attack']?>">
				<input type="number" name="defense" value="<?=$pokemon['defense']?>">
				<input type="text" name="abilities" value="<?=$pokemon['abilities']?>">
				<input type="text" name="types" value="<?=$pokemon['types']?>">
				<input type="number" name="price" value="<?=$pokemon['price']?>">
				<input type="submit" value="SAVE FOREVER">
			</form>
		</div> <!-- end MainContent -->
	</div> <!-- end container -->
</body><!-- end body -->
</html>
