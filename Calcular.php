<?php
$valor1=_POST['n1']
$valor2=_POST['n2']
$comparar=POST['operaci�n']

$total=$valor1+$valor2;

echo "el resultado es: ".$total;

if (comparar=="suma") 
{
 $total=$valor1+$valor2;

echo "el resultado es: ".$total;
}

else if (comparar=="resta") 
{
 $total=$valor1-$valor2;

echo "el resultado es: ".$total;
}

else if (comparar=="multiplicaci�n") 
{
 $total=$valor1*$valor2;

echo "el resultado es: ".$total;
}

else if (comparar=="DIVISI�N") 
{
 $total=$valor1/$valor2;

echo "el resultado es: ".$total;
}

?>