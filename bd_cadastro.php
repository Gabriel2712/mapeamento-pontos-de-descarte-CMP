<?php 
session_start(); 
include "conecta.php";

if (isset($_POST['email_usuario']) && isset($_POST['senha_usuario'])
    && isset($_POST['nome_usuario'])  && isset($_POST['senhaconfirma_usuario'])
	&& isset($_POST['tipo_usuario']) && isset($_POST['chave_administrador'])) {

    $nome_usuario = $_POST['nome_usuario'];
	$email_usuario = $_POST['email_usuario'];
	$senha_usuario = $_POST['senha_usuario'];
	$senhaconfirma_usuario = $_POST['senhaconfirma_usuario'];
	$telefone_usuario = $_POST['telefone_usuario'];
	$tipo_usuario = $_POST['tipo_usuario'];
	$chave_administrador = $_POST['chave_administrador'];


	if (empty($email_usuario)) {
		header("Location: cadastro.php?error=É necessário digitar o email!");
	    exit();
	}else if(empty($senha_usuario)){
        header("Location: cadastro.php?error=É necessário digitar uma senha!");
	    exit();
	}
	else if(empty($senhaconfirma_usuario)){
        header("Location: cadastro.php?error=É necessário confirmar a senha!");
	    exit();
	}

	else if(empty($nome_usuario)){
        header("Location: cadastro.php?error=É necessário digitar seu nome!");
	    exit();
	}
	else if($senha_usuario !== $senhaconfirma_usuario){
        header("Location: cadastro.php?error=As senhas digitadas não conferem!");
	    exit();
	}else if($tipo_usuario == 'administrador' && empty($chave_administrador)){
        header("Location: cadastro.php?error=É necessário colocar a chave para se tornar administrador! ");
	    exit();
	}else if($tipo_usuario == 'administrador' && md5($chave_administrador)!= md5('administrador123')){
        header("Location: cadastro.php?error=A chave para se tornar administrador está incorreta! ");
	    exit();
	}else{

        $senha_usuario = md5($senha_usuario);

	    $sql = "SELECT * FROM tb_usuario WHERE email_usuario='$email_usuario' ";
		$result = mysqli_query($db, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: cadastro.php?error=Email já cadastrado!");
	        exit();
		}else {
           $sql2 = "INSERT INTO tb_usuario(nome_usuario, telefone_usuario, email_usuario, senha_usuario, tipo_usuario) VALUES('$nome_usuario', '$telefone_usuario', '$email_usuario', '$senha_usuario', '$tipo_usuario')";
           $result2 = mysqli_query($db, $sql2);
           if ($result2) {
           	 header("Location: cadastro.php?success=Sua conta foi criada com sucesso");
	         exit();
           }else {
	           	header("Location: cadastro.php?error=Erro desconhecido!");
		        exit();
           }
		}
	}
	
}else{
	header("Location: cadastro.php");
	exit();
}