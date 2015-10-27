<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/gif" href="http://orig02.deviantart.net/5de6/f/2010/104/2/5/spinning_poke_ball_by_secondcrimson.gif"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>Pok&eacute;mon</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		)};
	</script>
</head>
<style type="text/css">
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
		width: 210px;
		height: 350px;
	}
</style>
<body>
<!-- top bar here -->
<div id="types">
	<form>
		<input type="text" placeholder="pok&eacute;mon name.">
		<input type="submit">
	</form>
	</br>
	<h4>
		Types
	</h4>
	<ul class="list-group">
	<!-- have each type have a colored background or be a button with the color of the type it is -->
		<li class="list-group-item" style="background:linear-gradient(180deg, #a4acaf 50%, #a4acaf 50%);">
		Normal</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #fd7d24 50%, #fd7d24 50%);">
		Fire</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #4592c4 50%, #4592c4 50%)">
		Water</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #9bcc50 50%, #9bcc50 50%);">
		Grass</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #eed535 50%, #eed535 50%);">
		Electric</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #51c4e7 50%, #51c4e7 50%);">
		Ice</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #d56723 50%, #d56723 50%);">
		Fighting</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #b97fc9 50%, #b97fc9 50%);">
		Poison</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #f7de3f 50%, #ab9842 50%);">
		Ground</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #3dc7ef 50%, #bdb9b8 50%);">
		Flying</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #f366b9 50%, #f366b9 50%);">
		Psychic</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #729f3f 50%, #729f3f 50%);">
		Bug</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #a38c21 50%, #a38c21 50%);">
		Rock</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #7b62a3 50%, #7b62a3 50%);">
		Ghost</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #707070 50%, #707070 50%);">
		Dark</li>
		<li class="list-group-item" style="color: white;background:linear-gradient(180deg, #53a4cf 50%, #f16e57 50%);">
		Dragon</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #9eb7b8 50%, #9eb7b8 50%);">
		Steel</li>
		<li class="list-group-item" style="background:linear-gradient(180deg, #fdb9e9 50%, #fdb9e9 50%);">
		Fairy</li>
	</ul>
	<!-- show 4 at first w/ show all button -->
</div>
<div id="main_box">
	<!-- have the type listed here followed by the page number -->
	<h3>//Type</h3>
	<div id="navbar">
	<!-- links go forward or back through pages -->
	<p>first | prev | current page no | next</p>
	<p>Sorted by</p>
	<form>
		<select>
		<!-- sort by options -->
			<option></option>
		</select>
	</form>
	</div>
	<div id="items_area">
		<!-- tems go here -->
		<table>
			<tr>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
			</tr>
			<tr>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
				<td class="icons">
				<img src="pokemon/001.png" height="200px" width="200px">
				<p>bulbasaur</p>
				</td>
			</tr>
		</table>
	</div>
	<div>
		<!-- pages bar -->
	</div>
</div>
</body>
</html>