<?php require 'app/views/partials/admin/head.php';?>
<div class="col-sm-4">
	<div class="form-group">
		<form method="post" action="/admin/products">
			<input type="hidden" name="_method" value="PUT">
			<input type="text" name="name" placeholder="Name" class="form-control" required>
			<br>
			<br>
			<input type="text" name="description" placeholder="Description" class="form-control" required>
			<br>
			<br>
			<input type="number" name="qtystock" placeholder="Quantity" class="form-control" required>
			<br>
			<br>
			<input type="number" name="priceperitem" placeholder="Price per item" step="0.01" class="form-control" required>
			<br>
			<br>
			<button type="submit" class="btn btn-default"> Submit</button>

		</form>
	</div>
</div>
<?php require 'app/views/partials/admin/footer.php';?>
