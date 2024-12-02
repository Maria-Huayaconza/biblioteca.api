<?php
require_once("../conexion.php");
require_once("../libro.php");

$data = json_decode(file_get_contents("php:input"));
if (!empty($data->id)){
    if (libro::eliminarLibro($conexion,$data->id)){
        echo json_encode(["message"=>"libro eliminado correctamente."]);
    }else {
        echo json_encode(["message"=>"libro no elimando"]);
    }
}else {
    echo json_encode(["message"=>"datos incompletos"]);
}
