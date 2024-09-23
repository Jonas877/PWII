<?php
  echo "<h1> Exercício 1 </h1>";

 $nome = ("Jonas");
  $idade = 17;

 echo "Meu nome é $nome.";
 echo "<br>"; 
 echo "Tenho $idade anos.";
 echo "<br>";


 echo "<hr>";
 ?>



<?php
echo "<h1> Exercício 2 </h1>";

$numero = rand(54, 185); 
 "<br>";
if ($numero % 2 == 0) {
    echo "O número $numero é par.";
} else {
    echo "O número $numero é ímpar.";
}
echo "<hr>";
?>


<?php
echo "<h1> Exercício 3 </h1>";

$numero = rand(584, 1970); 

for ($numero = 584; $numero <= 1970; $numero++) {
    echo "<br>";
    echo "Número: $numero"; 
    echo "<br>";
 

    if ($numero % 2 == 0) {
        echo " é Par";
        echo "<br>";
    }      
}
 echo "<hr>";
 ?>  
 
 
 <?php
 echo "<h1> Exercício 4 </h1>";
 $frutas = ["Maçã", "Banana", "Laranja", "Manga", "Uva"];
echo "Frutas:<br>";
foreach ($frutas as $fruta) {
echo $fruta . "<br>";
}


$clientes = [
    [
        "nome" => "Jonas",
        "telefone" => "99999-9999",
        "cep" => "11111-111"
    ],
    [
        "nome" => "Rodrigo",
        "telefone" => "88888-8888",
        "cep" => "22222-222"
    ],

    [
        "nome" => "Cristina",
        "telefone" => "55555-5555",
        "cep" => "33333-333"
    ],

    [
        "nome" => "Rodriguinho",
        "telefone" => "77777-7777",
        "cep" => "44444-444"
    ],

    [
        "nome" => "Nicolly",
        "telefone" => "00000-0000",
        "cep" => "99999-999"
    ]
];

 echo "<br>Clientes:<br>";
 foreach ($clientes as $cliente) {
    echo "Nome: " . $cliente['nome'] . "<br>";
    echo "Telefone: " . $cliente['telefone'] . "<br>";
    echo "CEP: " . $cliente['cep'] . "<br><br>";
}
?>