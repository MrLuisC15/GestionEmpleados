<?php
    define("SERVIDOR", "127.0.0.1");
    define("USUARIO", "root");
    define("CONTRASENA", "");
    define("BASEDATOS", "db_empleados");

    $dni= $_POST['dni'];
    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $telefono= $_POST['telefono'];


    $conexion =  mysqli_connect(SERVIDOR,  USUARIO,  CONTRASENA, BASEDATOS);

    $resultado = mysqli_query($conexion, 'insert into empleados;');
?>