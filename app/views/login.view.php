<?php require('app/views/partials/main/head.php'); ?>
<div class="row">
  <div class="col-md-4 col-md-offset-4 ">
    <div class="form-group">
  	    <form class="form-signin" method="post" action="/client/login">      
  	      <input type="text" class="form-control" name="email" placeholder="Email Address" required autofocus="" />
          <br>
  	      <input type="password" class="form-control" name="password" placeholder="Password" required/>
          <br>  
  	      <input type="submit" class="btn btn-lg btn-primary btn-block" type="submit"/>   
  	    </form>
        <br>

        <ul class="list-unstyled">
          <li>
            <a href="/admin-login">Admin Log-in</a>
          </li>
        </ul>
      </div>
  </div>
</div>
<?php require('app/views/partials/main/footer.php'); ?>
