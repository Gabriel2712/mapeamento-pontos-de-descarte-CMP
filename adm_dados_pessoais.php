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
		<div class="col-8">
			<div id="conteudo_adm">
			<center><h6>DADOS DA CONTA</h6></center>
			<?php
              include 'include/conecta.php';

                $query = "select * from tb_usuario where id_usuario = ".$_SESSION['id_usuario'];      
                $result = mysqli_query($db,$query);
                $num_results = mysqli_num_rows($result);

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
                    echo '<hr><br>';
              		mysqli_close($db);
          	?>
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
		</div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>