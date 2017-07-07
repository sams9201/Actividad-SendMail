<?php
$destino = "software.realize.101@gmail.com";
$asunto = "Samuel de la Cruz Hernández";
$numero1 = $_POST["Num1"];
$numero2 = $_POST["Num2"];
$resultado = $numero1*$numero2;
$UrlR = "github.com/sams9201/Actividad-SendMail";
$UrlP = "razo.recio-center-education.com";

$contenido = "Primer numero: ".$numero1."\nSegundo numero: ".$numero2."\nOperacion: ".$numero1." X ".$numero2." = ".$resultado."\nRepositorio del codigo fuente: ".$UrlR."\nPagina web: ".$UrlP;

mail($destino, $asunto, $contenido);
echo '<script>window.location="enviado.html"</script>';
?>