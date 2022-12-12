<?php
require_once 'conexion.php';

class ClsIpress
{
    function ListarIpress()
    {
        $sql = 'SELECT "idIpress",nombre,nivel FROM ipress';
        global $cnx;
        return $cnx->query($sql);
    }
}
