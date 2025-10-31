<?php
$l = rand(0, 100);

$b = rand(0, 100);

$h = rand(0, 100);

$r = rand(0, 100);

$D = rand(51, 100);

$d = rand(0, 50);

//areas
//cuadrado
$A1 = $l**2;
//rectangulo
$A2 = $b * $h;
//triangulo
$A3 = ($b * $h)/2;
//circulo
$A4 =  pi()*($r**2);
//rombo
$A5 = ($D*$d)/2;

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Areas</title>
  <style>
    body { font-family: Arial, sans-serif; margin-top: 50px; }
    h1 {   text-align: center;   }
  </style>
</head>
<body>
   <h1>Area de formas geometricas</h1>
   <?php
echo "El valor de los lados es:" . $l . "<br>";

echo "El valor de la base es:" . $b . "<br>";

echo "El valor de la altura es:" . $h . "<br>";

echo "El valor del radio es:" . $r . "<br>";

echo "El valor del diametro mayor es:" . $D . "<br>";

echo "El valor del diametro menor es:" . $d . "<br>";
echo "<br>"; 

echo "El area del cuadrado es:" . $A1 ."<br>";

echo "El area del rectangulo es:" . $A2 ."<br>";

echo "El area del triangulo es:" . $A3 ."<br>";

echo "El area del circulo es:" . $A4 ."<br>";

echo "El area del rombo es:" . $A5 ."<br>";
?>
<a href="index.php">.</a>
</body>
</html>
