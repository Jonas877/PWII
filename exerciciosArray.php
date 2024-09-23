 <?php //
 $frutas = array("maçã", "laranja", "banana");

 print_r($frutas);//Escreve na tela os dados básicos do array

 var_dump($frutas); //Detalha os dados do array

 echo count($frutas); // Escreve na tela a quantidade de items que o array possui

 array_push($frutas, "Kiwi"); // Adiciona um novo item ao array

 foreach($frutas as $fruta){
    echo $fruta;
}

    //Exercicio
   //Gere um Array que cada indice desse array receba um novo 
  //array com as Chaves nome, idade e email
  //com seus respectivos valores inventados aleatoriamente


  $pessoas = array(
    array (
            "nome" => "Jonas",
            "idade" =>  17,
            "email" => "jatoba@gmail.com"
    ),

    array (
        "nome" => "Cr7",
        "idade" =>  39,
        "email" => "cr7@gmail.com"
    ),

array (
    "nome" => "Rodrigo",
    "idade" =>  46,
    "email" => "Rodrigo@gmail.com"
),

array (
    "nome" => "Angela",
    "idade" =>  38,
    "email" => "Angela@gmail.com"
),

array (
    "nome" => "Nicolly",
    "idade" =>  14,
    "email" => "Nicolly@gmail.com"
),

array (
    "nome" => "Jose",
    "idade" =>  86,
    "email" => "Jose@gmail.com"
),

array (
    "nome" => "Otilia",
    "idade" =>  83,
    "email" => "Otilia@gmail.com"
),

array (
    "nome" => "Matheus",
    "idade" =>  16,
    "email" => "Matheus@gmail.com"
),

array (
    "nome" => "Marcola",
    "idade" =>  17,
    "email" => "Marcola@gmail.com"
),

array (
    "nome" => "Willian",
    "idade" =>  39,
    "email" => "Willian@gmail.com"
),

array (
    "nome" => "Neymar",
    "idade" =>  32,
    "email" => "Neymar@gmail.com"
),
    
  );


  echo "<table border='5'>";
  echo "<tr>";
  echo "<td>Nome</td>";
  echo "<td>Idade</td>";
  echo "<td>Email</td>";
  echo "</tr>";

  for($i =0; $i <count($pessoas); $i++ )
  {
    echo "<tr>";
    echo "<td>".$pessoas[$i]["nome"]."</td>";
    echo "<td>".$pessoas[$i]["idade"]."</td>";
    echo "<td>".$pessoas[$i]["email"]."</td>";
    echo "</tr>";
  }

foreach($pessoas as $a)
{
    echo "<tr>";
    foreach($a as $chave => $valor)
    {
        echo "<td>".$valor."</td>";
    }
    echo "</tr>";



}






  echo "</table>";






?>