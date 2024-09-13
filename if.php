<?php include "cabecalho.php"; ?>
     <h1>Estrutura Condicional (IF ELSE)</h1>

    <p>$inteira = 10 </p>
    <p>$nome = "prof" </p>
    <p>$valor = 10.50 </p>
    <p>$ativo = true </p>

    

<pre> if($inteira == 10)
    {
        echo "o conteudo é 10";
    }
    else if($inteira >=11)
    {
        echo "não é 10";
    }
</pre>

<?php
    $inteira = 9;
    if($inteira == 10)
    {
        echo "A variavel é 10</h2>";
    }
    else if($inteira >= 11)
    {
    echo "<h2> A variavel só pode ser menor que 10</h2>";
    }
    else 
    {
        echo "<h2> A variavel só pode ser menor que 10</h2>";
    }
?>
<p> 
    As variaveis string podem ser contados os caracteres e usadas no if
</p>
<pre>
    if(strlen($nome) > 10)
    {
        echo "seu nome tem mais que 10 caracteres quantidade é " .strlen($nome);
    }
</pre>
<?php
        $nome = "Fernando";
        if(strlen($nome) > 5 )
        {
            echo "<h2>Seu nome tem mais que 10 caracteres quantidade é " .strlen($nome)."</h2>";
        }
       else
       {
        echo  "<h2>Seu nome tem mais que 10 caracteres quantidade é " .strlen($nome)."</h2>";
       }

        ?>

      


<p>
    Podemos verificar se  a variavel $nome está vazia
</P>
<pre>
    if(empty($nome))
    {
        echo "Sua variavel está vazia";
    }
</pre>
<p>
    Também podemos comparar string normalmente
</P>
<pre>
    if($nome == "Fernando")
    {
        echo "Nome igual";
    }
    else
    {
        echo "Nomes diferentes";
    }
</pre>
<p>
    Podemos verificar se a variavel é verdadeira ou falsa
</p>
<pre>
    if($ativo)
    {
        echo "Verdadeira";
    }
    else
    {
        echo "Falsa";
    }
    
    <?php include "rodape.php"; ?>