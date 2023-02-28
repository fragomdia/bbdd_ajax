<?php

class Opositor {
    private $dni;
	private $nombre;
    private $ciudad;
	private $cp;
    private $tlfno;
	private $tribunal;

    function __Construct ($registro){
        $this->dni = $registro['DNIOPO'];
        $this->nombre = $registro['NOMOPO'];
        $this->ciudad = $registro['CIUOPO'];
        $this->cp = $registro['CPOPO'];
        $this->tlfno = $registro['TFALU'];
        $this->tribunal = $registro['TRIBUNALOPO'];
    }

    function getCodigo(){
        return $this->dni;
    }
    function getNombre(){
        return $this->nombre;
    }
    function getCiudad(){
        return $this->ciudad;
    }
    function getCodigoPostal(){
        return $this->cp;
    }
    function getTelefono(){
        return $this->tlfno;
    }
    function getTribunal(){
        return $this->tribunal;
    }
    
    function setCodigo($dni){
        $this->dni=$dni;
    }
    function  setNombre($nombre){
        $this->nombre=$nombre;
    }
    function setCiudad($ciudad){
        $this->ciudad=$ciudad;
    }
    function setCodigoPostal($cp){
        $this->cp=$cp;
    }
    function setTelefono($tlfno){
        $this->tlfno=$tlfno;
    }
    function setTribunal($tribunal){
        $this->tribunal=$tribunal;
    }
}

?>