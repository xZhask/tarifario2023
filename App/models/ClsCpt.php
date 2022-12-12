<?php
require_once 'conexion.php';

class ClsProcedimiento
{
    function FiltrarTarifario($nvl)
    {
        $sql = "SELECT * FROM procedimientos WHERE nivel=:nivel";
        global $cnx;
        $parametros = [
            ':nivel' => $nvl
        ];
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        return $pre;
    }
    function FiltrarProcedimiento($filtro, $nvl)
    {
        $sql = "SELECT * FROM procedimientos WHERE CONCAT(codigoCpms,descripcion) LIKE :filtro AND nivel=:nivel";
        global $cnx;
        $parametros = [
            ':filtro' => '%' . $filtro . '%',
            ':nivel' => $nvl
        ];
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        return $pre;
    }
}
