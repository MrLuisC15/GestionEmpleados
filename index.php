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
                $servidorbd = '127.0.0.1';
                $usuario = 'root';
                $contraseña = '';
                $basedatos = 'bd_empleados';
                $conexion =  mysqli_connect($servidorbd, $usuario, $contraseña, $basedatos);
       
                $consulta = 'select * from empleados;';
       
                $resultado = mysqli_query($conexion, $consulta)

                $fila = mysqli_fetch_array($resultado, MYSQLI_NUM);
                for($i=0;$i<3;$i++){
                    echo '<tr>';
                    echo '<td>'.$fila[1].'</td>';
                    echo '<td>'.$fila[2].'</td>';
                    echo '<td><button>Edita</button></td>';
                    echo '<td><button>Borra</button></td>';
                    echo '</tr>';
                    $fila =mysqli_fetch_array($resultado, MYSQLI_NUM);
                }


            ?>
        </table>
    </body>
</html>