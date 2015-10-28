<?php $this->load->view('partials/admin_header') ?>
<div class="container">
	<div class="row">
		<form class="form-inline col-md-4" action="/admins/search_orders" method="post">
		  <div class="form-group">
		    <label class="sr-only" for="search">Search</label>
		    <div class="input-group">
		      <input type="text" name="search" class="form-control" id="search" placeholder="Find Order">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-primary">Search</button>
		</form>
	</div>
	<select name="filter">
		<option value="">Sort by...</option>
		<option value="">Lowest Number First</option>
		<option value="">Highest Number First</option>
		<option value="">A-Z</option>
		<option value="">Z-A</option>
	</select>
	<div id="products">
		<table id="productTable" class="table table-striped table-hover">
			<thead>
				<th class="text-center">Order ID</th>
				<th class="text-center">First Name</th>
				<th class="text-center">Last Name</th>
				<th class="text-center">Billing Address</th>
				<th class="text-center">Total</th>
				<th class="text-center">Status</th>
			</thead>
			<tbody>
				<tr>
				<td class="text-center">ID</td>
				<td class="text-center">First</td>
				<td class="text-center">Last</td>
				<td class="text-center">Billing</td>
				<td class="text-center">$99999999.00</td>
				<td class="text-center">
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
