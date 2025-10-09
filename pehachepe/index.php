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
    body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
    h1 { color: darkblue; }
    .hora { font-size: 40px; color: #333; }
  </style>
</head>
<body>
  <h1>Hora actual</h1>
  <div class="hora"><?php echo $hora; ?></div>
</body>
</html>