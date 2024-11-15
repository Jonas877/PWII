<?php include "cabecalho.php"; ?>

<?php

if( isset($_POST['Id']) && !empty($_POST['Id']) &&
    isset($_POST['Descricao']) && !empty($_POST['Descricao']) &&
    isset($_POST['Valor']) && !empty($_POST['Valor']) &&
    isset($_POST['Codigo_Barras']) && !empty($_POST['Codigo_Barras']) 
)
{
    
    include "conexao.php";
    $sql = "UPDATE PRODUTOS SET Descricao = '$_POST[Descricao]',
                                Valor = $_POST[Valor],
                                Codigo_Barras = $_POST[Codigo_Barras],
                                Categoria_ID = $_POST[Categoria_Id]
             WHERE Id = $_POST[Id]";
    echo $sql;        
    $resultado = $conexao->query($sql);
 if($resultado)
 {
        //logica para mensagem de sucesso
 }  
   else
 {
     echo "Resultado negativo";
 }
                             
}


if ( isset($_GET["Id"]) && !empty( $_GET['Id']) )
{

include "conexao.php";
$sql = "Select Id, Descricao, Valor, Codigo_Barras, Categoria_Id  FROM produtos where Id = $_GET[Id]";
$resultado = $conexao->query($sql);
if($resultado)
{

    if($resultado-> num_rows > 0)
    {
    
    while($row = $resultado->fetch_assoc())
    {
    $id =  $row["Id"];
    $descricao = $row["Descricao"];
    $valor = $row["Valor"];
    $codigo_barras = $row["Codigo_Barras"];
    $categoria_id = $row["Categoria_Id"];
}
    }
else
    {
    header("location: produto.php?erro=Nenhum registro encontrado");

    }
}
else
{
    header("location: produto.php?erro=Erro do if do resultado");

}    
}
else
{
    header("location: produto.php?erro=Nenhum id informado");
    
}


?>

<form action="editar_produto.php?Id=<?php echo $id; ?>" method="post">
    <input name="Id" value="<?php echo $id ?>" />
    <input name="Descricao" value="<?php echo $descricao ?>" />
    <input name="Valor" value="<?php echo $valor ?>" />
    <input name="Codigo_Barras" value="<?php echo $codigo_barras ?>" />
    <select name="Categoria_Id">

<?php


       $sql_categorias = "Select Id, Nome from Categorias";
       $resultado_categoria = $conexao->query($sql_categorias);
       if( $resultado_categoria -> num_rows > 0)
       {
           while($row = $resultado_categoria->fetch_assoc())
           {
               if($categoria_id == $row[Id])
               {
                echo "<option selected value='$row[Id]'> $row[Nome] </option>";
               }
               echo "<option value='$row[Id]'> $row[Nome] </option>";
           }
       }else{
           echo "<option value='0'> Não tem categoria cadastrada </option>";
       }

?>       


        <option value="Id da categoria"> Nome da categoria </option>
        
</select>
<br>

    <button type="submit">
        Salvar Alterações
</button>
</form>



<?php include "rodape.php"; ?>