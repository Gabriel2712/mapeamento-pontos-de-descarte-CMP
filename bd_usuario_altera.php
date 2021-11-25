<?php 
    include 'include/valida_sessao_usuario.php'
?>
<!DOCTYPE html>
<head>
  <title>Usuário</title>
  <?php include 'include/i_topo.php' ?>
</head>
<body>
      <div class="row"> 
          <div id="topo_adm">
            <h4>PAINEL DO USUÁRIO</h4>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div id="user">
          <h6>Nome: <?php echo $_SESSION['nome_usuario']; ?>
            <u><a href="logout.php"><br>SAIR DA CONTA</a></u></h6>
		    </div>
      </div>
      <div class="row">     
        <div class="col">
          <div id="barra_lateral_user">
            <ul>
              <li style="margin-top: 1rem;"> <a href= "usuario_pagina_inicial.php">Minhas sugestões</a> </li><hr>
              <li><a href = "usuario_dados_pessoais.php">Dados da conta</a></li><hr>
            </ul>
          </div>
        </div>
        <div class="col-lg-9 col-md-10 mx-auto">
          <div id="conteudo_adm">
            <div id="scroll">
              <?php
                  include 'include/conecta.php';
                  include 'include/busca_pesquisa.php';

                  $query = "UPDATE tb_usuario SET $criterio = '$chave' WHERE id_usuario = ".$_SESSION['id_usuario'];
                  $result = mysqli_query($db, $query);
                  
                  if(mysqli_affected_rows($db)>0){
                  echo 'Informação alterada com sucesso!<br> <u><a href= "usuario_dados_pessoais.php" style="color: darkblue">Voltar</a></u>';
                  }
                  mysqli_close($db);
              ?>
            </div>
          </div><br><br>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <form name="sentMessage" id="contactForm" method="POST" action="bd_usuario_sugestao.php">
            <center><h4>FORMULÁRIO PARA ENVIO DE NOVA SUGESTÃO: </h4></center>
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
</body>
  <?php include 'include/i_rodape.php' ?>
</html>
