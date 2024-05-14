<?php
require_once 'conexion.php';

class ClsProcedimiento
{
    function CargarTarifario($nvl)
    {
        $sql = 'SELECT * FROM tarifario WHERE nivelUso BETWEEN 1 AND :nivel';
        global $cnx;
        $parametros = [
            ':nivel' => $nvl
        ];
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        return $pre;
    }
    function CargarTarifarioDiferenciado($nvl)
    {
        $sql = 'SELECT * FROM tarifario WHERE nivelUsoDiferente IN (:nivel,6)';
        global $cnx;
        $parametros = [
            ':nivel' => $nvl
        ];
        $pre = $cnx->prepare($sql);
        $pre->execute($parametros);
        return $pre;
    }
}
