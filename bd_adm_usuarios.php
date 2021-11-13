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
		<div class="col-8">
			<div id="conteudo_adm">
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
                echo '<br>NÚMERO DE USUÁRIOS ENCONTRADOS ATRAVÉS CRITÉRIO ESCOLHIDO: '.$num_results. "<br><hr>";
                for ($i=0; $i <$num_results; $i++)
                {
                    $row = mysqli_fetch_array($result);
                    echo 'ID do usuário: ';
                    echo stripslashes($row[0]);
                    echo '<br>Nome: ';
                    echo stripslashes($row[1]);
                    echo '<br>Permissão do usuario: ';
                    echo stripslashes($row[6]);
                    echo '<br />Telefone: ';
                    echo stripslashes($row[2]);
                    echo '<br />Email: ';
                    echo stripslashes($row[3]);
                    echo '<br />Data de cadastro: ';
                    echo stripslashes($row[5]);
                    if ($row['tipo_usuario']=='comum'){
                      $total_sugestoes =  mysqli_num_rows(mysqli_query($db,"select * from tb_sugestao where id_usuario = $row[0]"));
                      echo '<br />Total de sugestões: ';
                      echo ($total_sugestoes);
                    }
                    echo '<hr><br>';
              }
              mysqli_close($db);
          ?>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>