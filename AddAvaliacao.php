<?php
include("cabecalho.php");
include("conexao.php");
include("CrudAvaliacao.php");

    $codigo = $_POST['codigo'];
    $opiniao = $_POST['opiniao'];
    $meio_pagamento = $_POST['meio_pagamento'];
    $atendimento = $_POST['atendimento'];
    $satisfacao = $_POST['satisfacao'];

    if (insereAvaliacao($conexao, $codigo, $opiniao, $meio_pagamento, $atendimento, $satisfacao)) { ?>
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
