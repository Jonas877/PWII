<?php

$nomes = [
    "JONAS SILVA JATOBA",      
    "MARCOS VINÍCIUS SANCHES CARDOSO",     
    "MARIANA DOS SANTOS",      
    "MATHEUS MARQUEZIM GENEBRA",      
    "RAFAEL TSUTAI MASSAKI",       
    "REBÉCA RODRIGUES DE OLIVEIRA",        
    "RODOLFO LEONARDO ROMO",       
    "RODRIGO MIRANDA DOS SANTOS",      
    "SARAH VITÓRIA PEDROSO DA SILVA",      
    "TAYNA ADRIANA DA SILVA",      
    "VANESSA ALVARES BERNARDO",        
    "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
    "VITOR TAKAYUKI HIROTOMI",     
    "WYLLIAM DOS SANTOS FLORENTINO"
 ];

 $indicenomes = array_rand($nomes);
 $nome = $nomes[$indicenomes];


echo "<h1>";
echo $nome;
echo "</h1>";
 ?> 
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   <?php
     
     $nomes = "JONAS SILVA JATOBA";      
     "MARCOS VINÍCIUS SANCHES CARDOSO";     
     "MARIANA DOS SANTOS";      
     "MATHEUS MARQUEZIM GENEBRA";      
     "RAFAEL TSUTAI MASSAKI";       
     "REBÉCA RODRIGUES DE OLIVEIRA";        
     "RODOLFO LEONARDO ROMO";       
     "RODRIGO MIRANDA DOS SANTOS";      
     "SARAH VITÓRIA PEDROSO DA SILVA";      
     "TAYNA ADRIANA DA SILVA";      
     "VANESSA ALVARES BERNARDO";        
     "VINICIUS GABRIEL GONÇALVES DOS SANTOS";       
     "VITOR TAKAYUKI HIROTOMI";     
     "WYLLIAM DOS SANTOS FLORENTINO;"
   
     
     echo "<h1>";
     echo rand(1, 14);
     echo $nome;
     echo "</h1>";
   
     
     function sortearVencedor($nomes) {
       return $nomes[array_rand($nomes, 1)] ?? "Nenhum nome na lista.";
    }
   
    $vencedor = sortearVencedor($nomes);
    echo "O vencedor é: " . $vencedor;
   
    ?>