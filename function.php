 <h1> Funções Nativas</h1>
 <p> Funções nativas são funções que o próprio php 
  nos fornece. Como por exemplo:

    a função isset(), <br> //verifica se existe a variavel
    a função empty(),<br> // Verifca se a variavel está vazia
    a função count(), <br> // conta quantos itens tem no array
    a função include "", <br> //Inclui um arquivo dentro do outros
    a função echo "", <br> //imprime na tela
    a função strlen(),  <br> //conta quantos caracteres tem uma string 
    a função explode(), <br>  //cria um array a partir de uma frase
    a função replace(), <br> // Troca caracteres dentro de uma string

    Hora
  <?php
    
    echo "<h1>";
    echo date("H:i:s");
    echo "</h1>"; 
 ?>    


  Ano - Mes - Dia
 <?php
  echo "<h1>";
  echo date("Y-m-d");
  echo "</h1>";
 ?>  


 Função getdate()
 <?php
  echo "<pre>";
  print_r( getdate() );
  echo "</pre>";
 ?>


 <?php
  echo "<h1>";
  $array_data = getdate();
  $array_data["mday"]."/" >$array_data["mon"]. "/". $array_data["year"];
  echo "</h1>";

  echo "<h1>";
  echo rand(5, 15);
  echo "</h1>";


 ?>

 <h1> Funções Personalizadas</h1>

