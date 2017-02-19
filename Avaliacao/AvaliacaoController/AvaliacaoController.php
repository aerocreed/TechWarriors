<?php
include '../AvaliacaoModel/Model.php';

//Em construcao...

class Controller {
	
    public function login() {
		
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		$usuario = $_POST['usuario'];
		$senha = $_POST['senha'];
		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Model();
		$validacao = $model->validaDados($usuario,$senha);
		
		/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		$view = new View();
		$view->login($validacao); 
       
    }

    public function avaliar() {
		
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		$codigo = $_POST['codigo'];
		$opiniao = $_POST['opiniao'];
		$meio_pagamento = $_POST['meio_pagamento'];
		$atendimento = $_POST['atendimento'];
		$satisfacao = $_POST['satisfacao'];
		
		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Model();
		$validacao = $model->validaDados($codigo,$opiniao,$meio_pagamento,$atendimento,$satisfacao);
		
		/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		$view = new View();
		$view->login($validacao); 
       
    }
}

?>