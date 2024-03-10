<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

</head>
<body>
<?php

$p1 = $_REQUEST['p1'];
$c1 = $_REQUEST['c1'];
$pr1 = $_REQUEST['pr1'];
$p2 = $_REQUEST['p2'];
$c2 = $_REQUEST['c2'];
$pr2 = $_REQUEST['pr2'];
$p3 = $_REQUEST['p3'];
$c3 = $_REQUEST['c3'];
$pr3 = $_REQUEST['pr3'];
$fecha = $_REQUEST['fecha'];
$dinero = $_REQUEST['dn'];

$subtotal1 = $pr1*$c1;
$subtotal2 = $pr2*$c2;
$subtotal3 = $pr3*$c3;

$total = $subtotal1 + $subtotal2 + $subtotal3;
$vuelto = $dinero - $total;
$descuento = $total * (0.15);
$precioFinal = $total - $descuento;
$vueltoFinal = $dinero - $precioFinal;




if($total >= 10000) {
echo "Usted debe pagar $ $total al ser mayor de $10000 se le aplica un descuento del 10%";
echo "<br>";
echo "Su descuento es de $ $descuento";
echo "<br>";
echo "Le quedaría por pagar  $ $precioFinal";
echo "<br>";
echo "Su vuelto es $ $vueltoFinal ";
echo "<br>";
echo "!<b>Gracias vuelva pronto <b>!";
}

else {
    echo "Usted debe abonar $ $total";
    echo "<br>";
    echo "Usted pago con $ $dinero";
    echo "<br>";
    echo "Su vuelto es $ $vuelto";
    echo "<br>";
    echo "!<b>Gracias vuelva pronto <b>!";
}

?>

</br>

<img src = "https://scontent.faep9-1.fna.fbcdn.net/v/t1.6435-9/109201870_1617903941700982_6484385004796333591_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=9267fe&_nc_ohc=yLGmbmSWg7cAX-WEKej&_nc_ht=scontent.faep9-1.fna&oh=00_AfB3ArUn6RPO8XiJpSSj4LL08Jg1OcMwkZeT1As1hvm5DQ&oe=646BC492">
    
</body>
</html>