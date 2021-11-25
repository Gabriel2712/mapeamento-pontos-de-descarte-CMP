<?php 
    include 'include/valida_sessao_admin.php'
 ?>
<!DOCTYPE html>
  <head>
  	<title>Sugestões</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
    <?php include 'include/i_topo_admin.php' ?>
		<div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm">
        <div id="scroll">
            <form action="bd_modifica_status.php" method="post">
            <center><h6>VALIDAÇÃO</h6></center>
            <p style="margin-top: 0; margin-bottom:-0.2rem">Modificar o status da sugestão de ID:
              <input name="chave" type="text">
            para: 
              <select name="criterio">
              <option value="aceita">aceita</option>
              <option value="em_analise">em análise</option>
              <option value="recusada">recusada</option>
              </select>&nbsp
              <input type="submit" value="Efetuar">  </p>
            </form>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
              <?php } ?>
              <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
              <?php } ?>
              <?php
                  include 'include/conecta.php';
                  include 'include/busca_pesquisa.php';
                  if ($criterio=='tudo'){
                    $query = "select * from tb_sugestao";
                  }else{
                    $query = "select * from tb_sugestao where ".$criterio." like '%".$chave."%'";
                  }
                  $result = mysqli_query($db,$query);
                  $num_results = mysqli_num_rows($result);
                  echo '<center><h6><hr>NÚMERO DE SUGESTÕES ENCONTRADAS ATRAVÉS DO CRITÉRIO ESCOLHIDO: '.$num_results.'</h6></center>';
              ?>
                <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ENDEREÇO</th>
                    <th scope="col">TELEFONE</th>
                    <th scope="col">DESCARTE</th>
                    <th scope="col">DESCRIÇÃO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">DATA</th>
                    <th scope="col" style="font-size: small;">ID E NOME DO USUÁRIO</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php
                    for ($i=0; $i <$num_results; $i++)
                    {
                        $row = mysqli_fetch_array($result);
                        echo '<tr><th scope="row">'.stripslashes($row[0]).'</th>';
                        echo '<td>'.stripslashes($row[1]).'</td>';
                        echo '<td>'.stripslashes($row[2]).'</td>';
                        echo '<td>'.stripslashes($row[3]).'</td>';
                        echo '<td>'.stripslashes($row[4]).'</td>';
                        echo '<td>'.stripslashes($row[5]).'</td>';
                        echo '<td>'.stripslashes($row[6]).'</td>';
                        $nome_usuario = mysqli_query($db,'select nome_usuario from tb_usuario where id_usuario = '.$row[7]);
                        $row2 = mysqli_fetch_array($nome_usuario);
                        echo '<td>'.stripslashes($row[7]);
                        echo ', ';
                        echo stripslashes($row2['nome_usuario']).'</td></tr>';
                    }
                    mysqli_close($db);
                  ?>
                </tbody>
              </table>
        </div>
			</div>
    </div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>