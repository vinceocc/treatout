<?php require 'app/views/partials/Admin/head.php';?>

 <h1> Order No. <?= $_GET['id']; ?> </h1>

<div class="table-responsive">
<table class="table">

	<thead>
		<tr>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</tr>
	</thead>
	<?php foreach($details as $detail) :?>
	<tbody>
	
		<tr>
			<td><?= $detail->name; ?></td>
			<td> <?= $detail->priceeach; ?></td>
			<td> <?= $detail->qtyordered; ?> </td>
			<td> <?=  $detail->priceeach * $detail->qtyordered;?></td>
		</tr>
	</tbody>
	<?php $total = $detail->totalamount; endforeach; ?>

</table> 
<br>
<br>

<div class="float-right" >
	<h3>Total amount: <?= $total ?></h3>
</div>


</div>
<br>
<br>
<?php require 'app/views/partials/Admin/footer.php';?>
