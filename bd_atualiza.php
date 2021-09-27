<?php
  session_start(); 

    include "conecta.php";

    if (isset($_POST['end_ponto']) && isset($_POST['tel_ponto'])
    && isset($_POST['descarte_ponto'])  && isset($_POST['desc_ponto'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
	  }

      $end_ponto= validate($_POST['end_ponto']);
      $tel_ponto=validate($_POST['tel_ponto']);
      $descarte_ponto=validate($_POST['descarte_ponto']);
      $desc_ponto=validate($_POST['desc_ponto']);
      $id_usuario = $_SESSION['id_usuario'];
      
    $query= "insert into tb_ponto(end_ponto, tel_ponto, descarte_ponto, desc_ponto, id_usuario) values ('$end_ponto', '$tel_ponto', '$descarte_ponto', '$desc_ponto', '$id_usuario')";
    $result = mysqli_query($db,$query);

    if ($result) {
      header("Location: visitante.php?success=Enviado com sucesso, agradecemos sua contribuição :)");
      exit();
    }
  }else {
    header("Location: visitante.php?error=Erro desconhecido!");
    exit();
  }
?>