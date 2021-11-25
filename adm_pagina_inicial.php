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
	  <div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm"  style="padding: 1.5%;">
				<div id="scroll">
					<center><h5>INFORMAÇÕES GERAIS</h5></center>
					<?php 
						include 'include/conecta.php';
						$query = "select * from tb_sugestao";
						$result = mysqli_query($db,$query);
						$num_results = mysqli_num_rows($result);
						echo '<hr>';
						echo '<h6>Total de sugestões recebidas: '.$num_results.'</h6>';
						$query = "select * from tb_sugestao where status_sugestao ='em análise'";
						$result = mysqli_query($db,$query);
						$num_results = mysqli_num_rows($result);
						echo 'Para análise: '.$num_results;
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
						echo '<h6>Total de usuários comuns inscritos: '.$num_results."</hr>";
						echo '<hr>';
						$query = "select * from tb_usuario where tipo_usuario='administrador'";
						$result = mysqli_query($db,$query);
						$num_results = mysqli_num_rows($result);
						echo '<h6>Total de usuários administradores inscritos: '.$num_results."</hr>";
						echo '<hr>';
						mysqli_close($db);
					?>
				</div>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>