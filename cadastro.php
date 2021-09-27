<!DOCTYPE html>

<head>
  <title>Cadastro</title>

  <?php include 'i_topo.php' ?>

</head>

<body>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/lixoseletronicos-atualize.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading" style="padding:150px 0 100px">
            <h1>FAÇA O CADASTRO PARA CONTINUAR</h1><br>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="customContainer">
    <div>
      <div class="col-lg-8 mx-auto">
        <form name="sentMessage" id="loginForm" method="POST" action="bd_cadastro.php">
              <h4><p style="color: white" align = "center">Cadastro</p></h4>
            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error']; ?></p>
     	      <?php } ?>

            <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
            <?php } ?>

          <div>
            <div>
              <label>Nome completo:</label>
                <input type="name" class="customInput" placeholder="fulano ciclano" name="nome_usuario" style="background-color: white">
            </div>
            <br>
            <div>
              <label>Email:</label>
                <input type="email" class="customInput" placeholder="example@mail.com" name="email_usuario" style="background-color: white">
            </div>
            <br>
            <div>
              <label>Telefone:</label>
                <input type="name" class="customInput" placeholder="(xx) xxxxx-xxxx" name="telefone_usuario" style="background-color: white">
            </div>
            <br>
            <div>
              <label>Senha:</label>
                <input type="password" class="customInput" placeholder="*********" name="senha_usuario"  style="background-color: white">
            </div>
            <br>
            <div>
              <label>Repita a senha:</label>
                <input type="password" class="customInput" placeholder="*********" name="senhaconfirma_usuario" style="background-color: white">
            </div>
            <p align="center"><font size="2">Já possui conta? <a href ="login.php" style="color: white">Clique para voltar ao login</a></font></p>
          <div class="form-group">
            <center><button type="submit" class="btn btn-primary" id="loginButton">Cadastrar</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <?php include 'i_rodape.php' ?>

</body>

</html>