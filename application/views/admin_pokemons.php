
<?php $this->load->view('partials/admin_header'); ?>
<div class="container">
	<div class="row">
		<form class="form-inline col-md-4" action="/admins/search_pokemon" method="post">
		  <div class="form-group">
		    <label class="sr-only" for="search">Search</label>
		    <div class="input-group">
		      <input type="text" name="search" class="form-control" id="search" placeholder="Pokemon">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Search</button>
		</form>
		<a href="/admins/new_pokemon"><button class="btn btn-md btn-success col-md-2 pull-right">Add New Pokemon</button></a>
	</div>
	<div class="row">
		<div id="products">
			<table id="productTable" class="table table-striped table-hover table-condensed">
				<thead>
					<th class="text-center">Picture</th>
					<th class="text-center">ID</th>
					<th class="text-center">Name</th>
					<th class="text-center">Inventory Count</th>
					<th class="text-center">Quantity Sold</th>
					<th class="text-center">Action</th>
				</thead>
				<tbody>
<?php 			foreach ($pokemons as $pokemon){?>
					<tr id="<?= $pokemon['id'] ?>">
					<td class="text-center"><img src='/assets/img/pokeapi/<?= $pokemon['id'] ?>.png' width="50px" height="50px"></img></td>
					<td class="text-center"><?= $pokemon['id'] ?></td>
					<td class="text-center"><?= $pokemon['name'] ?></td>
					<td class="text-center"><?= $pokemon['quantity'] ?></td>
					<td class="text-center"><?= $pokemon['sold'] ?></td>
					<td class="text-center"><a href="/admins/edit/<?= $pokemon['id'] ?>">edit</a> | <a pokemon="<?= $pokemon['id'] ?>" href="#">delete</a></td>
					</tr>
<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
	<nav class="">
  	<ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
<?php 	for ($page = 0; $page < count($pokemons)/2; $page++){ ?>
				<li><a href="#"><?= $page+1 ?></a></li>
<?php 	} ?>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
    	</li>
  	</ul>
	</nav>
</div>
</body>
<script>
	$(document).ready(function(){
		$('form').submit(function(){
			$.post($(this).attr('action'), $(this).serialize(), function(pokemon){
				console.log(this);
			}, 'json');
		})
	})
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
</script>
</html>
