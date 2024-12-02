<?php
require_once("../conexion.php");
require_once("../libro.php");

$data = json_decode(file_get_contents("php:input"));
if (!empty($data->titulo) && !empty($data->autor)&& !empty($data->$añoPublicacion)){
    $libro = new libro ( $conexion,$data->titulo,$data->autor,$data->$añoPublicacion);
    if ($libro->registrar()){
        echo json_encode(["message"=>"libro registrado correctamente."]);
    }else {
        echo json_encode(["message"=>"libro no registrado"]);
    }
}else {
    echo json_encode(["message"=>"datos incomp"]);
}