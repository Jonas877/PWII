
<?php include "cabecalho.php"; ?>
     <h1>Variáveis em PHP</h1>
     <p> $nunero = 10;</p>
     <p> $string1 = "Cristiano Ronaldo 7"; </p>
     <p> $string2= "Cristiano Ronaldo 7" .$numero; </p>
     <p> $valorDecimal = 10.50; </p>
     <p> $Ativo = true; </p>
     <p> /* Aqui é um bloco de comentario */ </p>
     <?php  //Tudo que está entre as tags do php não aparece na tela?>
     <?php // a não ser que usemos a função echo com string ?>

     <?php
     echo "Hello World" ;
     echo "<br>";
     $numero = 10;
     $nome = " Jonas";
     $frase1 = " <p> $nome camisa $numero frase com paragrafo </p>";
     $frase2 = $nome. "  camisa  " .$numero; //cocatenação das antigas
     echo $frase1;
     echo "$frase2 É o que tem dentro da variavel";
     ?>

     
<?php include "rodape.php"; ?>