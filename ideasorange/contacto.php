<?php
$nombre = $_POST['rf_name'];
$email = $_POST['rf_email'];
$compania = $_POST['rf_company'];
$telefono = $_POST['rf_phone'];
$mensaje = $_POST['rf_mensaje'];
$para = 'giudici.francisco@gmail.com';
$titulo = 'CONTACTO DESDE LA WEB';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Compañia: $compania\n Teléfono: $telefono\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {	
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = '//localhost/ideasorange';
</script>";
} else {
echo 'Falló el envio';
}
}
?>
