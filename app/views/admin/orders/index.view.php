<?php require 'app/views/partials/Admin/head.php';?>

 <h1> Orders </h1>

<div class="table-responsive">
<table class="table">

	<thead>
		<tr>
			<th>Order no.</th>
			<th>Order date</th>
			<th>Total Amount </th>
			<th>Customer</th>
			<th>Status</th>
		</tr>
	</thead>
	<?php foreach($order as $orders) :?>
	<tbody>
	
		<tr>
			<td> <li class="list-unstyled text-primary"><a href="/admin-orders/order-details?id=<?= $orders->orderproductsid; ?>"><?= $orders->ordersid;?></a></li></td>
			<td> <?= date('F d, Y', strtotime($orders->ordersdate)); ?></td>
			<td> <?= $orders->totalamount;?> </td>
			<td> <?= $orders->firstname.' '.$orders->lastname;?></td>
			<td><?= $orders->status; ?></td>
		</tr>
	
	</tbody>
	<?php endforeach; ?>
</table> 
</div>
<br>
<br>
<?php require 'app/views/partials/Admin/footer.php';?>
