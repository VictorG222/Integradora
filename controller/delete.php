<?php

if ($_SERVER['REQUEST_METHOD'] =="POST"){
    $email = $_POST['email'];

    
    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->delete($email);

    echo $resultado;
}