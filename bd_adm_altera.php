<?php
include 'include/valida_sessao_admin.php'
?>
<!DOCTYPE html>
<head>
	<title>Dados modificados</title>
	<?php include 'include/i_topo.php' ?>
</head>

<body>
	<?php include 'include/i_topo_admin.php' ?>
	<div class="col-8">
		<div id="conteudo_adm">
			<?php
			include 'include/conecta.php';
			include 'include/busca_pesquisa.php';

			$query = "UPDATE tb_usuario SET $criterio = '$chave' WHERE id_usuario = ".$_SESSION['id_usuario'];
			$result = mysqli_query($db, $query);
			
            if(mysqli_affected_rows($db)>0){
            echo 'Informação alterada com sucesso <u><a href= "adm_sugestoes.php" style="color: darkblue">Voltar</a></u>';
            }
			mysqli_close($db);
			?>
		</div>
	</div>
	</div>
</body>
<?php include 'include/i_rodape.php' ?>

</html>