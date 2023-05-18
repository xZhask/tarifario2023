<?php
try {
    /* $manejador = 'pgsql';
    $servidor = 'localhost';
    $usuario = 'postgres';
    $pass = 'root';
    $db = 'dbcpms'; */
    $manejador = 'mysql';
    $servidor = 'localhost';
    $usuario = 'root';
    $pass = 'mysql';
    $db = 'dbestdirsapol';
    //$usuario = 'odindeveloper_josue';
    //$pass = 'b(=-.[52yyfy';
    //$db = 'odindeveloper_dbcpms';
    $cadena = "$manejador:host=$servidor;dbname=$db";
    $cnx = new PDO($cadena, $usuario, $pass);
    date_default_timezone_set('America/Lima');
} catch (Exception $ex) {
    echo 'Error de acceso, informelo a la brevedad :' . $ex;
    exit();
}
