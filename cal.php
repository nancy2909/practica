<head> 
<title> Calculadora </title>
</head>
<body bgcolor="#F5A9A9;" text ="#000000">
<center>
<h1> Operaciones básicas.  </h1>
<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$suma= $n1 + $n2;
$resta= $n1 - $n2;
$mul= $n1 * $n2;
$div= $n1 / $n2;
$deci = ((int) ($n1 / $n2));
$residuo= $n1%$n2;
echo "Los números son : $n1 y $n2.";
echo "<br>";
echo "Suma:$suma";
echo "<br>";
echo "Resta:$resta";
echo "<br>";
echo "Multiplicación:$mul";
echo "<br>";
echo "División:$div";
echo "<br>";
echo "División sin decimal:$deci";
echo "<br>";
echo "Residuo de la división :$residuo";
?>
</center>
</body>
