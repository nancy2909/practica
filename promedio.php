<head> 
<title> Resultado </title>
</head>
<body bgcolor="#9FF781;" text ="#000000">
<center>
<h1> Calcular promedios </h1>
<?php
$nombre=$_POST['nombre'];
$cal1=$_POST['cal1'];
$cal2=$_POST['cal2'];
$cal3=$_POST['cal3'];

$prom = ($cal1 + $cal2 + $cal3) /3;
echo "El nombre del alumno es: $nombre";
echo "<br>";
echo "<br>";
echo "Su promedio es: $prom";
echo "<br>";
echo "<br>";
if ( $prom > 80 ) {
    echo "Estas aprobado :)";
} elseif ( $prom < 80) {
    echo "Estas reprobado :(";
}
echo "<br>";
?>
</center>
</body>

