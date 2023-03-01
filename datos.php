<?php
require_once "include/gestionbbdd.php";

$opositores = GestionBBDD::opositores();

foreach ($opositores as $opositor) {
    echo "<tr class='cuerpo'>
    <td>". $opositor->getCodigo() ."</td>
    <td>". $opositor->getNombre() ."</td>
    <td>". $opositor->getCiudad() ."</td>
    <td>". $opositor->getCodigoPostal() ."</td>
    <td>". $opositor->getTelefono() ."</td>
    <td>". $opositor->getTribunal() ."</td>
    </tr>";
}

?>