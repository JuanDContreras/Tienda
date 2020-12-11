<?php

include("BaseDatos.php");

if(isset($_POST["botonEnvio"])){

    $nombre=$_POST["nombre"];
    $precio=$_POST["precio"];
    $descripcion=$_POST["descripcion"];
    $foto=$_POST["foto"];
    $genero=$_POST["genero"];



    $transaccion=new BaseDatos();


    //$consultaSQL="INSERT INTO `productos`(nombre, precio, descripcion, foto, genero) VALUES ('$nombre','$precio','$descripcion','$foto','$genero')";

    $consultaSQL="INSERT INTO `productos`(nombre,precio,descripcion, imagen, genero) VALUES ('$nombre','$precio','$descripcion','$foto','$genero')";

    //$transaccion->conectarBD($consultaSQL);
    $transaccion->agregarDatos($consultaSQL);


    //echo $consultaSQL;

    header("location:registro.php");
    

}




?>