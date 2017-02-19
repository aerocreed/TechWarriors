<?php
class Model {

	private $con;

	function __construct($conexao) {
       $this->con = $conexao;
   }
  
    public function validaDados($codigo,$opiniao,$meio_pagamento,$atendimento,$satisfacao) {
			/* Aplica a validação ao usuário e senha passados, utilizando as regras de négocio especificas para ele. */
			if(strlen($codigo)<5){
				
				return 'Digite o usu&aacute;rio corretamente';
				
			}else if($meio_pagamento < 1 || $meio_pagamento > 5 || $atendimento < 1 || $atendimento > 5 || $satisfacao < 1 || $atendimento > 5){
				
				return 'Qualificação inválida';
				
			}else{
				include_once 'conexao.php';
				$con = new Conexao();

				insereAvaliacao($con, $codigo,$opiniao,$meio_pagamento,$atendimento,$satisfacao);
				return 'Avaliação Cadastrada com Sucesso!';
				
			}	
    }
}
?>