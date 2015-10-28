<!DOCTYPE HTML>
<html>
<head>
	<title>PokeOrders</title>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				var url = $(this).attr('action');
				$.post(url, $(this).serialize(), function(output){
					console.log(output);
					},'json');
				return false;
			});
		}) //end of document JQuery 
	</script><!-- end script -->
</head><!-- end head -->
<body>
<div id="container">
	<form action="/admins/search_pokemon" method="post">
		<input type="text" name="search">
		<input type="submit" value="Search">
	</form>
	<a href="/admins/new_pokemon"><button>Add new product</button></a>
	<div id="products">
		<table id="productTable" border="1">
			<thead>
				<th>Picture</th>
				<th>ID</th>
				<th>Name</th>
				<th>Inventory Count</th>
				<th>Quantity Sold</th>
				<th>Action</th>
			</thead>
			<tbody>
<?php 			foreach ($pokemons as $pokemon){?>
				<tr>
				<td><img src='/assets/img/pokemon/<?= sprintf("%03d", $pokemon['id']) ?>.png'></img></td>
				<td><?= $pokemon['id'] ?></td>
				<td><?= $pokemon['name'] ?></td>
				<td><?= "INVENTORY" ?></td>
				<td><?= "QUANTITY SOLD" ?></td>
				<td><a href="/admins/edit/<?= $pokemon['id'] ?>">edit</a>   <a href="/admins/delete/<?= $pokemon['id'] ?>">delete</a></td>
				</tr>
<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
