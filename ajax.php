<?php 
	if(isset($_POST['nome']) && $_POST['senha']) {

		echo $_POST['nome'];
		echo $_POST['senha'];
	} 
	else {
		echo 'Não recebemos dados nenhum';
	}


?>