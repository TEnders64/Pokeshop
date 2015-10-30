<?php $this->load->view('partials/admin_header'); ?>
<!DOCTYPE HTML>
<html>
<head>
	<title>New Pokemon</title>
	<link rel="icon" type="image/gif" href="http://orig02.deviantart.net/5de6/f/2010/104/2/5/spinning_poke_ball_by_secondcrimson.gif"/>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/assets/style_new_pokemon.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">
	</script>
</head><!-- end head -->
<body>
<div class="container">
		<div class="row">
			<div class="row">
		 <div class="col-md-3 col-md-offset-6">
            <form class="form" action="/admins/create" method="post">  
	       		<div class="form-group text-right">
	       			<label class="control-label">Name</label>
	       			<input type="text" name="name">
	       		</div>
	       		<div class="form-group text-right">
	       			<label class="control-label">Description</label>
					<textarea name="description" rows="3"></textarea>
				</div>
				<div class="form-group text-right">
					<label class="control-label">Height</label>
					<input type="number" name="height">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Weight</label>
					<input type="number" name="weight">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Speed</label>
					<input type="number" name="speed">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Exper.</label>
					<input type="number" name="exp">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Attack</label>
					<input type="number" name="attack">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Defense</label>
					<input type="number" name="defense">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Abilities</label>
					<input type="text" name="abilities">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Types</label>
					<input type="text" name="types">
				</div>
				<div class="form-group text-right">
					<label class="control-label">Price</label>
					<input type="number" name="price">
					</div>
				<div class="form-group">
					<div class="col-md-4 col-md-offset-2 text-right">
					<label class="control-label">Image</label>
					</div>
					<div class="col-md-8 col-md-offset-4">
					<input type="file"/>
				</div>
			</div>
			<div class="form-group">
				<div class="form-group text-right">
				<input class="btn btn-primary" type="submit" value="Create New Pokemon">
				</div>
			</div>
			</form>
			</div>
			<div class="col-md-3">
				<?= $this->session->flashdata("errors") ?>
			</div>
		</div>
		</div>
	</div> <!-- end container -->
</body><!-- end body -->
</html>
