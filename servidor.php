<?php

    function conexion(){
        $servidor = "localhost";
        $usuario = "root";
        $password = "";
        $db = "sistemasweb";

        return $conexion = mysqli_connect($servidor, $usuario, $password, $db);
       

    }

    $conexion = conexion();

    $sql = "SELECT id_fecha, fecha, fechaInsert FROM t_fechas";
    $respuesta = mysqli_query($conexion, $sql);

    $cadenaTabla = "";
    $cadenaTabla = $cadenaTabla . '<table border="1" style="border-collapse:collapse">
                                    <thead>
                                        <th>Id</th>
                                        <th>fecha</th>
                                        <th>seleccionar</th>
                                        <th>Eliminar</th>
                                    </thead>
                                    <tbody>';    
    while ($mostrar = mysqli_fetch_array($respuesta)){
        $cadenaTabla = $cadenaTabla . '<tr>
                                            <td>'. $mostrar['id_fecha'] . '</td>
                                            <td>'. $mostrar['fecha'] . '</td>
                                            <td><a href="seleccionar.php">Seleccionar</a> </td>
                                            <td><button>Eliminar</button> </td>


                                        </tr>';
                                            
    } 
    $cadenaTabla = $cadenaTabla . '</tbody></table>';

    $tituloDePagina = "<h2>Agregado de listado de tareas</h2>";

    $descripcion = '<p>
                        Esta es una pagina de muestras para ver como obtener html desde php para asi poder imprimir 
                    </p>';
                   
    $label = "<label>Escribe la tarea</label> <br>";
    $agregarFecha = "<input type='text' name='text'/> <hr>";

    $boton =  '<input type="submit" name="Submit" value="Agregar"/> <hr>';

    echo $tituloDePagina  . $descripcion . $label . $agregarFecha . $boton . $cadenaTabla;

    
                                        
?>                                        
                                        