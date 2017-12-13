<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Admin</a>
<?php
    //nav bij niet ingelogd
    if (!isset($_SESSION['user']))
    {
?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
        <?php 
        }else{
        //nav bij ingelogd
        ?> 
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link disabled" href="logout.php">Logout</a>
      </li>
        <?php }?>
    </ul>
  </div>
</nav>