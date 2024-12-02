<?php
class libro {
    public $titulo,$autor,$añoPublicacion;
    public $conexion;

    public function __construct($conexion,$titulo,$autor,$añoPublicacion){
        $this->conexion = $conexion;
        $this->titulo= $titulo;
        $this->autor=$autor;
        $this->añoPublicacion= $añoPublicacion;
    }
    //registrar libro
    public  function registrar(){
        $sql = "INSERT INTO `libro`( `titulo`, `autor`, `añoPublicacion`) VALUES ('$this->titulo','$this->autor','$this->añoPublicacion')" ;
        return mysqli_query($this->conexion,$sql);
    }
    //mostrar libro
    public static function mostrarLibro($conexion){
        $sql = "SELECT * FROM `libro`";
        return mysqli_query($conexion,$sql);
    }

    //actualizar libro
    public function actualizarLibro($id){
         $sql = "UPDATE `libro` SET `titulo`='$this->titulo',`autor`='$this->autor',`añoPublicacion`=' $this->añoPublicacion' WHERE id = $id";
         return mysqli_query($this->conexion,$sql);
    }
    //eliminar libro
    public static function eliminarLibro($conexion,$id){
        $sql = "DELETE FROM `libro` WHERE id = $id ";
        return mysqli_query($conexion,$sql);
    }

}



