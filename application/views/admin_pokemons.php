
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
		<a href="/admins/admin_pokemons"><button type="submit" class="btn btn-info col-md-1">Show All</button></a>
		<a href="/admins/new_pokemon"><button class="btn btn-md btn-success col-md-2 pull-right">Add New Pokemon</button></a>
	</div>
	<div class="row">
		<div id="products">
			<div id="results" class="alert alert-warning" role="alert"></div>
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
	<nav class="text-center">
  	<ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
<?php 	for ($page = 0; $page < count($pokemons)/30; $page++){ ?>
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
		$('#results').hide();

		$('form').submit(function(){
			var url = $(this).attr('action');
			$.post(url, $(this).serialize(), function(output){
				console.log(output);
				if (output.length < 1){
					$('#results').slideDown('fast', 'linear', function(){
						$('#results').html("<p>No Results</p>");
						$('#results').fadeOut('slow');
					});
					return false;
				}else{
					var html_str = "";
					for (var i = 0; i < output.length; i++){
						html_str += "<tr id='" + output[i].id + "'>";
						html_str += "<td class='text-center'><img src='/assets/img/pokeapi/" + output[i].id + ".png' width='50px' height='50px'></img></td>";
						html_str += "<td class='text-center'>" + output[i].id + "</td>";
						html_str += "<td class='text-center'>" + output[i].name + "</td>";
						html_str += "<td class='text-center'>" + output[i].quantity + "</td>";
						html_str += "<td class='text-center'>" + output[i].sold + "</td>";
						html_str += "<td class='text-center'><a href='/admins/edit/"+ output[i].id +"'>edit</a> | <a pokemon='"+ output[i].id +"' href='#'>delete</a></td>";
						html_str += "</tr>";
					}
					$('#productTable>tbody').html(html_str);
				}
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
