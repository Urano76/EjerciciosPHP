 <link rel="stylesheet" href="estilos.css">
 <h1>La resultado de la operación aritmetica</h1>
 <?php 
  $v1 =  $_GET["x1"];
  $v2 = $_GET["y1"];
  $suma = $v1 + $v2;
  echo "la suma es : " .$suma; 
  ?>
<form action="formulario.php" method="post">
<input type="submit" value="Volver">
</form>