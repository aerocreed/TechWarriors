<?php
class View {
    public function login($validacao) {
		//if(!isset($validacao)){
			
			/* Exibe o formulário de login, onde será realizada a requisição pelo usuário */
			include("formoid_verde1.php");
		//}else{
			
			/* Exibe o resultado da validação do login feita pela Model */
			//echo '<h3>'.$validacao.'</h3>';
		//}
	}
}

?>