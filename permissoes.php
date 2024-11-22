<?php
<?php include "cabecalho.php"; ?>
<?php include "conexao.php"; ?>

$sql_Permissoes = "select Nome, Id form Permissoes order by Id desc";
$resultado_permissoes = $conexao->query($sql_Permissoes);

$sql permissoes ="select u.Id, u.Nome, p.Nome, PU.Id form USUARIOS_PERMISSOES PU
                    inner join Usuario u on (u.Id = PU.USUARIO_ID)
                    inner join Permissao p on (p.Id = PU.PERMISSAO_ID)";

    $resultado_permissoes = $conexao->query($sql_usuarios_permissao);
?>

<div class='row'>
    <div class="col-6">

    </div>
    <div class="col-6">
        <ul class="list-group">
            <?php 
                while($linha = $resultado_permissoes->fetch_assoc())
                {
                    echo "<li class='list-group-item'><a href='#' class='btn btn-success'> << </a>  $linha[Role]</li>";
                }
            ?>
        </ul>
    </div>

</div>


<?php include "rodape.php"; ?>