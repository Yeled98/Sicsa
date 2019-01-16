<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$plaga = $_POST['plaga'];
if ($plaga = 1) {
  $plaga = "Cucaracha Americana";
}
elseif ($plaga = 2) {
  $plaga = "Cucaracha Alemana";
}
elseif ($plaga = 3) {
  $plaga = "Pescadito";
}
elseif ($plaga = 4) {
  $plaga = "Hormiga Casera";
}
elseif ($plaga = 5) {
  $plaga = "Arañas";
}
elseif ($plaga = 6) {
  $plaga = "Cienpies";
}
elseif ($plaga = 7) {
  $plaga = "Tijerillas";
}
elseif ($plaga = 8) {
  $plaga = "Milpies";
}
elseif ($plaga = 9) {
  $plaga = "Ratas";
}
elseif ($plaga = 10) {
  $plaga = "Ratones";
}
elseif ($plaga = 11) {
  $plaga = "Otros";
}
$mensaje = $_POST['mensaje'];
$destinatario = "sicsamanejointegradodeplagas@gmail.com";
$asunto = "Contacto desde la web";
$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Correo: $email \n";
$carta .= "Plaga: $plaga \n";
$carta .= "Mensaje: $mensaje";
mail($destinatario, $asunto, $carta);
header('Location:contacto.php');
?>
