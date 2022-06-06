<?php 
include("template/cabecera.php");
?>




<legend>Enviar Correo</legend>
<br>
<br>
    
<form action="correo.php" name="enviar" method="post">
<label>Correo: </label>
<input type="text" name="correo">
</br>
<label>Asunto: </label>
<input type="text" name="asunto">
</br>
<label>Mensaje: </label>
<textarea name="mensaje"></textarea>
<button>enviar</button>


</form>





<?php 
include("template/pie.php");
?>