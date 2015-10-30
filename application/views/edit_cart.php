<html>
<head>
	<title>PokeCart</title>
	<link rel="icon" type="image/gif" href="http://orig02.deviantart.net/5de6/f/2010/104/2/5/spinning_poke_ball_by_secondcrimson.gif"/>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
	<script type="text/javascript">
	 $(document).ready(function(){
	 	$('#update').hide();

	 	$('form').on('change',function(){
	 		$('#update').fadeIn('slow');
	 	});

	 	$('td>button').on('click',function(){
	 		$('#update').fadeIn('slow');
	 	});

	 	$('table').on('click','button',function(){
	 		var id = $(this).attr('pokemon');
	 		console.log(id);
	 		$('#'+id).remove();

	 		return false;
	 	});

	 	$('h5').css('color','green').fadeOut(3000);

	 })
	</script><!-- end script -->
</head>
<body>
<?php $this->load->view('partials/customer_header'); ?>
	<div class="container">
		<div class="row">
			<h3 class="col-md-3">Your PokeCart!</h3>
			<a href="/customers" class="col-md-2 col-md-offset-7"><button class="btn btn-info pull-right">Continue Shopping</button></a>
			<form class="form-horizontal" action="/customers/update_cart" method="post">
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
			<?php  	foreach ($cart as $pokemon){ ?>
						<tr id="<?= $pokemon['id'] ?>">
							<td class="text-center"><?= $pokemon['name'] ?></td>
							<td class="text-center"><?= $pokemon['price'] ?></td>
							<td class="text-center">
								<input type="number" name="<?= $pokemon['id'] ?>" min="1" max="10" value="<?= $pokemon['in_cart'] ?>"/>
								<button type="button" class="btn btn-sm btn-danger" pokemon="<?= $pokemon['id'] ?>">remove</button>
							</td>
							<td class="text-center total"><?php echo (+$pokemon['price']) * (+$pokemon['in_cart']) ?></td>
						</tr>
			<?php } ?>
					</tbody>
				</table>  
				<button class="btn btn-warning text-center col-md-4 col-md-offset-4" id="update" type="submit">Update Cart</button>
				<a href="/customers/checkout"><button type="button" class="btn btn-success pull-right">Checkout</button></a>
				<?= $this->session->flashdata('success') ?>
			</form>
		</div>
	</div>
</body>
</html>
