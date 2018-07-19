<?php require('app/views/partials/client/head.php'); ?>
<div class="row ">
	<h2> Categories </h2>
    <div class="col-sm-2">
    	<br>
    	<?php foreach($catlist as $category) : ?>
      	<ul class="list-unstyled">
      	<li><a href="/client/product-category?id=<?= $category->catid; ?>"><?= $category->name; ?></a></li>
      </ul>
      <?php endforeach; ?>
    </div>

  </div>
<?php require('app/views/partials/client/footer.php'); ?>
