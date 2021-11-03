<?php 
    include 'include/valida_sessao_admin.php'
 ?>

<!DOCTYPE html>
  <head>
  	<title>Apagar dados</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
  	<?php include 'include/i_topo_admin.php' ?>
		<div class="col-8">
			<div id="conteudo_adm">
				<center><h6>EXCLUSÃO DE REGISTROS</h6></center>
				<form action="bd_adm_apaga.php" method="post">
				Você deseja apagar um(a): 
					<select name="criterio">
						<option value="usuario">Usuário</option>
						<option value="sugestao">Sugestão</option>
					</select><br/>
					Digite o ID correspondente ao alvo selecionado:
					<input name="chave" type="text"><br/>
					<input type="submit" value="Apagar">
				</form>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>