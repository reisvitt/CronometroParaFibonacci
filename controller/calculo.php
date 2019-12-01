<?php

$saida = "";

if($_POST){
  $numero = $_POST['numero'];

  if(is_numeric($numero)){ // verifica se eh um valor numerico

    if($numero >= 0){ // verifica se eh um valor numerico valido

      $tipo = $_POST['tipo'];
      
      if($tipo == 0){// tipo iterativo
        $antes = microtime();
        $valorIterativo = calculoIterativo($numero);
        $tempo = microtime() - $antes;

        $tempo = number_format($tempo,5,',','.');


        $saida .= "<table>";

        $saida .= "<tr><td><span class='valor'><b>Iterativo: </b>".$valorIterativo."</span></td>";
        $saida .= "<td><span class='valor'><b>Tempo: </b>".$tempo."ms</span></td>";

        $saida .= "</table>";
      
      }else{// calculo com recursao

        $antes = microtime(true);
        $valorRecursivo = calculoRecursao($numero);
        $tempo = microtime(true) - $antes;

        $tempo = number_format($tempo,5,',','.');

        $saida .= "<table>";

        $saida .= "<tr><td><span class='valor'><b>Recursivo: </b>".$valorRecursivo."</span></td>";
        $saida .= "<td><span class='valor'><b>Tempo: </b>".$tempo."ms</span></td>";

        $saida .= "</table>";
      }
      

    }else{
      $saida .= "<p>Valor inválido! Digite um valor maior ou igual a zero!</p>";
    }

  }else{
    $saida .= "<p>Valor inválido! Digite um valor maior ou igual a zero!</p>";
  }
  
}else{
  $saida .= "<p>Dados necessários não foram preenchidos</p>";
}

echo $saida;

function calculoRecursao($number){
  if($number == 0){
    return 0;
  }else if($number == 1){
    return 1;
  }else{
    return calculoRecursao($number - 1) + calculoRecursao($number - 2);
  }
}

function calculoIterativo($number){
  $primeiro = 0;
  $segundo = 1;

  if($number == 0){
    return 0;

  }else if($number == 1){
    return 1;
  }

  for($i = 1; $i < $number; $i++){
    $aux = $primeiro;
    $primeiro = $segundo;
    $segundo = $aux + $segundo;
  }
  return $segundo;
}

?>