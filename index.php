<!DOCTYPE html> <!-- Luis C Marzal -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gestión de empleados</title>
        <link rel="stylesheet" href="CSS/style.css">
    </head>
    <body>
        <h1>Empleados</h1>
        <table>
            <tr>
                <td>
                    DNI
                </td>
                <td>
                    Nombre
                </td>
                <td>
                    Editar
                </td>
                <td>
                    Eliminar
                </td>
            </tr>
            <?php

                $conexion =  mysqli_connect($configbd->SERVIDOR,  $configbd->USUARIO,  $configbd->CONTRASENA, $configbd->BASEDATOS);
       
       
                $resultado = mysqli_query($conexion, $consulta->SELECT)

               
                $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);
                for($i=0;$i<3;$i++){
                    echo '<tr>';
                    echo '<td>'.$fila[1].'</td>';
                    echo '<td>'.$fila[2].'</td>';
                    echo '<td><a href="editar.php?'.$fila[0].'">Edita</a></td>';
                    echo '<td><a href="borrar.php?'.$fila[0].'">Borra</a></td>';
                    echo '</tr>';
                    $fila =mysqli_fetch_array($resultado, MYSQLI_NUM);
                }


            ?>
        </table>
    </body>
</html>