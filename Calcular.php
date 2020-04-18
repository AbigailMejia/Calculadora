<?php
$valor1=$_POST['n1'];
$valor2=$_POST['n2'];
$comparar=$_POST['operación'];
   
if ($comparar==1)
{
 $total=$valor1+$valor2;

echo "el resultado es: ".$total;
}

else if ($comparar==2)
{
 $total=$valor1-$valor2;

echo "el resultado es: ".$total;
}

else if ($comparar==3)
{
 $total=$valor1*$valor2;

echo "el resultado es: ".$total;
}

else if ($comparar==4)
{
 $total=$valor1/$valor2;

echo "el resultado es: ".$total;
}
?>
