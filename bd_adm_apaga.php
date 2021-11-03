<?php
include 'include/valida_sessao_admin.php'
?>

<!DOCTYPE html>

<head>
	<title>Dados apagados</title>
	<?php include 'include/i_topo.php' ?>
</head>

<body>
	<?php include 'include/i_topo_admin.php' ?>
	<div class="col-8">
		<div id="conteudo_adm">
			<?php
			include 'include/conecta.php';
			include 'include/busca_pesquisa.php';
			if ($criterio == 'usuario') {
				$query = "DELETE From tb_usuario where id_usuario = '$chave'";
				$result = mysqli_query($db, $query);
				echo mysqli_affected_rows($db) . ' usuário exlcuído com sucesso';
				mysqli_close($db);
			} else if ($criterio == 'sugestao') {
				$query = "DELETE From tb_sugestao where id_sugestao = '$chave'";
				$result = mysqli_query($db, $query);
				echo mysqli_affected_rows($db) . ' sugestão exlcuída com sucesso';
				mysqli_close($db);
			}
			?>
		</div>
	</div>
	</div>
</body>
<?php include 'include/i_rodape.php' ?>

</html>