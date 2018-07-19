<?php foreach($productsqtyform as $prod) : ?>
<form method="POST" action="/productsaddqty">
	
<input type="number" name="qtystock" placeholder="Quantity">

<input type="submit" name="submit">

<input type="hidden" name="id" value="<?= $prod->prodid; ?>">

</form>

<?php endforeach; ?>