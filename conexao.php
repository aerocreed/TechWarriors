<?php
    /*
    * Cria a conexão com o banco de dados
    * (ip-do-servidor, ususario-do-servidor, senha, nome-banco-de-dados)
    */
    $conexao = mysqli_connect("localhost", "root", "root", "loja");

    /*aqui deixamos sem a tag ?> que fecha o PHP, pois ela é desnecessária,
    pelo simples fato de não termos código HTML. Essa é uma boa prática da
    linguagem: se temos um arquivo que só tem código PHP, pois assim o PHP sabe
    que esse arquivo não enviará nada (HTML, etc) para o usuário final.*/
