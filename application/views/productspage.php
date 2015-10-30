<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="icon" type="image/gif" href="http://orig02.deviantart.net/5de6/f/2010/104/2/5/spinning_poke_ball_by_secondcrimson.gif"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/assets/productspage.css">
	<title>Pok&eacute;mon</title>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$.get("/customers/all_pokemon", function(pokemon){
			console.log(pokemon);
			var pages = Math.ceil(pokemon.length / 60);
			var html_str2 = ""
			for (var i = 1; i <= pages; i++){
				html_str2 += "<li class='pageno' id='"+i+"'>"+i+"</li>";
			};
			$(".pagination").html(html_str2)
			$(".pageno").on('click', function(){
				var pageno = event.target.id
				$("#where_the_pokemon_go").html("<div></div>");
				for (var i = ((pageno - 1) * 60) + 1; i <=pageno * 60; i++) {
					var html_str =""
					html_str += "<div class='col-md-1' style='display:inline-block;text-align:center;'>"
					html_str += "<a href='/customers/show/"+i+"' class='tnail'>"
					html_str += "<img src='/assets/img/pokeapi/"+i+".png'>"
					html_str += "<p>"+pokemon[i - 1].name+"</p></a>"
					html_str += "</div>";
					$("#where_the_pokemon_go").append(html_str);
				};				
			});
			for (var i = ((1 - 1) * 60) + 1; i <=1 * 60; i++) {
					var html_str =""
					html_str += "<div class='col-md-1' style='display:inline-block;text-align:center;'>"
					html_str += "<a href='/customers/show/"+i+"' class='tnail'>"
					html_str += "<img src='/assets/img/pokeapi/"+i+".png'>"
					html_str += "<p>"+pokemon[i - 1].name+"</p></a>"
					html_str += "</div>";
					$("#where_the_pokemon_go").append(html_str);
				};
		},"json");
	});	
	$(document).on('click', ".list_item_" ,function(){
		var type_selected = event.target.id
		console.log(type_selected);
		$("#body").attr('class', type_selected);
		$.get("/customers/types_of_pokemon_"+type_selected , function(pokemon){
			console.log(pokemon)
			var pages = Math.ceil(pokemon.length / 60);
			var html_str2 = ""
			for (var i = 1; i <= pages; i++){
				html_str2 += "<li class='pageno' id='"+i+"'>"+i+"</li>";
			};
			$(".pagination").html(html_str2)
			$(".pageno").on('click', function(){
				var pageno = event.target.id
				$("#where_the_pokemon_go").html("<div></div>");
				for (var i = ((pageno - 1) * 60) + 1; i <=pageno * 60; i++) {
					var html_str =""
					html_str += "<div class='col-md-1' style='display:inline-block;text-align:center;'>"
					html_str += "<a href='/customers/show/"+pokemon[i-1].id+"' class='tnail'>"
					html_str += "<img src='/assets/img/pokeapi/"+pokemon[i-1].id+".png'>"
					html_str += "<p>"+pokemon[i - 1].name+"</p></a>"
					html_str += "</div>";
					$("#where_the_pokemon_go").append(html_str);
				};
			});
			$("#where_the_pokemon_go").html("<div></div>");
			for (var i = ((1 - 1) * 60) + 1; i <=1 * 60; i++) {
					var html_str =""
					html_str += "<div class='col-md-1' style='display:inline-block;text-align:center;'>"
					html_str += "<a href='/customers/show/"+pokemon[i-1].id+"' class='tnail'>"
					html_str += "<img src='/assets/img/pokeapi/"+pokemon[i-1].id+".png'>"
					html_str += "<p>"+pokemon[i - 1].name+"</p></a>"
					html_str += "</div>";
					$("#where_the_pokemon_go").append(html_str);
				};
		},"json");

		});
	</script>
</head>
<style type="text/css">

</style>
<body id="body">
<?php $this->load->view('partials/customer_header'); ?>
<!-- top bar here -->
<div class="row-fluid">

<div id="types" class="span2">
	<form>
		<input type="text" placeholder="pok&eacute;mon name.">
		<input type="submit">
	</form>
	</br>
	<h4>
		Types
	</h4>
	<form>
	<ul class="list-group">
	<!-- have each type have a colored background or be a button with the color of the type it is -->
		<li id="normal" class="list-group-item list_item_" style="background:linear-gradient(180deg, #a4acaf 50%, #a4acaf 50%);">
		Normal</li>
		<li id="fire" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #fd7d24 50%, #fd7d24 50%);">
		Fire</li>
		<li id="water" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #4592c4 50%, #4592c4 50%);">
		Water</li>
		<li id="grass" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #9bcc50 50%, #9bcc50 50%);">
		Grass</li>
		<li id="electric" class="list-group-item list_item_" style="background:linear-gradient(180deg, #eed535 50%, #eed535 50%);">
		Electric</li>
		<li id="ice" class="list-group-item list_item_" style="background:linear-gradient(180deg, #51c4e7 50%, #51c4e7 50%);">
		Ice</li>
		<li id="fighting" class="list-group-item list_item_" style="background:linear-gradient(180deg, #d56723 50%, #d56723 50%);">
		Fighting</li>
		<li id="poison" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #b97fc9 50%, #b97fc9 50%);">
		Poison</li>
		<li id="ground" class="list-group-item list_item_" style="background:linear-gradient(180deg, #f7de3f 50%, #ab9842 50%);">
		Ground</li>
		<li id="flying" class="list-group-item list_item_" style="background:linear-gradient(180deg, #3dc7ef 50%, #bdb9b8 50%);">
		Flying</li>
		<li id="psychic" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #f366b9 50%, #f366b9 50%);">
		Psychic</li>
		<li id="bug" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #729f3f 50%, #729f3f 50%);">
		Bug</li>
		<li id="rock" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #a38c21 50%, #a38c21 50%);">
		Rock</li>
		<li id="ghost" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #7b62a3 50%, #7b62a3 50%);">
		Ghost</li>
		<li id="dark" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #707070 50%, #707070 50%);">
		Dark</li>
		<li id="dragon" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #53a4cf 50%, #f16e57 50%);">
		Dragon</li>
		<li id="steel" class="list-group-item list_item_" style="background:linear-gradient(180deg, #9eb7b8 50%, #9eb7b8 50%);">
		Steel</li>
		<li id="fairy" class="list-group-item list_item_" style="background:linear-gradient(180deg, #fdb9e9 50%, #fdb9e9 50%);">
		Fairy</li>
	</ul>
	</form>
	<!-- show 4 at first w/ show all button -->
</div>
<div id="main_box" class="span2" style="margin-top:35px;">
	<!-- have the type listed here followed by the page number -->
	
	<div>
		  <ul class="pagination">
		   
		  </ul>
		<!-- ul  id="pages_bar">
			
		</ul> -->
	</div>
	<div id="where_the_pokemon_go">
		<!-- tems go here -->
		<!-- 72 -->
		
		
	</div >
	
</div>
</div>
</body>
</html>