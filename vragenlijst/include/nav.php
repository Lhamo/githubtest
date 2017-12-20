<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand" href="#">
    <img src="http://www.commercium.nl/wp-content/uploads/2015/09/logocommercium.png"  alt="Commercium">
  </a>
  
<?php
    //nav bij niet ingelogd
    if (!isset($_SESSION['user']))
    {
?>
 
<a class="navbar-brand" href="login_form.php">Admin</a>
         <?php 
        }else{
        //nav bij ingelogd
        ?>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
      <div class="collapse navbar-collapse" id="navbarNav">
      
    <ul class="navbar-nav">
     <!-- <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>-->
       
      <li class="nav-item">
        <a class="nav-link" href="../view/register_form.php">Register</a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="../controller/logout.php">Logout</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="intake.php">Intake</a>
      </li>
        <?php }?>
    </ul>
  </div>
</nav>