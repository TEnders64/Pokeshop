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
		<div class="btn-group col-md-2 pull-right" id="sort">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		   Sort By <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu">
		    <li><a href="#">Recent Orders</a></li>
		    <li><a href="#">Older Orders</a></li>
		    <li><a href="#">Last Name: A-Z</a></li>
		    <li><a href="#">Last Name: Z-A</a></li>
		  </ul>
		</div>
	</div>
	<div id="orders">
		<table id="ordersTable" class="table table-striped table-hover">
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
				<div class="btn-group" id="status">
				  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				   Status <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="#">Order in Process</a></li>
				    <li><a href="#">Order Shipped</a></li>
				    <li><a href="#">Cancelled</a></li>
				  </ul>
				</div>
				</td>
			</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
<script>
	$(document).ready(function(){

		$('#status').on('click', 'a', function(){
			$('#status>button').text($(this).text());
		})

		$('#sort').on('click', 'a', function(){
			$('#sort>button').text($(this).text());
		})

	})
</script>
</html>
