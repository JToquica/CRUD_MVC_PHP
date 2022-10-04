<?php 
require_once "conexion.php";

class ModeloFormularios {
    /* Registro */
    static public function mdlRegistro($tabla, $datos) {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,correo,clave) VALUES (:nombre, :correo, :clave)");
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":clave", $datos["clave"], PDO::PARAM_STR);
        
        if ($stmt->execute()) { 
            return true;
        } else {
            print_r(Conexion::conectar()->errorInfo());
        };

        $stmt->close();
        $stmt = null;
    }
}


?>