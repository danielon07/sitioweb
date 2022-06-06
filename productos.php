<?php 
include("template/cabecera.php");
?>

<?php 
include("admin/config/bd.php");


$sentenciaSQL= $conexion->prepare("SELECT * FROM usuario");
$sentenciaSQL->execute();
$listaUsuarios=$sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);

?>


<div class="jumbotron text-center">
    <h1 class="display-3">Instalaciones</h1>
    <hr class="my-2">
    </br>


</div>


<!-- PISTA 1 -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/pista2.jpeg" alt="">
<div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Pista 1</h4>
        

</div>
</div>
</div>

<!-- PISTA 2 Y 3 -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/pistas.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Pistas 2 y 3</h4>
        
</div>
</div>
</div>

<!-- PISTA 4 -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/pista3.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Pista 4</h4>
        
</div>
</div>
</div>

<!-- PISTA 5 -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/pista4.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Pista 5</h4>
       

</div>

</div>
</br>
</br>
</div>




<!-- CAFETERIA -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/cafeteria.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Cafetería</h4>
        
</div>
</div>  
</div>

<!-- VESTUARIOS -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/vestuarios.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Vestuarios</h4>
        
</div>
</div>
</div>

<!-- RECEPCION -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/recepcion.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Recepción</h4>
      
</div>
</div>
</div>

<!-- BAR -->

<div class="col-md-3">


<div class="card">
    <img class="card-img-top" src="img/bar.jpg" alt="">
    <div class="card-body" align="center" style="background-color:#CFCFCF;">
        <h4 class="card-title">Bar</h4>
       
</div>
</div>
</div>






<?php 
include("template/pie.php");
?>