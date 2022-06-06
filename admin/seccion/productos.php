<?php
include("../template/cabecera.php");
?>

<?php

$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtEmail=(isset($_POST['txtEmail']))?$_POST['txtEmail']:"";
$txtContra=(isset($_POST['txtContra']))?$_POST['txtContra']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("../config/bd.php");

switch($accion){

    case "Agregar";

      $sentenciaSQL= $conexion->prepare("INSERT INTO usuario (nombre, email, contraseña) VALUES (:nombre, :email, :contrasenia);");
      $sentenciaSQL->bindParam(':nombre', $txtNombre);
      $sentenciaSQL->bindParam(':email', $txtEmail);
      $sentenciaSQL->bindParam(':contrasenia', $txtContra);
      $sentenciaSQL->execute();

      header("Location:productos.php");

   
      break;
    
      case "Modificar";

      $sentenciaSQL= $conexion->prepare("UPDATE usuario SET nombre=:nombre , email=:email WHERE id=:id");
      $sentenciaSQL->bindParam(':nombre', $txtNombre);
      $sentenciaSQL->bindParam(':email', $txtEmail);
      $sentenciaSQL->bindParam(':id', $txtID);
      $sentenciaSQL->execute();

      header("Location:productos.php");

      break;
    
      case "Cancelar";

        header("Location:productos.php");
      
      break;

      case "Seleccionar";

      $sentenciaSQL= $conexion->prepare("SELECT * FROM usuario WHERE id=:id");
      $sentenciaSQL->bindParam(':id', $txtID);
      $sentenciaSQL->execute();
      $usuario=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

      $txtNombre=$usuario['nombre'];
      $txtEmail=$usuario['email'];
      $txtContra=$usuario['contraseña'];


      
      break;

      case "Borrar";
      $sentenciaSQL= $conexion->prepare("DELETE FROM usuario WHERE id=:id");
      $sentenciaSQL->bindParam(':id', $txtID);
      $sentenciaSQL->execute();

      header("Location:productos.php");
     
      break;
}


$sentenciaSQL= $conexion->prepare("SELECT * FROM usuario");
$sentenciaSQL->execute();
$listaUsuarios=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);



?>

<div class="col-md-4">

<div class="card">
    <div class="card-header">
        Datos de usuarios
    </div>

    <div class="card-body">
    <form method="POST" enctype="multipart/form-data" >

<div class = "form-group">
<label for="txtID">ID:</label>
<input type="text" required readonly class="form-control" value="<?php echo $txtID; ?>" name="txtID" id="txtID" placeholder="ID">
</div>

<div class = "form-group">
<label for="txtNombre">Nombre:</label>
<input type="text" required class="form-control" value="<?php echo $txtNombre; ?>"name="txtNombre" id="txtNombre" placeholder="Nombre del usuario">
</div>

<div class = "form-group">
<label for="txtEmail">Email:</label>
<input type="email" required class="form-control" value="<?php echo $txtEmail; ?>"name="txtEmail" id="txtEmail" placeholder="Email del usuario">
</div>

<div class = "form-group">
<label for="txtEmail">Contraseña:</label>
<input type="text" required class="form-control" value="<?php echo $txtContra; ?>" name="txtContra" id="txtContra" placeholder="Contraseña del usuario">
</div>



<div class="btn-group" role="group" aria-label="">
    <button type="submit" name="accion" <?php echo ($accion=="Seleccionar")?"disabled":"";  ?> value="Agregar" class="btn btn-success">Agregar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";  ?> value="Modificar" class="btn btn-warning">Modificar</button>
    <button type="submit" name="accion" <?php echo ($accion!="Seleccionar")?"disabled":"";  ?> value="Cancelar" class="btn btn-info">Cancelar</button>
</div>

</form>
    
    </div>
  
</div>

    
    
    
</div>

<div class="col-md-8">
  
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Contraseña</th>
         
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($listaUsuarios as $usuario) { ?>
        <tr>
            <td><?php echo $usuario['id']; ?></td>
            <td><?php echo $usuario['nombre']; ?></td>
            <td><?php echo $usuario['email']; ?></td>
            <td><?php echo $usuario['contraseña']; ?></td>
            
            <td>
                
           
          <form method="post">

            <input type="hidden" name="txtID" id="txtID" value="<?php echo $usuario['id']; ?>"/>

            <input type="submit" name="accion" value="Seleccionar" class="btn btn-primary"/>

            <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
          </form>
        
        </td>
        </tr>
       <?php } ?>
    </tbody>
</table>

</div>
<?php
include("../template/pie.php");
?>