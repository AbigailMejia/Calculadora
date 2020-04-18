<?php
$valor1=$_POST['n1'];
$valor2=$_POST['n2'];
$comparar=$_POST['operacion'];
   
if ($comparar==1)
{
 $total=$valor1+$valor2;
}

else if ($comparar==2)
{
 $total=$valor1-$valor2;

}

else if ($comparar==3)
{
 $total=$valor1*$valor2;

}

else if ($comparar==4)
{
 $total=$valor1/$valor2;

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text.css" href="estilos.css"/>
</head>

<body>
<header>
<div align="center" id="Resultado">
<h1>resultado</h1>
</div>
</header>

<section>
<div align="center" id="mostrar">
<p><?php echo $total; ?> </p>
</div>
</section>
</body>
</html>