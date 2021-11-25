<?php 
    include 'include/valida_sessao_admin.php'
 ?>
<!DOCTYPE html>
  <head>
  	<title>Usuários</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
    <?php include 'include/i_topo_admin.php' ?>
		<div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm">
        <div id="scroll">
          <?php
              include 'include/conecta.php';
              include 'include/busca_pesquisa.php';
              if ($criterio=='tudo'){
                $query = "select * from tb_usuario";
              }else{
                $query = "select * from tb_usuario where ".$criterio." like '%".$chave."%'";
              }       
              $result = mysqli_query($db,$query);
              $num_results = mysqli_num_rows($result);
              echo '<center><h6>NÚMERO DE USUÁRIOS ENCONTRADOS ATRAVÉS CRITÉRIO ESCOLHIDO: '.$num_results.'</h6></center>';
          ?>
            <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">PERMISSÃO</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">EMAIL</th>
                <th scope="col" style="font-size: small;">DATA DE CADASTRO</th>
                <th scope="col" style="font-size: small;">TOTAL DE SUGESTÕES</th>
              </tr>
            </thead>
            <tbody>
              
              <?php
                for ($i=0; $i <$num_results; $i++)
                {
                    $row = mysqli_fetch_array($result);
                    echo '<tr><th scope="row">'.stripslashes($row[0]).'</th>';
                    echo '<td>'.stripslashes($row[1]).'</td>';
                    echo '<td>'.stripslashes($row[6]).'</td>';
                    echo '<td>'.stripslashes($row[2]).'</td>';
                    echo '<td>'.stripslashes($row[3]).'</td>';
                    echo '<td>'.stripslashes($row[5]).'</td>';
                    if ($row['tipo_usuario']=='comum'){
                      $total_sugestoes =  mysqli_num_rows(mysqli_query($db,"select * from tb_sugestao where id_usuario = $row[0]"));
                      echo '<td>'.($total_sugestoes).'</td>';
                    }
                    echo '</tr>';
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