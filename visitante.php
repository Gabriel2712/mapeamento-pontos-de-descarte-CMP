<?php 
session_start();

if (isset($_SESSION['id_usuario']) && isset($_SESSION['email_usuario'] )) {
 ?>

<!DOCTYPE html>

<head>
  <title>Atualização dos pontos</title>

  <?php include 'i_topo.php' ?>

</head>

<body>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://static.pexels.com/photos/69381/nasa-earth-map-night-69381.jpeg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading" style="padding:150px 0 100px">
            <h1>Atualizando...</h1><br>
            <span class="subheading">Conhece algum ponto que não está cadastrado? algum que não está mais operando? algum com informações incorretas? <p>Nos informe para podermos corrigir.</p></span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="customContainer"> 
    <center><h6>Bem vindo, <?php echo $_SESSION['nome_usuario']; ?></h6>
    <h6><u><a href="logout.php" style="color: white; it">Logout</a></u></h6><center>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <form name="sentMessage" id="contactForm" method="POST" action="bd_atualiza.php">
          <center><h4><p style="color: white">Informações sobre o ponto:</p></h4></center>
          <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Endereço</label>
              <input type="text" class="form-control" placeholder="Endereço (nº, rua, e bairro)" name="end_ponto" style="background-color: white">
            </div>

            <div class="form-group col-xs-12 floating-label-form-group controls">
              <br><label>Número de telefone</label>
              <input type="tel" class="form-control" placeholder="Telefone" name="tel_ponto" style="background-color: white">
            </div>

            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Tipo de descarte</label>
              <input type="text" class="form-control" placeholder="Tipo de descarte (recicláveis, eletrônicos, ou ambos)" name="descarte_ponto" style="background-color: white">
            </div>
          </div>

          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Descrição</label>
              <textarea rows="5" class="form-control" placeholder="Descrição sobre o que necessita ser feito (adicionar, remover, ou alterar) em relação ao ponto" name="desc_ponto" style="background-color: white"></textarea>
            </div>
          </div>
          <br>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <?php include 'i_rodape.php' ?>
  <?php 
    }else{
        header("Location: login.php");
        exit();
    }
  ?>
</body>
</html>
