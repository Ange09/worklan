<?php
 $para="09geran@gmail.com";
 $nombre=$_post["nombre"];
 $correo=$_["correo"];
 $mensaje=$_POST["mensaje"];
 $contenido="\nnombre: ".$nombre."\ncorreo: ".$correo."\nmensaje: ".$mensaje;


$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();


mail($para, $contenido, $headers);

?>



