<!DOCTYPE html>
<head>
  <title>Login</title>
  <?php 
    include 'include/i_topo.php' ;
    session_start();

    if (isset($_SESSION['id_usuario']) && isset($_SESSION['email_usuario']) && ($_SESSION['tipo_usuario'] == 'comum')){
      header("location: usuario_pagina_inicial.php");
    }else if (isset($_SESSION['id_usuario']) && isset($_SESSION['email_usuario']) && ($_SESSION['tipo_usuario'] == 'administrador')){
    header("location: adm_pagina_inicial.php");
    }
  ?>
</head>
<body background="img/lixoseletronicos-atualize.jpg" style="background-repeat:no-repeat; opacity: 0.95; background-size: 100% 100%">
    <div>
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="customContainer" style="background-color: #1C1C1C;">
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
</body>   
    <?php include 'include/i_rodape.php' ?>
</html>