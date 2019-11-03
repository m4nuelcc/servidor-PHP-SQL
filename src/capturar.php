<?php
$name = $_GET['name'];
$age = $_GET['age'];
//esa ip es la del conenetodr
// docker php docker container ps
//docker container inspect dbc85dece6db
// $ip = '172.19.0.2';
// $usuario = "root";
// $contaseña = "123";
// $bd = "curso_udemy";
// $puerto = "8082";

if(strlen($name) > 0 &&  $age > 0){
  $conexion = mysqli_connect("172.21.0.2","root","123","curso_udemy")
  or die ("No se ha podido conectar al servidor de Base de datos");
  $sql = "INSERT INTO people (name, age) VALUES ('". $name ."','". $age ."')";
  if (mysqli_query($conexion, $sql)){
    header("location: index.php?success=1");
    // echo "La persona  " . $name . " se agrego a la Base de datos";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
  }
  mysqli_close($conexion);
  echo " Es correcto";
} else {
  echo "es incorrecto, vuelva atras y corriga sus datos.";
}

?>