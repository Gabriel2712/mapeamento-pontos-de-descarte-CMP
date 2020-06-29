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

  </header>

  <?php
  // dados do visitante 
      $nome=$_POST['nome'];
      $email=$_POST['email'];
      $telefonev=$_POST['telefonevisitante'];

  // dados do ponto 
      $endereco=$_POST['endereco'];
      $telefonep=$_POST['telefoneponto'];
      $descarte=$_POST['tipoponto'];
      $descricao=$_POST['descricao'];


      
    include 'conecta.php';

    $query = "insert into tb_visitante(nome_vst, email_vst, tel_vst) values ('$nome', '$email','$telefonev')"; 

    $query2= "insert into tb_ponto(end_ponto, tel_ponto, descarte_ponto, desc_ponto) values ('$endereco', '$telefonep', '$descarte', '$descricao')";

      $result = mysqli_query($db,$query);
      $result2 = mysqli_query($db,$query2);

      if ($result && $result2)
     echo '<br><center>Informações sobre o ponto enviadas aos administradores!</center><br><u><center><a href="atualizacao.php"  style="color: white"> Preencher formulário sobre outro ponto.</a></center></u><br><br><br>'; 


      else
      echo mysqli_error($db).'<br>';
      mysqli_close($db);
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
