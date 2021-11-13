<?php 
    include 'include/valida_sessao_usuario.php'
?>
<!DOCTYPE html>
<head>
  <title>Usuário</title>
  <?php include 'include/i_topo.php' ?>
</head>
<body>
  <!-- Page Header -->
  <header class="masthead" style="background-color: #708090; margin:0">
      <div class="row"> 
          <div id="topo_adm">
            <b>Página do usuário</b>
          </div><br>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div id="user">
          <h6>Usuário: <?php echo $_SESSION['nome_usuario']; ?>
            <u><a href="logout.php" style="color: white"><br>SAIR DA CONTA</a></u></h6>
		    </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
          <center><h4>Minhas sugestões: </h4><br></center>
            <div id="conteudo_adm" style="margin-left: 4%;">
              <?php
                  include 'include/conecta.php';
                  $query = "select * from tb_sugestao where id_usuario = ".$_SESSION['id_usuario'];
                  $result = mysqli_query($db,$query);
                  $num_results = mysqli_num_rows($result);
                  echo '<br>NÚMERO DE SUGESTÕES SUBMETIDAS: '.$num_results."<br><hr>";

                  for ($i=0; $i <$num_results; $i++)
                  {
                      $row = mysqli_fetch_array($result);
                      echo 'ID da sugestão: ';
                      echo stripslashes($row[0]);
                      echo '<br>Endereço do ponto: ';
                      echo stripslashes($row[1]);
                      echo '<br />Telefone do ponto: ';
                      echo stripslashes($row[2]);
                      echo '<br />Tipo de descarte atual: ';
                      echo stripslashes($row[3]);
                      echo '<br />Descrição da sugestão: ';
                      echo stripslashes($row[4]);
                      echo '<br />Status da sugestão: ';
                      echo stripslashes($row[5]);
                      echo '<br />Data de envio: ';
                      echo stripslashes($row[6]);
                      echo '<hr>';
                  }
                  mysqli_close($db);
              ?>
            </div><br><br>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <form name="sentMessage" id="contactForm" method="POST" action="bd_usuario_sugestao.php">
              <center><h4>Insira as informações para uma nova sugestão: </h4></center>
                <?php if (isset($_GET['success'])) { ?>
                  <p class="success"><?php echo $_GET['success']; ?></p>
                <?php }else if (isset($_GET['error'])){ ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                  <?php } ?>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <br><label>Endereço</label>
                  <input type="text" class="form-control" placeholder="Endereço do ponto (nº, rua, e bairro)" name="end_ponto" style="background-color: white" required>
                </div>

                <div class="form-group col-xs-12 floating-label-form-group controls">
                  <br><label>Número de telefone do local</label>
                  <input type="tel" class="form-control" placeholder="Telefone" name="tel_ponto" style="background-color: white" required>
                </div>

                <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <br><label>Tipo de descarte</label>
                  <input type="text" class="form-control" placeholder="Resíduos permitidos para descarte (recicláveis, eletrônicos, ou ambos)" name="descarte_ponto" style="background-color: white" required>
                </div>
              </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                  <br><label>Descrição</label>
                  <textarea rows="5" class="form-control" placeholder="Descrição sobre o que necessita ser feito (adicionar, remover, ou alterar) em relação ao ponto" name="desc_sugestao" style="background-color: white" required></textarea>
                </div>
              </div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
              </div>
            </form>
            <br><br> 
          </div>
        </div>
  </header>
</body>
</html>
