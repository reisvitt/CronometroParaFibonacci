function calculo(numero, tipo){
  console.log("CERTO2: " + numero + " : " + tipo)

  var saida = document.getElementById("saida")

  $.ajax({
    url: "./controller/calculo.php",
    type: "POST",
    dataType: "html",
    async: true,
    data: { 
      'numero':  numero,
      'tipo': tipo,
    }

  }).done(function(valor){
    saida.innerHTML += valor
  });
}
$(document).ready(function(event){
  $("#calcular").click(function(event){
    event.preventDefault();
  
    saida = document.getElementById("saida")
    error = document.getElementById("error")
  
    error.innerHTML = "" // deixa a mensagem de erro em branco
    
    var numero = $('#input_numero').val() // recebe valor do input
  
    if(numero < 0){ // verifica se o numero eh negativo
      saida.innerHTML =  "<p class='conteudo'><b>Valor inválido!</b> Digite um valor não negativo!</p>";
    }else{
      if(numero >= 35){ // exibe mensagem caso numero seja maior ou igual a 35
        error.innerHTML = "Valores acima de 35 podem levar muito tempo para serem calculados usando recursão<br>"
      }
      saida.innerHTML = ""
      calculo(numero, 0) // chama calculo para iterativo
      calculo(numero, 1) // chama calculo para recursivo
    }
  });

});

