<?php
require_once("../conexion.php");
require_once("../libro.php");

$data = json_decode(file_get_contents("php:input"));
if (!empty($data->id)&&!empty($data->titulo) && !empty($data->autor)&& !empty($data->$añoPublicacion)){
    $libro = new libro ( $conexion,$data->titulo,$data->autor,$data->$añoPublicacion);
    if ($libro->actualizarLibro($data->id)){
        echo json_encode(["message"=>"libro actualizado correctamente."]);
    }else {
        echo json_encode(["message"=>"libro no actualizado"]);
    }
}else {
    echo json_encode(["message"=>"datos incompletos"]);
}