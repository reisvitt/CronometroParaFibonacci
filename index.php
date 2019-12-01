<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <title>Fibonacci</title>

  </head>

  <body class="container">
    <div class="painel">
      <h3>Fibonacci</h3>
      <div class="conteudo">
        <p>Na matemática, a Sequência de Fibonacci é uma sequência de números inteiros,
        começando normalmente por 0 e 1, na qual, cada termo subsequente corresponde
        à soma dos dois anteriores.</p>

        <h4>Algoritmo</h4>
        
        <p>Esta calculadora tem como finalidade cronometrar o tempo de cálculo para a sequência de 
        fibonacci na forma:
        <ul>
          <li><b>Iterativa</b></li>
          <li><b>Recursiva</b></li>
        </ul>

        </p>

      </div>
    </div>

    <div class="painel">
      <h3>Cálculo do elemento da sequência de fibonnaci</h3>

      <div class="calculo">
        <form id="ajax">
        <label for="numero">Cardinalidade do elemento na SF</label>
        <input type="number" class="entrada_texto" name="numero" id="input_numero" required />
        <button type="submit" id="calcular">Calcular</button>
        </form>
      </div>

      <label id="error" class="error"></label>

      <div id="saida" class="nova">
      
      </div>
    </div>
  </body>
</html>