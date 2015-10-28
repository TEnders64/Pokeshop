<!DOCTYPE HTML>
<html>
<head>
	<title>Pokemon Info</title>
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
		<div id="sidePanel">
			<h1><?=$pokemon['name']?></h1>
                <img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/<?= sprintf("%03d", $pokemon['id']) ?>.png" alt="<?=$pokemon['name']?> picture" >
            
		</div> <!-- end SidePanel -->
		<div id="mainContent">
			<div id="textBox">
				<h1>Description:</h1>
				<p><?=$pokemon['description']?></p>
				<p>Height: <?=$pokemon['height']?></p>
				<p>Weight: <?=$pokemon['weight']?></p>
				<p>Speed: <?=$pokemon['speed']?></p>
				<p>Experience: <?=$pokemon['exp']?></p>
				<p>Attack: <?=$pokemon['attack']?></p>
				<p>Defense: <?=$pokemon['defense']?></p>
				<p>Abilities: <?=$pokemon['abilities']?></p>
				<p>Type: <?=$pokemon['types']?></p>
				<p>Price: $<?=$pokemon['price']?></p>						
			</div>
			<form>
				<input type="hidden">
				<input type="number" name="quantity" min="1" max="10">
				<input type="submit" value="BUY">
			</form>
		</div> <!-- end MainContent -->
		<div id="similar">
			<h2>Similar Pokemons:</h2>
			<div id="similarPoke">
				<img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/002.png" alt="venusaur">
				<img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/003.png" alt="ivysaur">
			</div>
		</div> <!-- end Similar -->
	</div> <!-- end container -->
</body><!-- end body -->
</html>
