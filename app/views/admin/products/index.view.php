<?php require 'app/views/partials/admin/head.php';?>
<div class="col-md-12"> 
	<h1> Products 
	 	<button type="submit" class="btn btn-default"> 
	 		<li class="list-unstyled "> <a href="/admin/productsform" > New product</a> </li>
	 	</button> 
	</h1>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th>Quantity in stock</th>
					<th>Price per item</th>
					<th> Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($products as $product) : ?>
					<tr>
						<td> <li class="list-unstyled text-primary"> <a href="/admin/products/view?id=<?= $product->prodid; ?>"><?= $product->name; ?></td>
						<td> <?= $product->description; ?></td>
						<td> <?= $product->qtystock; ?></td>
						<td> <?= $product->priceperitem; ?></td>
						<td>
							<ul>	
								<li class="list-unstyled"> 
									<a onClick="javascript: return confirm('Please confirm deletion');"> 	
										<form action="/admin/products/delete?id=<?= $product->prodid;?>" method="post">
											<input type="hidden" name="_method" value="DELETE">
											<button type="submit" class="btn btn-xs btn-danger">Delete</button>
										</form>
									</a>
								</li>
							</ul>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table> 
	</div>
</div>
<br>
<br>
<?php require 'app/views/partials/admin/footer.php';?>
