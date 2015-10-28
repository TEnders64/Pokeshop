<!DOCTYPE HTML>
<html>
<head>
	<title>Pokemons</title>
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

			$('#productTable').on('click','a[pokemon]', function(){
				var pokeID = $(this).attr("pokemon");
				if (confirm("Are you sure you want to delete pokemon " + pokeID + "?")){
					$.post('/admins/delete/'+pokeID, function(){
						$('#products').prepend("Pokemon "+pokeID+" deleted.");
						$('#'+pokeID).hide("slow");
					});
				}
				return false;
			})
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
				<tr id="<?= $pokemon['id'] ?>">
				<td><img src='/assets/img/pokeapi/<?= $pokemon['id'] ?>.png'></img></td>
				<td><?= $pokemon['id'] ?></td>
				<td><?= $pokemon['name'] ?></td>
				<td><?= $pokemon['quantity'] ?></td>
				<td><?= $pokemon['sold'] ?></td>
				<td><a href="/admins/edit/<?= $pokemon['id'] ?>">edit</a>   <a pokemon="<?= $pokemon['id'] ?>" href="#">delete</a></td>
				</tr>
<?php } ?>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>
