<!DOCTYPE HTML>
<html>
<head>
	<title>Pokemon Info</title>
	<link rel="stylesheet" type="text/css" href="/assets/style_show_pokemon.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">
	
	</script><!-- end script -->
</head><!-- end head -->
<body>
<?php $this->load->view('partials/customer_header', array('cart' => $this->session->userdata('cart'))) ?>
	<div id="container">
		<div id="header"></div> <!-- end Header -->
		<div class="row">
		<div class="col-md-6 col-md-offset-6">
			<div class="col-md-4">
			<h1><?=$pokemon['name']?></h1>
            <img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/<?= sprintf("%03d", $pokemon['id']) ?>.png" alt="<?=$pokemon['name']?> picture" >
				</div>
				<div class="col-md-6">
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
				<form class="form-inline col-md-4" action="/customers/add_to_cart" method="post">
				  <input type="hidden" name="id" value="<?= $pokemon['id'] ?>"/>
				  <div class="form-group">
				    <label class="sr-only" for="buy">Buy</label>
				    <div class="input-group">
				      <input type="number" name="quantity" class="form-control" id="buy" min="1" max="10">
				    </div>
				  </div>
				  <button type="submit" class="btn btn-primary">Buy</button>
				</form>
				</div>						
			</div>
		</div> 
		<div id="similar">
			<div class="container">
				<div class="row">
					<h2>Similar Pokemons:</h2>
					<div id="similarPoke">
		<?php 		foreach ($similars as $similar){?>
						<a href="/customers/show/<?= $similar['id'] ?>"><img src="http://assets12.pokemon.com/assets/cms2/img/pokedex/detail/<?= sprintf('%03d', $similar['id']) ?>.png"></a>
		<?php } ?>
					</div>
				</div>
			</div>
		</div> <!-- end Similar -->
	</div> <!-- end container -->
</body><!-- end body -->
</html>
