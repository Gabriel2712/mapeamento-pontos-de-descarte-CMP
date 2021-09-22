<!DOCTYPE html>

<head>
  <title>Login</title>

  <?php include 'i_topo.php' ?>

</head>

<body>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('https://cdn.pixabay.com/photo/2018/10/09/09/59/mobile-phone-3734545_960_720.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading" style="padding:150px 0 100px">
            <h1>Faça Login para continuar</h1><br>
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
          <center><h2><p style="color: white">Login</p></h4></center>
          <div>
            <div>
              <input type="email" class="customInput" placeholder="example@mail.com" name="email" required data-validation-required-message="Por gentileza, digite o endereço completo do ponto." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
            <div>
              <input type="password" class="customInput" placeholder="*********" name="password" required data-validation-required-message="Por gentileza, digite o endereço completo do ponto." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          <br>
          <div class="form-group">
            <center><button type="submit" class="btn btn-primary" id="loginButton">Enviar</button></center>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/DescarteCmp">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/Gabriel2712/mapeamento-pontos-de-descarte-CMP">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; MapER 2021</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
