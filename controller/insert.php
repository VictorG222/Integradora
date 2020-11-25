<?php

if ($_SERVER['REQUEST_METHOD']=="POST"){

    $nombre_completo = $_POST[''];
    $fecha_de_nacimiento = $_POST[''];
    $genero = $_POST[''];
    $tipo_de_sangre = $_POST[''];
    $peso = $_POST[''];
    $estatura = $_POST[''];
    $direccion = $_POST[''];
    $correo_electronico = $_POST[''];
    $contraseña = $_POST[''];
    $telefono_de_casa = $_POST[''];
    $telefono_movil = $_POST[''];
    $enfermedades = $_POST[''];
    $alergias = $_POST[''];
    $cirugias_y_accidentes = $_POST[''];

    require_once("../model/claseconeccion.php");
    $obj = new Conection();
    $resultado = $obj->insertpaciente($email,$password);
    echo json_encode(["estado"=>$resultado]);
}   