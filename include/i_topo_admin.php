    <div class="row">
      <div id="topo_adm">
        <h3>PAINEL DE ADMINISTRAÇÃO</h3>
      </div>
    </div>
    <div class="row justify-content-md-center"> 
      <div id="user">
      <h6>Administrador: <?php echo $_SESSION['nome_usuario']; ?>
      <br><u><a href="logout.php">SAIR DA CONTA</a></u></h6>
      </div>
    </div>
    <div class="row">      
      <div class="col">
        <div id="barra_lateral_adm">
          <ul>
            <li style="margin-top: 1rem;"> <a href= "adm_pagina_inicial.php">Visão geral</a> </li><hr>
            <li> <a href= "adm_sugestoes.php">Sugestões</a> </li><hr>
            <li> <a href= "adm_usuarios.php">Usuários</a> </li><hr>
            <li> <a href= "adm_apaga.php">Apagar registro(s)</a> </li><hr>
            <li><a href = "adm_dados_pessoais.php">Dados da conta</a></li><hr>
          </ul>
        </div>
      </div>