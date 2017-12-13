<?php 
include ("include/header.php");

if (isset($_SESSION['user']))
    {
    header("Location: http://localhost:81/vragenlijst/index.php");
    }
//authenticatie functie van de class User uitvoeren bij het submitten. Controleren van inloggegevens
if (isset($_POST['submit']))
    {
    $user->auth($_POST['email'], $_POST['password']);
    }
?>
 
    <div class="container-fluid" style="margin-top: 25px;">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header text-sm-center">
                Inloggen
                </div>
                <div class="card-body">
                <?php
                if (isset($_SESSION['error']))
                    {
                    echo '<div class="alert alert-danger" role="alert">';
                    echo $_SESSION['error'];
                    echo '</div>';
                    unset ($_SESSION['error']);
                    }
                ?>  
                <form method="post">
                  <div class="form-group">
                    <label for="email">E-mail adres</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                  </div>
                  <div class="form-group">
                    <label for="password">Wachtwoord</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  </div>
                    <input type="submit" class="btn btn-primary" value="Login" name="submit">
                </form>
                </div>
            </div>
          </div>
        
        </div>
      
      </div>

<?php include ("include/footer.php");?>