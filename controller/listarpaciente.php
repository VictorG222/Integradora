<?php

if ($_SERVER['REQUEST_METHOD']=='GET'){
    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->listarpaciente();
    echo json_encode($resultado);
}