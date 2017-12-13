<?php 
include ("include/header.php");

if (isset($_SESSION['user']))
    {
    header("Location: http:://localhost:81/vragenlijst/index.php");
    }
//Account activeren
if ( isset($_GET['active'])|| isset($_GET['submit']))
    {
    $tk = isset($_POST['submit']) ? $_POST['active'] : $_GET['active'];
    $id = isset($_POST['submit']) ? $_POST['id'] : $_GET['id'];
    
    $user->activate($id, $tk);   
    }
?>
      
    <div class="container-fluid" style="margin-top: 25px;">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header text-sm-center">
                Account activeren
                </div>
                <div class="card-body">
                <?php
                  if ( isset($_SESSION['error']))
                    {
                      echo '<div class="alert alert-danger" role="alert">';
                      echo $_SESSION['error'];
                      echo '</div>';
                      unset ($_SESSION['error']);
                    }
                ?>
                <form method="post">
                  <div class="form-group">
                    <label for="active">Verificatie Code</label>
                    <input type="text" class="form-control" id="active" name="active" placeholder="Vul de code in">
                  </div>
                    <input type="hidden" name="id"  value="<?php echo $_SESSION['id'];?>">
                  <input type="submit" class="btn btn-primary" value="Activate" name="submit">
                </form>
                  </div>
                 <div class="card-footer text-muted text-sm-center">
                    Account activeren met de code.
                  </div>     
                </div>
          </div>
        
        </div>
      
      </div>

<?php include ("include/footer.php");?>