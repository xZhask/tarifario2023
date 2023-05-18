<?php
require_once 'conexion.php';

class ClsIpress
{
    function ListarIpress()
    {
        $sql = 'SELECT idIpress,nombreIpress,nivel FROM ipress';
        global $cnx;
        return $cnx->query($sql);
    }
}
