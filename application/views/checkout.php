<html>
<head>
	<title>PokeCart</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">
	 $(document).ready(function(){

	 	var total = 0;
	 	$('.total').each(function(){
	 		total += parseInt($(this).html());
	 	});
	 	$('#total').html('Total: $'+total);

	 })
	</script><!-- end script -->
</head>
<body>
<?php $this->load->view('partials/customer_header') ?>
	<div class="container">
		<div class="row">
			<h3 class="col-md-2">Your Cart</h3>
			<a href="/customers" class="col-md-2 col-md-offset-8"><button class="btn btn-info pull-right">Continue Shopping</button></a>
			<table class="table table-striped table-hover table-condensed">
				<thead>
					<tr>
						<th class="text-center">Item</th>
						<th class="text-center">Price</th>
						<th class="text-center">Quantity</th>
						<th class="text-center">Total</th>
					</tr>
				</thead>
				<tbody>
<?php			foreach ($cart as $pokemon) {?>
					<tr>
						<td class="text-center"><?= $pokemon['name'] ?></td>
						<td class="text-center"><?= $pokemon['price'] ?></td>
						<td class="text-center"><?= $pokemon['in_cart'] ?></td>
						<td class="text-center total"><?= (+$pokemon['price']) * (+$pokemon['in_cart']) ?></td>
					</tr>
<?php } ?>
				</tbody>
			</table>
		</div>
	<div class="row">
		<a href="/customers/edit_cart"><button class="btn btn-warning pull-right">Edit Cart</button></a>
	</div>
	<div class="row">
		<div class="pull-right">
			<h5 id="total"></h5>
		</div>
	</div>
	
	<h3>Billing Information</h3>
	<form action="" method="post">
		<p>First Name: <input type="text" name="first_name" /></p>
		<p>Last Name: <input type="text" name="last_name" /></p>
		<p>Address: <input type="text" name="address1" /></p>
		<p>Address2: <input type="text" name="address2" /></p>
		<p>City: <input type="text" name="city" /></p>
		<p>State: <input type="text" name="state" /></p>
		<p>Zip: <input type="number" name="zip" min="00000" max="99999"/></p><br>
		<p>Card Number: <input type="text" name="CC_num" /></p>
		<p>Security Code: <input type="text" name="CCV" /></p>
		<p>Expiration: <select name="month">
<?php 		for ($i = 1; $i<=12; $i++){?>
							<option value="<?= $i ?>"/><?= $i ?></option>
<?php 		}?>
						</select>
		<select name="year">
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
		</select></p>
	</form>
	<h3>Shipping Information</h3>
	<form action="" method="post">
		<p><input type="checkbox" name="same_as_billing" /> Same as Billing</p>
		<p>First Name: <input type="text" name="first_name" /></p>
		<p>Last Name: <input type="text" name="last_name" /></p>
		<p>Address: <input type="text" name="address1" /></p>
		<p>Address2:<input type="text" name="address2" /></p>
		<p>City: <input type="text" name="city" /></p>
		<p>State: <input type="text" name="state" /></p>
		<p>Zip: <input type="number" name="zip" min="00000" max="99999"/></p>
	</form>
		<a href=""><button>Pay</button></a>
</div>
</body>
</html>