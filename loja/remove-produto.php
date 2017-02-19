<?php
include("cabecalho.php");
include("conecta.php");
include("crud-produtos.php");


$id = $_POST['id'];
removeProduto($conexao, $id);
//Vai ser redirecionado, ou seja, o servidor responde com a URI produto-lista.php?removido=true
header("Location: produto-lista.php?removido=true");
die();//Pare por aqui nessa página PHP, não execute mais nada abaixo.
?>
