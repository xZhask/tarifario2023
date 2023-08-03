<?php
require_once 'App/models/ClsIpress.php';

$objIpress = new ClsIpress();
$listadoUnidades = $objIpress->ListarIpress();
$listadoUnidades = $listadoUnidades->fetchAll(PDO::FETCH_OBJ);
echo json_encode($listadoUnidades);
