<link rel="stylesheet" href="estilos.css">
<h1>Mostrando la captura de nombre y correo</h1>
<?php
 echo $_GET["xnombre"];
?>
<form action="formulario.php" method="post">
<input type="submit" value="Volver">
</form>