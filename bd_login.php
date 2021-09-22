<!DOCTYPE html>

<head>
  <title>Atualização dos pontos</title>

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

  <?php
      $email= $_POST['email'];
      $password=$_POST['password'];

      
    include 'conecta.php';

    $query = "select * from tb_login where email = 'admin@admin.com' and senha = md5('admin123')"; 
    $result = mysqli_query($db,$query);

    $row = mysqli_num_rows($result);

    if($row == 1){
      header('Location: admin.php');
      exit();
    }else{
      header('Location: visitante.php');
      exit();
    }
    ?>


  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="#">
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
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Your Website 2019</p>
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
