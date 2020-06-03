<head> 
<title> Salarios </title>
</head>
<body bgcolor="#F5A9BC;" text ="#000000">
<center>
<h1> Salario del trabajador sin impuestos y con impuestos  </h1>
<?php
$nombre=$_POST['nombre'];
$salario_trabajador=$_POST['salario_trabajador'];
$impuesto_trabajador=$_POST['impuesto_trabajador'];
$imp =$salario_trabajador - ($salario_trabajador*$impuesto_trabajador)/100;

echo "El salario del trabajador $nombre sin impuestos es de : $salario_trabajador  Pesos.";
echo "<br>";
echo "El impuesto es de : $impuesto_trabajador % Por ciento.";
echo "<br>";
echo "El salario del trabajador con impuestos es de : $imp Pesos.";

echo "<br>";
echo "<br>";

?>
</center>
</body>
