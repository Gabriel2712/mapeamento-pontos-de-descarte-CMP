<?php 

	//@ $db = mysqli_connect('localhost','root','ifsp','bd_mapeamento'); ESSE É NA ESCOLA
		
	@ $db = mysqli_connect('localhost','root','');
		  if (!$db)
		  {
			 echo 'Não foi possível conectar ao Banco de Dados';
			 exit;
		  }
		  mysqli_select_db($db,'bd_mapeamento');
?>