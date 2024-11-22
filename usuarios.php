<?php include "cabecalho.php"; ?>
 
<?php
if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui
       include "conexao.php";
       $sql = "Select Id, Nome, Senha FROM usuarios order by Id desc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select Id, nome, senha
                from usuarios  
                where nome like '%$pesquisa%' 
                order by Id desc";
        $resultado = $conexao->query($sql);
       
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    include "conexao.php";
    $sql = "Select Id, nome, senha from usuarios order by Id desc";
    $resultado = $conexao->query($sql);
   
    $conexao->close();
   
}
 
 
?>
<br>
<?php
    if(isset($_GET["erro"]) && !empty($_POST["erro"]) )
    {
        echo "<div class='alert alert-danger'>";
        echo $_GET["erro"];
        echo "</div>";
    }


  ?>
  <br>  
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Lista de Usuários
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_usuario.php" class="btn btn-success" >
                            Novo Usuário
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="usuarios.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text"
                                        name="pesquisa"
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control"
                                        placeholder="Digite sua pesquisa aqui..." />
 
 
                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>
 
                <div class="row">
                    <div class="col-12">
                       
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nome dos Usuários</th>
                                <th scope="col">Senha dos usuários</th>

                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                           if ($resultado->num_rows > 0) {
                            while($row = $resultado->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["Id"] . "</td>";
                                echo "<td>" . $row["Login"] . "</td>";
                                echo "<td>" . $row["senha"] . "</td>";
                                
                                echo "<td><a href='editar_usuarios.php?Id=$row[Id]' class='btn btn-warning' >Editar</a>  ";
                                echo "<a href='excluir_usuarios.php?Id=$row[Id]' class='btn btn-danger'>Excluir</a> ";
                                if($row["Ativo"])
                                {
                                    echo "<a href='desativar_usuario.php?Id=$row[Id]' class='btn btn-danger'>Desativar</a>  ";   
                                }else{
                                    echo "<a href='ativar_usuario.php?Id=$row[Id]' class='btn btn-success'>Ativar</a>  ";
                                }
                                echo "<a href='permissoes.php?id_usuario=$row[Id]' class='btn btn-primary'>Permissões</a></td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>Nenhum registro encontrado</td></tr>";
                        }
                        ?>
                                                
                    </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<?php include "rodape.php"; ?>