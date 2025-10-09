<?php
// Función para limpiar entrada básica
function limpia($s){
    return trim(strip_tags($s));
}

$respuesta = isset($_POST['respuesta']) ? limpia($_POST['respuesta']) : '';

if(empty($respuesta)){
    die('Por favor escribe algo antes de enviar.');
}

// Dirección de destino
$to = 'yonacicuandonaci@gmail.com';
$subject = 'Nueva respuesta de la encuesta';
$message = "Respuesta recibida:\n$respuesta";

// Cabeceras básicas
$headers = "From: no-reply@tudominio.com\r\n" .
           "Reply-To: no-reply@tudominio.com\r\n";

// Intentar enviar correo
if(mail($to, $subject, $message, $headers)){
    echo "Gracias, tu respuesta fue enviada.";
} else {
    echo "Ocurrió un error al enviar la respuesta. Intenta más tarde.";
}
?>
