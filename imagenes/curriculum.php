<?php

$nombre=$_GET['nombre'];
$asunto=$_GET['apellido'];
$mensaje=$_GET['email'];
$codigo=$_GET['codigo'];
$correo=$_GET['curp'];
$hm=$_GET['hm'];
$hm=$_GET['hm'];

echo "<h2>Informacion recibida desde php</h2>";
echo "El nombre recibido es:". $nombre. "<br/>";
echo "El apellido recibido es:". $apellido. "<br/>";
echo "El email recibido es:". $email. "<br/>";
echo "La contraseña es:". $codigo.  "<br/>";
echo "El curp es:". $curp.  "<br/>";
echo "El sexo es:". $hm.  "<br/>";
echo "Cuellar Gomez Nancy Gabriela";
?>
