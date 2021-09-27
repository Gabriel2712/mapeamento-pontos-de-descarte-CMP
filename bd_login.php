<?php 
session_start(); 
include "conecta.php";

if (isset($_POST['email_usuario']) && isset($_POST['senha_usuario'])) {

	function validate($data){
     $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	  }

	$email_usuario = validate($_POST['email_usuario']);
	$senha_usuario = validate($_POST['senha_usuario']);

	if (empty($email_usuario)) {
		header("Location: login.php?error=É necessário colocar o email");
	    exit();
	}else if(empty($senha_usuario)){
        header("Location: login.php?error=É necessário colocar o email");
	    exit();
	}else{
        $senha_usuario = md5($senha_usuario);

        
		$sql = "SELECT * FROM tb_usuario WHERE email_usuario='$email_usuario' AND senha_usuario='$senha_usuario'";

		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email_usuario'] === $email_usuario && $row['senha_usuario'] === $senha_usuario) {
            	$_SESSION['email_usuario'] = $row['email_usuario'];
            	$_SESSION['nome_usuario'] = $row['nome_usuario'];
            	$_SESSION['id_usuario'] = $row['id_usuario'];
            	header("Location: visitante.php");
		        exit();
            }else{
				header("Location: login.php?error=Email ou senha incorretos!");
		        exit();
			}
		}else{
			header("Location: login.php?error=Email ou senha incorretos!");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}