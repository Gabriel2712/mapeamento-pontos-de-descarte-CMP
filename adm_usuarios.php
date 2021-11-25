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
	  <div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm"  style="padding: 1.5%">
				<div id="scroll">
					<center><h5>USUÁRIOS</h5></center>
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
				<center><h6><hr>Informações essenciais:</h6></center>
					<p style="font-size: smaller; text-align: justify; text-justify: inter-word; margin-top: -0.3rem">					
					<ul style="margin-left:-0.5rem">
						<li>Caso escolher o critério para exibir todos os usuários, deixe o campo de busca em branco;</li>
						<li>Caso escolher o critério de permissão do usuário, escreva da seguinte maneira: "comum" ou "administrador";</li>
						<li>Caso escolher o critério por data de cadastro, digitar com o seguinte formato "aaaa-mm-dd".</li>
					</ul>
					</p>
				</div>
			</div>
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>