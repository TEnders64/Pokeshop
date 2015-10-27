<!DOCTYPE HTML>
<html>
<head>
	<title>PokeOrders</title>
	<link rel="stylesheet" type="text/css" href="show_style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

		}) //end of document JQuery 
	</script><!-- end script -->
</head><!-- end head -->
<body>
<div id="container">
	<form id="search">
		<input type="text" name="search">
		<input type="submit" value="Search">
	</form>
	<select name="filter">
		<option value="">Sort by...</option>
		<option value="">Lowest Number First</option>
		<option value="">Highest Number First</option>
		<option value="">A-Z</option>
		<option value="">Z-A</option>
	</select>
	<div id="products">
		<table id="productTable" border="1">
			<thead>
				<th>Order ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Billing Address</th>
				<th>Total</th>
				<th>Status</th>
			</thead>
			<tbody>
				<tr>
				<td>ID</td>
				<td>First</td>
				<td>Last</td>
				<td>Billing</td>
				<td>$99999999.00</td>
				<td>
					<select name="status">
						<option value="processing">Order in Process</option>
						<option value="shipped">Order Shipped</option>
						<option value="cancelled">Cancelled</option>
					</select>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>