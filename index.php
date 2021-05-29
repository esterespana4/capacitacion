<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 

$fecha_min="2021-05-29";
$fecha_max="2021-08-31";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Rango de fechas</title>

        <title>Rangos de horas  </title>

        <center><h2>Fecha Limitada  por rangos de fechas</h2></center>
    </head>
    <body>
        <center>
            <img src="imagen/firma.jpg" width="184" height="157" alt="firma"/>
            <input id="fecha" name="fecha" type="date" size="70"  min="<?php echo $fecha_min;?>" max="<?php echo $fecha_max;?>"  />
        </center>
    </body>
        
</html>