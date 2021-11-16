<?php 
    include 'include/valida_sessao_admin.php'
 ?>
<!DOCTYPE html>
  <head>
  	<title>Pesquisar sugestões</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
  	<?php include 'include/i_topo_admin.php' ?>
		<div class="col-8">
			<div id="conteudo_adm">
			<center><h6>SUGESTÕES</h6></center>
				<form action="bd_adm_sugestoes.php" method="post">
				Selecione um criterio de pesquisa: 
					<select name="criterio">
					<option value="tudo">Exibir todas as sugestões</option>
					<option value="status_sugestao">Status da sugestão</option>
					<option value="id_sugestao">ID de uma sugestão</option>
					<option value="id_usuario">ID de um usuário</option>
					<option value="data_sugestao">Data de uma sugestão</option>
					</select><br/>
					Digite o valor de busca:
					<input name="chave" type="text"><br/>
					<input type="submit" value="Pesquisar">
				</form>
				<br><br>
				Dicas:<br>
				- Caso escolher o critério para exibir todas as sugestões, deixe o campo de busca em branco; <br>
				- Caso escolher o critério de status da sugestão, escreva uma das três possibilidades da seguinte maneira: "em análise, aceita, ou recusada"; <br>
				- Caso escolher o critério de data da sugestão", digitar com o seguinte formato "aaaa-mm-dd".
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>