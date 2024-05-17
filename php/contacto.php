<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $email = $_POST["email"];
  $telefono = $_POST["telefono"]; // Added missing telefono variable
  $mensaje = $_POST["mensaje"];
  
  $para = "Mobile.Master@gmail.com";
  $asunto = "Mensaje de contacto desde MobileMarket";
  
  $contenido = "Nombre: $nombre\n";
  $contenido .= "Apellido: $apellido\n";
  $contenido .= "Email: $email\n";
  $contenido .= "Teléfono: $telefono\n\n"; // Added telefono to the email content
  $contenido .= "Mensaje:\n$mensaje";
  
  $headers = "From: $nombre <$email>";
  
  if (mail($para, $asunto, $contenido, $headers)) {
    echo "Tu mensaje ha sido enviado correctamente.";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
} else {
  echo "Acceso denegado.";
}
?>

