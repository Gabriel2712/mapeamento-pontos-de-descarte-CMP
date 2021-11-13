<?php 
    include 'include/valida_sessao_admin.php'
 ?>
<!DOCTYPE html>
  <head>
  	<title>Pesquisar usuários</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
  	<?php include 'include/i_topo_admin.php' ?>
		<div class="col-8">
			<div id="conteudo_adm">
			<center><h6>USUÁRIOS</h6></center>
				<form action="bd_adm_usuarios.php" method="post">
					Selecione um criterio de pesquisa: 
					<select name="criterio">
					<option value="tudo">Exibir todos os usuários</option>
					<option value="id_usuario">ID de um usuário</option>
					<option value="nome_usuario">Nome de usuário</option>
					<option value="tipo_usuario">Permissão de usuário</option>
					<option value="data_cadastro">Data de cadastro de um usuário</option>
					</select><br/>
					Digite o valor de busca:
					<input name="chave" type="text"><br/>
					<input type="submit" value="Pesquisar">
				</form>
				<br><br>
				Dicas:<br>
				- Caso escolher o critério para exibir todos os usuários, deixe o campo de busca em branco; <br>
				- Caso escolher o critério "permissão de usuário", escreva no campo: "comum" ou "administrador";<br>
				- Caso escolher o critério por data de cadastro, digitar com o seguinte formato "aaaa-mm-dd".

			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>