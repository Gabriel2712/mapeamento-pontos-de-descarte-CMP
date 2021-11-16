<?php 
    include 'include/valida_sessao_admin.php'
 ?>
<!DOCTYPE html>
  <head>
  	<title>Sugestões</title>
		<?php include 'include/i_topo.php'?>
  </head>
  <body>
    <?php include 'include/i_topo_admin.php' ?>
		<div class="col-8">
			<div id="conteudo_adm">
            <?php
                include 'include/conecta.php';
                include 'include/busca_pesquisa.php';
                if ($criterio == 'em_analise'){
                    $query = "UPDATE tb_sugestao SET status_sugestao = 'em análise' WHERE id_sugestao = $chave";
                }else if ($criterio == 'aceita'){
                    $query = "UPDATE tb_sugestao SET status_sugestao = 'aceita' WHERE id_sugestao = $chave";
                }else if ($criterio == 'recusada'){
                    $query = "UPDATE tb_sugestao SET status_sugestao = 'recusada' WHERE id_sugestao = $chave";
                }
                $result = mysqli_query($db, $query);
                
                if(mysqli_affected_rows($db)>0){
                echo 'Informação alterada com sucesso<br><u><a href= "adm_sugestoes.php" style="color: darkblue">Voltar</a></u>';
                }
                mysqli_close($db);
            ?>
        </div>
    </div>
    </div>

  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>