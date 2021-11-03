<!DOCTYPE html>
<head>
  <title>Cadastro</title>
  <?php include 'include/i_topo.php' ?>
</head>
<body background="img/lixoseletronicos-atualize.jpg" style="background-repeat:no-repeat; opacity: 0.95; background-size: 100% 100%">  
    <div>
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="customContainer" style="background-color: #1C1C1C;">
          <form name="sentMessage" id="loginForm" method="POST" action="bd_cadastro.php">
                <h4><p style="color: white" align = "center">CADASTRO</p></h4>
              <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>
              <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
              <?php } ?>

            <div>
              <div>
                <label>Nome completo:</label>
                  <input type="name" class="customInput" placeholder="fulano ciclano" name="nome_usuario">
              </div>
              <br>
              <div>
                <label>Email:</label>
                  <input type="email" class="customInput" placeholder="example@mail.com" name="email_usuario">
              </div>
              <br>
              <div>
                <label>Telefone:</label>
                  <input type="name" class="customInput" placeholder="(xx) xxxxx-xxxx" name="telefone_usuario">
              </div>
              <br>
              <div>
                <label>Senha:</label>
                  <input type="password" class="customInput" placeholder="*********" name="senha_usuario">
              </div>
              <br>
              <div>
                <label>Repita a senha:</label>
                  <input type="password" class="customInput" placeholder="*********" name="senhaconfirma_usuario">
              </div>
              <br>
              <div>
                <label>Tipo de usuário:</label><br>
                <input type="radio" name="tipo_usuario" value="comum" style="background-color: white" onclick="javascript:myFunction()";  checked><label>&nbspComum</label>&nbsp&nbsp&nbsp
                <input type="radio" name="tipo_usuario" value="administrador" id="administrador" style="background-color: white" onclick="javascript:myFunction();"><label>&nbspAdministrador</label>
              </div>   
              <div id="div_chave" style="display: none;">
                  Chave para se tornar ADM:
                  <input type="password" id="txtEmail" name="chave_administrador" />
              </div>  
                <script>
                    function myFunction() {
                        var yes = document.getElementById("administrador");
                        var div_chave = document.getElementById("div_chave");
                        if (yes.checked === true) {
                            div_chave.style.display = "block";
                        } else {
                            div_chave.style.display = "none";
                        }
                    }
                </script>
              <p align="center"><font size="2">Já possui conta? <a href ="login.php" style="color: white">Clique para voltar ao login</a></font></p>
            <div class="form-group">
              <center><button type="submit" class="btn btn-primary" id="loginButton">Cadastrar</button></center>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
</body>
    <?php include 'include/i_rodape.php' ?>
</html>