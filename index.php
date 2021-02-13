<html>
<head></head>
<body>
   <form method="post" action=""><br>
   ingrese la longitud del lado:<br>
        <input type="text" name="lado1"><br>
        <input type="text" name="lado2"><br>
        <input type="submit" value="calcular"><br>
</body>


<?php
 
 $lado1 = $_POST['lado1'];
 
 $lado2 = $_POST['lado2'];

$Hipo= null
 
$Hipo = sqrt(($lado1*$lado1) + ($lado2*$lado2));
 
echo 'El valor de la hipotenusa es igual a: ' . $Hipo, '<br />';
 
?>