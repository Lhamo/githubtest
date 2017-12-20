<?php 
include ("../include/header.php");

//Kijk of een gebruiker ingelogd is

if(!isset($_SESSION['user'])){
    header("Location: http://localhost:81/vragenlijst/view/register_form.php");
}
?>    
    <div class="container-fluid" style="margin-top: 25px;">
      <div class="row">
        <div class="col-sm-4 offset-sm-4">
            <div class="card">
                <div class="card-header text-sm-center">
                    Homepage
                </div>
                <div class="card-body">
                <h2>Welcome <?php echo $_SESSION['user']->name?></h2>
                </div>
            </div>
          </div>
        </div>  
    </div>

<?php include ("../include/footer.php");?>