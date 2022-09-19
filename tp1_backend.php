<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
  <meta charset="utf-8">
 </head>
 <body>  
  <h1>Tp N°1</h1>
  <?php
  echo "Hola mundo";
  ?>
  <hr>
  <?php
  $mensaje = "Hola mundo";
  echo $mensaje;
  ?>
  <hr>
  <?php
  $a="10";
  $b="100";
  echo $a+$b; 
  echo "<br>";
  echo $a-$b;
  echo "<br>";
  echo $a*$b;
  echo "<br>";
  echo $a/$b;
  echo "<br>";
  echo $a%$b;
  ?>
  <hr>
  <?php
  $celsius = "20";
  $fahrenheit = $celsius*9/5+32;
  echo $fahrenheit;
  ?>
  <hr>
  <?php
  $base_rect = "18";
  $altura_rect = "12";
  $perimetro_rect = $base_rect*2+$altura_rect*2;
  $area_rect = $base_rect*$altura_rect;
  echo $perimetro_rect;
  echo"<br>";
  echo $area_rect;
  ?>
  <hr>
  <?php
  $radio="30";
  $pi="3,1416";
  $perimetro_circulo= 2*$pi*$radio;
  $area_circulo=$pi*($radio*$radio);
  echo $perimetro_circulo;
  echo "<br>";
  echo $area_circulo;
  ?>
</body>
</html>