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
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <center><h4><p style="color: white">Informações do visitante:</p></h4></center>
        <form name="sentMessage" id="contactForm" method="POST" action="bd_atualiza.php">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Nome</label>
              <input type="text" class="form-control" placeholder="Nome" name="nome" required data-validation-required-message="Por gentileza, digite seu nome." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Email</label>
              <input type="email" class="form-control" placeholder="Email" name="email" required data-validation-required-message="Por gentileza, digite seu email." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <br><label>Número de telefone</label>
              <input type="tel" class="form-control" placeholder="Telefone" name="telefonevisitante" style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <br><center><h4><p style="color: white">Informações sobre o ponto:</p></h4></center>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Endereço</label>
              <input type="text" class="form-control" placeholder="Endereço (nº, rua, e bairro)" name="endereco" required data-validation-required-message="Por gentileza, digite o endereço completo do ponto." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>

            <div class="form-group col-xs-12 floating-label-form-group controls">
              <br><label>Número de telefone</label>
              <input type="tel" class="form-control" placeholder="Telefone" name="telefoneponto" required data-validation-required-message="Por gentileza, digite seu número." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>

            <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Tipo de descarte</label>
              <input type="text" class="form-control" placeholder="Tipo de descarte (recicláveis, eletrônicos, ou ambos)" name="tipoponto" required data-validation-required-message="Por gentileza, digite o tipo de descarte." style="background-color: white">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <br><label>Descrição</label>
              <textarea rows="5" class="form-control" placeholder="Descrição sobre o que necessita ser feito (adicionar, remover, ou alterar) em relação ao ponto" name="descricao" required data-validation-required-message="Por gentileza, Coloque a descrição." style="background-color: white"></textarea>
              <p class="help-block text-danger"></p>
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
          <p class="copyright text-muted">Copyright &copy; MapER 2020</p>
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
