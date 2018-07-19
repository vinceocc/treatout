
<?php foreach($productsedit as $product) : ?>

<form method="post" action="/admin/productsedit?id=<?= $_GET['id']?>">
	<input type="hidden" name="_method" value="PATCH">
	<input type="text" name="name" placeholder="Name" required value="<?= $product->name; ?>">
	<br>
	<br>
	<input type="text" name="description" placeholder="Description" required value="<?= $product->description;?>">
	<br>
	<br>
	<input type="number" name="priceperitem" placeholder="Price per item" step="0.01" required value="<?= $product->priceperitem;?>">
	<br>
	<br>

	<input type="submit" name="submit" value="submit">
</form>

<?php endforeach; ?>