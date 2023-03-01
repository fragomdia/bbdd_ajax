<?php
require_once "include/gestionbbdd.php";

$dni = $_REQUEST['palabra'];

error_reporting(0);

$opo = GestionBBDD::opositor($dni);

if ($dni == null) {
    echo "<table><tr><th>DNI</th><td>Sin resultado</td></tr>
    <tr><th>Nombre</th><td>Sin resultado</td></tr>
    <tr><th>Teléfono</th><td>Sin resultado</td></tr></table>";
} else {
    echo "<table><tr><th>DNI</th><td>". $opo->getCodigo() ."</td></tr>
    <tr><th>Nombre</th><td>". $opo->getNombre() ."</td></tr>
    <tr><th>Teléfono</th><td>". $opo->getTelefono() ."</td></tr></table>";
}

?>