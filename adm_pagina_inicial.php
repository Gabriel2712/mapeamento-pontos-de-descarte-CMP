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
					echo '<br>NÚMERO TOTAL DE SUGESTÕES: '.$num_results. "<br>";
					echo '--------------------------------------------------------------';
					$query = "select * from tb_usuario where tipo_usuario='comum'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<br>NÚMERO TOTAL DE USUÁRIOS COMUNS: '.$num_results. "<br>";
					echo '--------------------------------------------------------------';
					$query = "select * from tb_usuario where tipo_usuario='administrador'";
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);
					echo '<br>NÚMERO TOTAL DE ADMINISTRADORES: '.$num_results. "<br>";
					echo '--------------------------------------------------------------';
					
					mysqli_close($db);
				?>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>