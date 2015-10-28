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
            <form action="/admins/update/<?= $pokemon['id'] ?>" method="post">
				<p>Description <textarea name="description"><?=$pokemon['description']?></textarea></p>
				<p>Height <input type="number" name="height" value="<?=$pokemon['height']?>"></p>
				<p>Weight <input type="number" name="weight" value="<?=$pokemon['weight']?>"></p>
				<p>Speed <input type="number" name="speed" value="<?=$pokemon['speed']?>"></p>
				<p>Experience <input type="number" name="exp" value="<?=$pokemon['exp']?>"></p>
				<p>Attack <input type="number" name="attack" value="<?=$pokemon['attack']?>"></p>
				<p>Defense <input type="number" name="defense" value="<?=$pokemon['defense']?>"></p>
				<p>Abilities <input type="text" name="abilities" value="<?=$pokemon['abilities']?>"></p>
				<p>Types <input type="text" name="types" value="<?=$pokemon['types']?>"></p>
				<p>Price <input type="number" name="price" value="<?=$pokemon['price']?>"><p>
				<input type="submit" value="SAVE FOREVER">
			</form>
		</div> <!-- end MainContent -->
	</div> <!-- end container -->
</body><!-- end body -->
</html>
