<!DOCTYPE html>

<head>
  <title>Login</title>

  <?php include 'i_topo.php' ?>

</head>

<body background="img/lixoseletronicos-atualize.jpg" style="background-repeat:no-repeat; opacity: 0.95; background-size: 100% 100%">
<br>
  <div class="customContainer" style="background-color: #1C1C1C;">
    <div>
      <div class="col-lg-8 mx-auto">
        <form name="sentMessage" id="loginForm" method="POST" action="bd_login.php">
          <center><h4><p style="color: white">LOGIN</p></h4>
          <p style="font-size: small; margin-top: -1.4rem">Entre com sua conta para poder contribuir conosco!</p>
          </center>
            <?php if (isset($_GET['error'])) { ?>
     		      <p class="error"><?php echo $_GET['error']; ?></p>
     	      <?php } ?>
          <div>
            <div>
              <label>Email:</label>
                <input type="email" class="customInput" placeholder="example@mail.com" name="email_usuario" style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <label>Senha: </label>
                <input type="password" class="customInput" placeholder="*********" name="senha_usuario" style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
            <p align="center"><font size="2">Não possui conta? <a href ="cadastro.php" style="color: white">Clique para se cadastrar </a></font></p>
          <div class="form-group">
            <center><button type="submit" class="btn btn-primary" id="loginButton">Entrar</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <?php include 'i_rodape.php' ?>

</body>

</html>