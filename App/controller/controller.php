<?php
require_once '../models/ClsCpt.php';
require_once '../models/ClsIpress.php';

$accion = $_POST['accion'];
controller($accion);

function controller($accion)
{
    $objProcedimiento = new ClsProcedimiento();
    $objIpress = new ClsIpress();

    switch ($accion) {
        case 'LISTAR_UNIDADES':
            $listadoUnidades = $objIpress->ListarIpress();
            $listadoUnidades = $listadoUnidades->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($listadoUnidades);
            break;
        case 'CARGAR_TARIFARIO':
            $nvl = $_POST['nivelIpress'];
            $tarifario = $objProcedimiento->CargarTarifario($nvl);
            $tarifario = $tarifario->fetchAll(PDO::FETCH_OBJ);
            echo json_encode($tarifario);
            break;
    }
}
