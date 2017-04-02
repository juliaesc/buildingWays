<?php
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No hay argumentos.";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$to = 'info@buildingways.com.ar';
$email_subject = "Mensaje desde el formulario de contacto de la web.";
$email_body = "Ha recibido un mensaje desde el formulario de contacto de la web. Detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTeléfono: $phone\n\nMensaje: $message";
$headers = "From: no-reply@buildingways.com.ar\n";
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
