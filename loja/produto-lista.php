<?php
include("cabecalho.php");
include("conecta.php");
include("crud-produtos.php");
?>

<?php
    //Se existe a chave "removido" no array $_GET e se essa chave tem o valor "true"
    if(array_key_exists("removido", $_GET) && $_GET["removido"]=="true") { ?>
        <p class="alert-success">Produto removido com sucesso</p>
<?php
    }
?>

<table class="table table-striped table-bordered">
    <?php
    $produtos = listaProdutos($conexao);

    foreach ($produtos as $p) :
    ?>
    <tr>
        <td><?php echo $p['nome'] ?></td>
        <td><?php echo $p['preco'] ?></td>
        <td><?php echo substr($p['descricao'], 0, 40) ?></td>
        <td><?php echo $p['categoria_nome'] ?></td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?php echo $p["id"]?>"/>
                <button class="btn btn-danger">remover</button>
            </form>
        </td>
    </tr>
    <?php
    endforeach
    ?>
</table>

<?php include("rodape.php"); ?>
