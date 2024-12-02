<?php
require_once("../conexion.php");
require_once("../libro.php");

$resultado = libro::mostrarLibro($conexion);
if (mysqli_num_rows($resultado)> 0){
    $libro =[];
    while ($fila = mysqli_fetch_assoc($resultado)){
        $libro[]= $fila;
    }
    echo json_encode($libro);
}else {
    echo json_encode(["message"=> "no se encontraron libros"]);
}