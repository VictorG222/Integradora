<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $email = $_POST['correo'];
    $password = $_POST['pass'];

    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->insertCustomer($email,$password);
    echo json_encode(["estado"=>$resultado]);
}   