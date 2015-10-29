<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login/Registration</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<body>
	<?php $this->load->view('partials/customer_header', array('cart' => $this->session->userdata('cart'))) ?>
	<h1 class="text-center">Pok&eacute;Login or Register First</h1>
	<div class="row">
		<div class="col-md-3 col-md-offset-1">		
			<h3 class="text-right">Register</h3>
			<?= $this->session->flashdata("success") ?>
			<?= $this->session->flashdata("reg_errors") ?>
			<form action="/customers/validate_registration" method="post">
				<div class="form-group text-right">
					<label for="first_name">First Name</label>
					<input type="text" name="first_name" />
				</div>
				<div class="form-group text-right">
					<label for="last_name">Last Name</label>
					<input type="text" name="last_name" />
				</div>
				<div class="form-group text-right">
					<label for="email">Email</label>
					<input type="email" name="email" />
				</div>
				<div class="form-group text-right">
					<label for="password">Password</label>
					<input type="password" name="password" />
				</div>
				<div class="form-group text-right">
					<label for="c_password">Confirm</label>
					<input type="password" name="c_password" />
				</div>
				<div class="form-group text-right">
					<label for="address1">Address</label>
					<input type="text" name="address1" />
				</div>
				<div class="form-group text-right">
					<label for="address2">Address 2</label>
					<input type="text" name="address2" />
				</div>
				<div class="form-group text-right">
					<label for="city">City</label>
					<input type="text" name="city" />
				</div>
				<div class="form-group text-right">
					<label for="state">State</label>
					<input type="text" name="state" />
				</div>
				<div class="form-group text-right">
					<label for="zip">Zip</label>
					<input type="number" name="zip" min="00000" max="99999"/>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-primary btn-md" type="submit">Register</button>
				</div>
			</form>
		</div>
		<div class="col-md-3 col-md-offset-2">	
			<h3 class="text-right">Login</h3>
			<?= $this->session->flashdata("login_errors") ?>
			<form action="/customers/validate_login" method="post">
				<div class="form-group text-right">
					<label for="email">Email</label>
					<input type="email" name="email" />
				</div>
				<div class="form-group text-right">
					<label for="password">Password</label>
					<input type="password" name="password" />
				</div>
				<div class="form-group text-right">
					<button class="btn btn-primary btn-md" type="submit">Login</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>