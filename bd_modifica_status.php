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
	<div class="col-lg-9 col-md-10 mx-auto">
		<div id="conteudo_adm">
            <div id="scroll">
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
                    echo '&nbsp&nbspInformação alterada com sucesso!<br>&nbsp&nbsp<u><a href= "adm_sugestoes.php" style="color: darkblue">Voltar</a></u>';
                    }else{
                    echo '&nbsp&nbspAlteração não realizada, ID de sugestão inexistente ou já apresenta o status desejado!<br>&nbsp&nbsp<u><a href= "adm_sugestoes.php" style="color: darkblue">Voltar</a></u>';    
                    }
                    mysqli_close($db);
                ?>
            </div>
        </div>
    </div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>
