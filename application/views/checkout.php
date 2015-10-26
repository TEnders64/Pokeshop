<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	<h3>Your Cart</h3>
	<table>
		<thead>
			<tr>
				<th>Item</th>
				<th>Price</th>
				<th>Quantity</th>
				<th>Total</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Pikachu</td>
				<td>$299.99</td>
				<td>1</td>
				<td>$299.99</td>
			</tr>
			<tr>
				<td>Charmander</td>
				<td>$249.99</td>
				<td>2</td>
				<td>$499.98</td>
			</tr>
		</tbody>
	</table>
	<h5>Total: $799.97</h5>
	<a href=""><button>Continue Shopping</button></a>
	<h3>Shipping Information</h3>
	<form action="" method="post">
		<p>First Name: <input type="text" name="first_name" /></p>
		<p>Last Name: <input type="text" name="last_name" /></p>
		<p>Address: <input type="text" name="address1" /></p>
		<p>Address2:<input type="text" name="address2" /></p>
		<p>City: <input type="text" name="city" /></p>
		<p>State: <input type="text" name="state" /></p>
		<p>Zip: <input type="number" name="zip" min="00000" max="99999"/></p>
	</form>
	<h3>Billing Information</h3>
	<form action="" method="post">
		<p><input type="checkbox" name="same_as_shipping" /> Same as Shipping</p>
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
	<a href=""><button>Pay</button></a>
</body>
</html>