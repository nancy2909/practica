<?php

$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$email=$_GET['email'];
$codigo=$_GET['codigo'];
$curp=$_GET['curp'];
$hm=$_GET['hm'];
$hm=$_GET['hm'];
$civil=$_GET ['civil'];

echo "<h2>Informacion recibida de curriculum vitae</h2>";
echo "El nombre recibido es:". $nombre. "<br/>";
echo "El apellido recibido es:". $apellido. "<br/>";
echo "El email recibido es:". $email. "<br/>";
echo "La contraseña es:". $codigo.  "<br/>";
echo "El curp es:". $curp.  "<br/>";
echo "El sexo es:". $hm.  "<br/>";
echo "El estado civil  es:". $civil. "<br/>";

echo "Cuellar Gomez Nancy Gabriela";
?>
