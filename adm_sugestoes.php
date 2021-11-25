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
	  <div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm"  style="padding: 1.5%;">
				<div id="scroll">
					<center><h5>SUGESTÕES</h5></center>
					<form action="bd_adm_sugestoes.php" method="post">
					Selecione um criterio de pesquisa: 
						<select name="criterio">
						<option value="status_sugestao">Status da sugestão</option>
						<option value="tudo">Exibir todas as sugestões</option>
						<option value="id_sugestao">ID de uma sugestão</option>
						<option value="id_usuario">ID de um usuário</option>
						<option value="data_sugestao">Data de uma sugestão</option>
						</select><br/>
						Digite o valor de busca:
						<input name="chave" type="text"><br/>
						<input type="submit" value="Pesquisar">
					</form>
					<br><br>
					<center><h6><hr>Informações essenciais:</h6></center>
					<p style="font-size: smaller; text-align: justify; text-justify: inter-word; margin-top: -0.3rem">					
					<ul style="margin-left:-0.5rem">
						<li>Caso escolher o critério para exibir todas as sugestões, deixe o campo de busca em branco;</li>
						<li>Caso escolher o critério de status da sugestão, escreva da seguinte maneira: "em análise, aceita, ou recusada"; </li>
						<li>Caso escolher o critério de data da sugestão, digitar com o seguinte formato "aaaa-mm-dd".</li>
					</ul>
					</p>
				</div>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>