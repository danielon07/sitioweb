<?php 
include("template/cabecera.php");
?>




<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 

    <div class="page-header">
        <h1>Hola, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Bienvenid@ a Left Padel.</h1>
        
    </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
        <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
      
    </p>


<?php 
include("template/pie.php");
?>