<?php 
    include 'include/valida_sessao_admin.php'
 ?>

<!DOCTYPE html>
  <head>
  	<title>Dados pessoais</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
  	<?php include 'include/i_topo_admin.php' ?>
	    <div class="col-lg-9 col-md-10 mx-auto">
			<div id="conteudo_adm">
				<div id="scroll">
				<center><h5>MEUS DADOS PESSOAIS</h5></center>
				<?php
					include 'include/conecta.php';

					$query = "select * from tb_usuario where id_usuario = ".$_SESSION['id_usuario'];      
					$result = mysqli_query($db,$query);
					$num_results = mysqli_num_rows($result);

				?>
				<table class="table">
					<thead class="thead-dark">
					<tr>
						<th scope="col">ID</th>
						<th scope="col">NOME</th>
						<th scope="col">PERMISSÃO</th>
						<th scope="col">TELEFONE</th>
						<th scope="col">EMAIL</th>
						<th scope="col">DATA DE CADASTRO</th>
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
							echo '<td>'.stripslashes($row[5]).'</td></tr>';
						}
						mysqli_close($db);
					?>
					</tbody>
				</table><hr>
					<center><h6>ALTERAR DADOS</h6></center>
					<form action="bd_adm_altera.php" method="post">
					Selecione uma informação a ser alterada: 
					<select name="criterio">
					<option value="nome_usuario">Nome</option>
					<option value="telefone_usuario">Telefone</option>
					<option value="email_usuario">Email</option>
					<option value="senha_usuario">Senha</option>
					</select><br/>
					Digite um novo valor para o campo:
					<input name="chave" type="text"><br/>
					<input type="submit" value="Alterar">
					</form>
				</div>
            </div><br><br>
        </div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>