<?php 
include ("../include/header.php");
?>


    <div class="container-fluid" style="margin-top: 25px;">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header text-sm-center">
                Registreer Hier
                </div>
                <div class="card-body">
                <?php
                //In dit deel van de div komt de foutmelding tekst te staan
                if( isset($_SESSION['error']))
                {
                  echo '<div class="alert alert-danger" role="alert">';
                  echo $_SESSION['error'];
                  echo '</div>';
                  unset($_SESSION['error']);
                }
                ?>
                <form method="post">
                    <div class="form-group">
                        <label for="name">Naam</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="<?php echo @$_POST['name']?>"
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail adres</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="<?php echo @$_POST['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="password">Wachtwoord</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo @$_POST['password']?>">
                    </div>
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                </form>
                </div>
            </div>
          </div> 
        </div>
      </div>

<?php include ("../include/footer.php");?>