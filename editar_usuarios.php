
<?php include "cabecalho.php"; ?>
<?php 
if(  isset($_POST['id']) && !empty($_POST['id']) &&
    isset($_POST['nome']) && !empty($_POST['nome'])
)
{
    include "conexao.php";
    $sql = "UPDATE usuarios SET Nome = '$_POST[nome]'
            WHERE Id = $_POST[id]";
     
     echo $sql;
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        //logica para mensagem de sucesso
    }
    else
    {
        //caso o update de false
    }
}



if ( isset($_GET["Id"]) && !empty( $_GET['Id'] )   )  
{
    include "conexao.php";
    $sql = "Select Id, Nome, senha from usuarios where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        if($resultado->num_rows > 0)
        {
            while($row = $resultado->fetch_assoc()) 
            {
                $id = $row["Id"];
                $nome = $row["Nome"];
            }
        }
        else
        {
            header("location: usuarios.php?erro=Nenhum registro encontrado");
        }
    }
    else
    {
        header("location: usuarios.php?erro=Erro do if do resultado");
    }
}
else
{
    header("location: usuarios.php?erro=Nenhum id informado");
}



?>

<form action="editar_usuarios.php?Id=<?php echo $id; ?>" method="post">
    <input name="id" value="<?php echo $id ?>" />
    <input name="nome" value="<?php echo $nome ?>" />
    <button type="submit" >
        Salvar Alterações
    </button>

</form>
<?php include "rodape.php"; ?>
