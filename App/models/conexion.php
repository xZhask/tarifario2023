<?php
try {
    $manejador = 'pgsql';
    $servidor = 'localhost';
    $usuario = 'postgres';
    $pass = 'root';
    $db = 'dbcpms';
    //$usuario = 'odindeveloper_josue';
    //$pass = '8K=*%i-s[#,T';
    //$db = 'odindeveloper_cpmsdb';
    $cadena = "$manejador:host=$servidor;dbname=$db";
    $cnx = new PDO($cadena, $usuario, $pass);
    date_default_timezone_set('America/Lima');
} catch (Exception $ex) {
    echo 'Error de acceso, informelo a la brevedad :' . $ex;
    exit();
}
