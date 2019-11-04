
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>curso PHP</title>
  </head>
  <body>

  <?php

    //si en la respuesta del get tiene algun valor y ademas es uno
    //pinta por pantalla la persona se agrago correctamente
     if(isset($_GET['success']) && $_GET['success'] == 1){
         echo "<p style='color: green; text-align: center;'> La persona se agregó correctamente</p>";
        };
    ?>   
    <!-- formulario para pedir los datos por metodo GET          -->
    <form method="GET" action="capturar.php" style="max-width: 50%; margin: 10px auto;"> 
       <div class="form-group">
          <label>Nombre</label>
          <input type="text" class="form-control" name="name" placeholder="Escriba Nombre">
       </div>
       <div class="form-group">
          <label >Edad</label>
          <input type="text" class="form-control"name="age" placeholder="Escriba Edad">
       </div>
         <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <br>

 <!-- se pintan los campos de la base de datador dentro de la tabla mediante un while -->
 <table class="table" style="max-width: 75%; margin: 0 auto;">       
     <thead>
         <tr>
         <th scope="col">ID</th>
         <th scope="col">Name</th>
         <th scope="col">Edad</th>
        </tr>
     </thead>

     <tbody>
     <?php
       //datos de la base de datos.
        $ip = '172.21.0.2';
        $usuario = "root";
        $contaseña = "123";
        $bd = "curso_udemy";  
        // conexion a la base de datos 
        $conexion = mysqli_connect("$ip","$usuario","$contaseña","$bd") or die ("No se ha podido conectar al servidor de Base de datos");
        // se crea consulta SQL para mostar todos los datos de la base de datos people
        $consulta = "SELECT idpeople, name, age FROM people ";
        // si en la consulta devuelve algun dato la pinta
         if ($resultado = $conexion->query($consulta)) {
           while ($fila = $resultado->fetch_row()) {
            //  tiene $fila[0]..$fila[2], porque la tabla tiene tres campos
            echo "<tr>";
            echo "<td>" . $fila[0] . "</td>";
            echo "<td>" . $fila[1] . "</td>";
            echo "<td>" . $fila[2] . "</td>";
            echo "</tr>";
            //   echo "nombre: " . $fila[0] . " Edad: " . $fila[1]. "</br>"; 
            }
           $resultado->close();
         }
      ?>
      </tbody>
  </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>











<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Titulo de Prue</title>
</head>
<body>
<form name="capturar_datos" method="GET" action="capturar.php">
    <div> 
        <input type="text" name="name" placeholder="escriba aki su nombre"/>
    </div>
    <div> 
        <input type="text" name="age" placeholder="escriba aki su edad"/>
    </div>
    <div> 
        <input type="submit" value="enviar formulario"/>
    </div>
</form>


</body>
</html>


 -->





































