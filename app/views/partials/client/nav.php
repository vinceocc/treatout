  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="/client/index" class="navbar-brand">Shopping La Salle</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/login">Cart</a></li>
      <li><a href="/client/profile"><?= $_SESSION['firstname']; ?>'s Profile</a></li>
      <li><a href="/client/logout">Logout</a></li>
    </ul>
  </div>
</nav>

