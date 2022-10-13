<?php
    //print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombre"]) || empty($_POST["txtEdad"]) || empty($_POST["txtSigno"]) || empty($_POST["txtRol"])){
        header('Location: index.php?mensaje=falta');
        exit();
    }

    include_once 'model/conexion.php';
    $referencia = $_POST["txtNombre"];
    $edad = $_POST["txtEdad"];
    $signo = $_POST["txtSigno"];
    $a = $_POST["txta"];
    $rol= $_POST["txtRol"];
    
    $sentencia = $bd->prepare("INSERT INTO cultivos(idcultivo,referencia,nombre,fecha_registro,descripcion,labores_idlabor) VALUES  (?,?,?,?,?,?);");
    $resultado = $sentencia->execute([NULL,$referencia, $edad, $signo, $a, $rol]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
        exit();
    }
    
?>