<?php
include("cabecalho.php");
include("conecta.php");
include("crud-produtos.php");

    $nome = $_POST["nome"]; //a variável recebe o que foi passado no parâmetro nome
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST['categoria_id'];

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)) { ?>
        <p class="alert-success"> produto <?php echo $nome ?> adicionado com sucesso! </p>

    <?php
    } else {
        $msg = mysqli_error($conexao);
    ?>
        <p class="alert-danger"> produto <?php echo $nome ?> não foi adicionado: <?php echo $msg ?></p>

    <?php
    }
    /*
    * Fecha a conexao
    * o PHP fecha a conexão ao terminar de executar toda a págiana, portanto não é obrigatório fechar a conexão
    */
    mysqli_close($conexao);
?>
<?php include("rodape.php") ?>
