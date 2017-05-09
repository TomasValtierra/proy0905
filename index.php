<?php
include ('lib/Producto.php');
include ('lib/ConsultaProducto.php')

$oProducto1=new Producto();
$oProducto2=new Producto();
$oProducto3 =new Producto();

$oProducto1->nombre="Nuevo Producto";
$oProducto1->codigo="001";

$oProducto2=new Producto("Nuevo Producto 002" ,1000 , "002");
$oProducto2=new Producto("Nuevo Producto 002" ,2000 , "003");

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $aProducto
        
        foreach ($aProducto as $oPro)
        echo $oPro->codigo." ".$oPro->nombre."/".$oPro->precio."/usd".$oPro->totalUSD();
        
        ?>
    </body>
</html>
