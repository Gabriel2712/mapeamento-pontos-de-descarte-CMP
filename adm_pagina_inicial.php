<?php 
    include 'include/valida_sessao_admin.php'
 ?>

<!DOCTYPE html>
  <head>
  	<title>Visão geral</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
  	<?php include 'include/i_topo_admin.php'?>
		<div class="col-8">
			<div id="conteudo_adm">
			<center><h6>INFORMAÇÕES GERAIS</h6></center>
				<?php 
					include 'include/conecta.php';
					$query = "select * from tb_sugestao";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<hr>';
					echo '<b>Total de sugestões recebidas</b>: '.$num_results;
					$query = "select * from tb_sugestao where status_sugestao ='em análise'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<br>Para análise: '.$num_results;
					$query = "select * from tb_sugestao where status_sugestao ='aceita'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<br>Aceitas: '.$num_results;
					$query = "select * from tb_sugestao where status_sugestao ='recusada'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<br>Recusadas: '.$num_results;
					echo '<hr>';
					$query = "select * from tb_usuario where tipo_usuario='comum'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<b>Total de usuários comuns inscritos</b>: '.$num_results;
					echo '<hr>';
					$query = "select * from tb_usuario where tipo_usuario='administrador'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<b>Total de usuários administradores inscritos</b>: '.$num_results;
					echo '<hr>';
					mysqli_close($db);
				?>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>