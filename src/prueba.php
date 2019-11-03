<?php
// $array = [9 => 'messi', 10 => 'maradona', 1 => 'pepote', 19 => 'la gordi', 'barsa' => [1 => 'manoli', 2 => 'renee']];
//creacion de un array asociativo

$array = [9 => 'messi', 10 => 'maradona', 1 => 'pepote', 'chokolatona' => 'la gordi', 'gordi' => 'kte kalles'];

 // recorremos el array y le pasamos los parametros el valor en key y valor
 // a la funcion imprimir
 foreach($array as $key => $valor){ 
   imprimir($key,$valor);
 };

 // la funcion imprimir recibe en sus parametros &key y $valor de la llamada
 //imprimir del forech
 function imprimir($camiseta, $nombre){
   echo 'el jugador'. ' '. $nombre . ' '. 'juega con la camiseta numero'. ' '. $camiseta . '<br/>';
  };
  
  //volvemos a reutililar la funcion imprimir con otros parametros
  imprimir('koko','loco');

  //creacion de una funcion para sumar dos numeros y retorna $resltado
  function suma ($numero1,$numero2) {
    $resultado = $numero1 +$numero2;
    return  $resultado; 
  };
  // creacion de dos variables para pasarlas a la funcion suma
$n1 = 20;
$n2 = 30 ;

// asignacion del valor de la funcion suma a $resultado
$resultado = suma ($n1, $n2);

//imprime por pantalla los numeros parasados a la funcion suma suma ($n1, $n2) y 
// &resltado 
echo 'la suma de'. ' '. $n1. ' + '. $n2 . 'es:'. ' '. $resultado .'<br/>'.'<br/>'.'<br/>'.'<br/>';

$barcelona = [10 => 'messi', 11 => 'ronaldo', 1 => 'pepote', 6 => 'manolete', 4 => 'renee']; 
             

$jugadoresPares = [];
$jugadoresImpares = [];

foreach($barcelona as $key => $valor){

  // echo  $key, $valor . '<br/>';
  
  if($key%2==0 ){
    array_push($jugadoresPares, $key, $valor);
    // var_dump($jugadoresPares);
    // echo 'jugadores pares'. '  '. $valor. '<br/>';
  }else {
    array_push($jugadoresImpares, $key, $valor);
    // var_dump($jugadoresImpares);
    // echo 'jugadores impares'. '  '. $valor . '<br/>'.'<br/>';
  } ;     
};

foreach($jugadoresImpares as $key => $valor){

  echo 'jugadores impares: '. $valor. '<br/>';
};

foreach($jugadoresPares as $key => $valor){

  echo 'jugadores pares: '. $valor. '<br/>';
};

 ?>
