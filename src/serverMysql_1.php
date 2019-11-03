<?php
/*
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| id        | int(11)      | NO   | PRI | NULL    | auto_increment |
| apellidos | varchar(45)  | YES  |     | NULL    |                |
| nombre    | varchar(45)  | YES  |     | NULL    |                |
| dni       | varchar(45)  | YES  |     | NULL    |                |
| telefono  | varchar(45)  | YES  |     | NULL    |                |
| avatar    | varchar(100) | YES  |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+

*/

$ip = '192.168.105.104';
$password = 'a';
$user = 'root';
$baseDeDatos = 'facturacion';

$dbfacturacion = new mysqli($ip, $user, $password, $baseDeDatos);

if ( $dbfacturacion->connect_errno ) { 
  die( $dbfacturacion->connect_error );
}



function listarClientes() {
  $tabla = $dbfacturacion->query('select * from clientes order by apellidos;');
  while ( $fila = $tabla->fetch_assoc() ) {
    # code...
    echo $fila['apellidos'] . ', ' . $fila['nombre'] . '<br>';
  }
  
}










function leer() {
  $sql = "
  select apellidos, nombre from clientes where id = ?;
  ";
  $frase = $dbfacturacion->prepare($sql);
  $frase->bind_param( "i", $_GET['id']);
  $frase->execute();
  $frase->bind_result($apellidos, $nombre);
  $frase->fetch();
  ?>
  <form action="">
    <input type="text" value="<?= $apellidos ?>">
    <input type="text" value="<?= $nombre ?>">
  </form>
  <?php
 }

function borrar() {
  $sql = "
  delete from clientes where id = ?;
  ";
  $frase = $dbfacturacion->prepare($sql);
  $frase->bind_param( "i", $_POST['id']);
  if ($frase->execute()) {
    echo 'se ha borrado correctamente el cliente: ' . $_POST['id'];
  }

}

function actualizar(){
  $sql = "
  update clientes set nombre = ?, apellidos = ? where id = ?;
  ";
  $frase = $dbfacturacion->prepare($sql);
  $frase->bind_param( "ssi", $_POST['nombre'], $_POST['apellidos'], $_POST['id']);
  if ($frase->execute()) {
    echo 'se ha actualizado correctamente el cliente: ' . $_POST['apellidos'];
  }

}


function insertar(){
  $sql = "
  insert into clientes (apellidos, nombre) values ( ?, ? );
  ";
  $frase = $dbfacturacion->prepare($sql);
  $frase->bind_param( "ss", $_POST['apellidos'], $_POST['nombre']);
  if ($frase->execute()) {
    echo 'se ha insertado correctamente';
  }
}