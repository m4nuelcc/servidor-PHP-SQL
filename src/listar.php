<?php

$conexion = mysqli_connect("172.21.0.2","root","123","curso_udemy")
  or die ("No se ha podido conectar al servidor de Base de datos");

  $consulta = "SELECT name, age FROM people ";

if ($resultado = $conexion->query($consulta)) {

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
      echo "nombre: " . $fila[0] . " Edad: " . $fila[1]. "</br>"; 
        // printf ("%s (%s)\n", $fila[0], $fila[1]);
    }

    /* liberar el conjunto de resultados */
    $resultado->close();
}

?>