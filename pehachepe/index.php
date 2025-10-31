<?php
date_default_timezone_set('America/Mazatlan');
$hora = date("h:i:s a");
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Hora actual</title>
  <style>
    body { font-family: Arial, sans-serif; margin-top: 50px; }
    h1 {   text-align: center;              }
    .hora { font-size: 40px; color: #333;  text-align: center; }
  </style>
</head>
<body>
  <h1>Hora actual</h1>
  <div class="hora"><?php echo $hora; ?></div>
  <h1>Pasta Carbonara</h1>
  <h3> <b>Ingredientes:</b></h3>
  <table border =1>
   <tr>
    <td>3 </td>
        <td>Yemas de huevo</td>
   </tr>
   <tr>
     <td>1 </td>
      <td>Huevo</td>
   </tr>
    <tr>
         <td> 100g</td>
      <td>Panceta </td>
   </tr>
    <tr>
         <td> 50g</td>
      <td>Queso Pecorino</td>
   </tr>
    <tr>
         <td> </td>
      <td>Pimienta negra molida al gusto</td>
   </tr>
    <tr>
         <td> </td>
      <td>Sal</td>
   </tr>
    <tr>
         <td> </td>
      <td>Agua</td>
   </tr>
    <tr>
         <td>320g </td>
      <td>Espaguetis</td>
   </tr>  
 </table>
  <h3> <b>Procedimiento:</b></h3>
<ul>
    
    <li>Utiliza una buena panceta fresca, retirando la piel. Córtala en trocitos de pequeño tamaño y fríe esos trocitos hasta que comiencen a dorarse.</li>
    <li>Por otro lado bate las 3 yemas de huevo con el huevo y el queso pecorino recién rallado hasta hacer una mezcla algo espesa. Dale unos toques de pimienta negra a esa mezcla. Entre tanto, pon la pasta a cocer en agua abundante con sal, y sácala cuando falten un par de minutos para que esté al dente.</li>
    <li>En la sartén donde habíamos reservado la panceta o el guanciale salteado, agregaremos la pasta escurrida a la que añadimos la mezcla de huevos, queso y pimienta, mezclando bien. Agregamos también un cucharón del agua de cocción de la pasta.</li>
    <li>Removemos mientras se van integrando los distintos ingredientes y se va haciendo una especie de salsa al cuajar ligeramente el huevo con el caldo caliente de la cocción. Servimos espolvoreando de un poco más de pecorino rallado y dando un par de vueltas más de pimienta molida.</li>

</ul>
<a href="trabajo3.php">.</a>
</body>
</html>