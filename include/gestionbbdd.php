<?php
require_once "opositor.php";

class GestionBBDD {

    public static function realizarConexion() {   
        try {
            $conexion = new PDO("mysql:host=localhost; dbname=oposiciones","root", "");
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");
            return $conexion;
        }
        catch(Exception $e)
        {
          echo "Error al realizar la conexión: " . $e->getMessage();
        }    	
    }

    public static function opositores() {
        try {
            $sql="select * from opositores;";
            $conexion=self::realizarConexion();
		    $resultado=$conexion->prepare($sql);
            $resultado->execute();
	        $arra_opositores=array();
            while ($fila=$resultado->fetch()){
                $arra_opositores[]= new Opositor($fila);
            }
            $resultado->closeCursor();
		    $conexion=null;
		    return ($arra_opositores);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function opositor($dni) {
        try {
            $sql="select * from opositores where dniopo = :n_dni";
            $conexion=self::realizarConexion();
            $resultado=$conexion->prepare($sql);
            $resultado->bindParam(':n_dni', $dni);
            $resultado->execute();
            $fila = $resultado->fetch();
            $opositor = new Opositor($fila);
            $resultado->closeCursor();
		    $conexion=null;
            return ($opositor);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

?>