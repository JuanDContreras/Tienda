<?php

include("BaseDatos.php");

if(isset($_POST["botonEditar"])){

    


    $id=$_GET["id"];
    
    $descripcion=$_POST["descripcionEditar"];
    $precio=$_POST["precioEditar"];
    

    //echo $nombre.$apellido.$descripcion.$genero;


    $transaccion=new BaseDatos();



    $consultaSQL="UPDATE productos SET descripcion='$descripcion',precio='$precio' WHERE idProducto='$id'";


    $transaccion->editarDatos($consultaSQL);


    header("location:editar.php");
    

}


?>