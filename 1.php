<?php

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$acepto = $_POST['acepto'];

// todo lo que queremos recibir en el mail
$formcontent="
    Nombre: $name \n
    Correo electronico: $email \n
    Acepta terminos y condiciones: $acepto
";

$recipient = "salguillermo69@gmail.com";

$subject = "Correo desde la Pagina Web Decoideas";

$header = "From: $email \r\n";
$header .= "Content-Type: text/plain; charset=UTF-8";
mail($recipient, $subject, $formcontent, $header) or die("Error!");
header("Location: cartel.html");

?>