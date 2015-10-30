<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<link rel="icon" type="image/gif" href="http://orig02.deviantart.net/5de6/f/2010/104/2/5/spinning_poke_ball_by_secondcrimson.gif"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
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
body{
	background-color: #c12026;
}
.tnail img {
 /*min-height:50px; height:200px;*/
 width: 100%;
  }
	#types{
		width: 16%;
		height: auto;
		display: inline-block;
		text-align: center;
	}
		#types ul{
			list-style: none;
			/*width: 100%;*/
	  		/*display: table;*/
	  		width: 100px;
	  		margin: auto;
	  		padding: 0px;
		}
		#types ul li {
			/*display: table-cell;*/
			
			text-align: center;
		}
	#main_box{
		display: inline-block;
		width: 78%;
		vertical-align: top;
	}
		#main_box h3{
			display: inline-block;
			width: auto;
			vertical-align: top;
	}
	#navbar{
		display: inline-block;
		margin-left: 75%;

	}
	.icons{
		/*width: 140px;
		height: 150px;
		max-width: 140px;
		max-height: 150px;
		margin: 5px;
		background-color: #a0a5a7;
		display: inline-table;*/
	}
	/*here starts the css after the pages work, earlier may need to be made to work with boot strap*/
	.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}
.pagination > li {
  display: inline;
}
.pagination > li,
.pagination > li > span {
  position: relative;
  float: left;
  padding: 6px 12px;
  line-height: 1.42857143;
  text-decoration: none;
  color: #337ab7;
  background-color: #ffffff;
  border: 1px solid #dddddd;
  margin-left: -1px;
}
.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-bottom-left-radius: 4px;
  border-top-left-radius: 4px;
}
.pagination > li:last-child > a,
.pagination > li:last-child > span {
  border-bottom-right-radius: 4px;
  border-top-right-radius: 4px;
}
.pagination > li:hover,
.pagination > li > span:hover,
.pagination > li:focus,
.pagination > li > span:focus {
  z-index: 3;
  color: #23527c;
  background-color: #eeeeee;
  border-color: #dddddd;
}
.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  z-index: 2;
  color: #ffffff;
  background-color: #337ab7;
  border-color: #337ab7;
  cursor: default;
}
.pagination > .disabled > span,
.pagination > .disabled > span:hover,
.pagination > .disabled > span:focus,
.pagination > .disabled > a,
.pagination > .disabled > a:hover,
.pagination > .disabled > a:focus {
  color: #777777;
  background-color: #ffffff;
  border-color: #dddddd;
  cursor: not-allowed;
}
.pagination-lg > li,
.pagination-lg > li > span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
}
.pagination-lg > li:first-child > a,
.pagination-lg > li:first-child > span {
  border-bottom-left-radius: 6px;
  border-top-left-radius: 6px;
}
.pagination-lg > li:last-child > a,
.pagination-lg > li:last-child > span {
  border-bottom-right-radius: 6px;
  border-top-right-radius: 6px;
}
.pagination-sm > li,
.pagination-sm > li > span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
}
.pagination-sm > li:first-child > a,
.pagination-sm > li:first-child > span {
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
}
.pagination-sm > li:last-child > a,
.pagination-sm > li:last-child > span {
  border-bottom-right-radius: 3px;
  border-top-right-radius: 3px;
}
.tnail {
  display: inline-block;
  padding: 4px;
  margin-bottom: 20px;
  /*line-height: 1.42857143;*/
  background-color: #ffffff;
  border: 1px solid #dddddd;
  border-radius: 4px;
  -webkit-transition: border 0.2s ease-in-out;
  -o-transition: border 0.2s ease-in-out;
  transition: border 0.2s ease-in-out;
}
.tnail > img,
.tnail a > img {
  margin-left: auto;
  margin-right: auto;'
}
a.tnail{
	height: 150px;
	width: 94px;
}
a.tnail:hover,
a.tnail:focus,
a.tnail.active {
  border-color: #337ab7;
}
.tnail .caption {
  padding: 9px;
  color: #333333;
}
</style>
<body>
<?php $this->load->view('partials/customer_header'); ?>
<!-- top bar here -->
<div class="row-fluid">

<div id="types" class="span2">
	<form action="/customers/search" name="search" method="post">
		<input type="text" name="search" placeholder="pok&eacute;mon name.">
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
		<li id="water" class="list-group-item list_item_" style="color: white;background:linear-gradient(180deg, #4592c4 50%, #4592c4 50%)">
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

		</nav>
		<ul  id="pages_bar"></ul>

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