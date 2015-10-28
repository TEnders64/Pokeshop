<!DOCTYPE HTML>
<html>
<head>
	<title>Pokemons</title>
	<link rel="stylesheet" type="text/css" href="/assets/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
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
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Pokemon Admin</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/admins/admin_orders">Orders <span class="sr-only">(current)</span></a></li>
        <li><a href="/admins/admin_pokemons">Products</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/admins/logoff">Log Off</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
