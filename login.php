<!DOCTYPE html>

<head>
  <title>Login</title>

  <?php include 'i_topo.php' ?>

</head>

<body>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/lixoseletronicos-atualize.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading" style="padding:150px 0 100px">
          <h1>FAÇA O LOGIN</h1><br>
          <h4><span class="subheading">Assim você poderá contribuir com o bom funcionamento do sistema através de sugestões e feedbacks</span></h4><br>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="customContainer">
    <div>
      <div class="col-lg-8 mx-auto">
        <form name="sentMessage" id="loginForm" method="POST" action="bd_login.php">
          <center><h4><p style="color: white">Login</p></h4></center>
          <div>
            <div>
              <label>Email:</label>
                <input type="email" class="customInput" placeholder="example@mail.com" name="email" required data-validation-required-message="Por gentileza, digite o seu nome completo" style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <label>Senha: </label>
                <input type="password" class="customInput" placeholder="*********" name="password" required data-validation-required-message="Por gentileza, digite a sua senha" style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
            <p align="center"><font size="2">Não possui conta? <a href ="cadastro.php" style="color: white">Clique para se cadastrar </a></font></p>
          <div class="form-group">
            <center><button type="submit" class="btn btn-primary" id="loginButton">Enviar</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <?php include 'i_rodape.php' ?>

</body>

</html>
