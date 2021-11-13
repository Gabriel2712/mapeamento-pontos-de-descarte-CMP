<?php
  session_start(); 

    include "include/conecta.php";

    if (isset($_POST['end_ponto']) && isset($_POST['tel_ponto'])
    && isset($_POST['descarte_ponto'])  && isset($_POST['desc_sugestao'])) {
      function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	  }

      $end_ponto= validate($_POST['end_ponto']);
      $tel_ponto=validate($_POST['tel_ponto']);
      $descarte_ponto=validate($_POST['descarte_ponto']);
      $desc_sugestao=validate($_POST['desc_sugestao']);
      $id_usuario = $_SESSION['id_usuario'];
      $data_sugestao = date('Y/m/d');
      
      $query= "insert into tb_sugestao(end_ponto, tel_ponto, descarte_ponto, desc_sugestao, status_sugestao, id_usuario, data_sugestao) values ('$end_ponto', '$tel_ponto', '$descarte_ponto', '$desc_sugestao', 'em análise', '$id_usuario', '$data_sugestao')";
      $result = mysqli_query($db,$query);

    if ($result) {
      header("Location: usuario_pagina_inicial.php?success=Enviado com sucesso, agradecemos sua contribuição :)");
      exit();
    }
  }else {
    header("Location: usuario_pagina_inicial.php?error=Erro desconhecido!");
    exit();
  }
