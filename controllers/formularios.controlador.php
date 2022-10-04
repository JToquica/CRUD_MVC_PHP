<?php 

class ControladorFormularios {

    /* Registro */
    static public function ctrRegistro() {

        if(isset($_POST["nombre"])) {
            $tabla = "usuarios";
            $datos = array("nombre" => $_POST["nombre"],
                            "correo" => $_POST["email"],
                            "clave" => $_POST["pswd"]);

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;
        }
    }

}

?>