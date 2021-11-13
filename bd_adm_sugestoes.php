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
          <form action="bd_modifica_status.php" method="post">
          <b>Validação</b><br>
          Digite o id da sugestão:
            <input name="chave" type="text"><br/>
          Modificar status para: 
            <select name="criterio">
            <option value="aceita">aceita</option>
            <option value="em_analise">em análise</option>
            <option value="recusada">recusada</option>
            </select><br/>
            <input type="submit" value="Modificar">  
          </form>
          <hr>
            <?php
                include 'include/conecta.php';
                include 'include/busca_pesquisa.php';
                if ($criterio=='tudo'){
                  $query = "select * from tb_sugestao";
                }else{
                  $query = "select * from tb_sugestao where ".$criterio." like '%".$chave."%'";
                }
                $result = mysqli_query($db,$query);
                $num_results = mysqli_num_rows($result);
                echo 'NÚMERO DE SUGESTÕES ENCONTRADAS ATRAVÉS DO CRITÉRIO ESCOLHIDO: '.$num_results."<br><hr>";
                for ($i=0; $i <$num_results; $i++)
                {
                    $row = mysqli_fetch_array($result);
                    echo 'ID da sugestão: ';
                    echo stripslashes($row[0]);
                    echo '<br>Endereço do ponto: ';
                    echo stripslashes($row[1]);
                    echo '<br />Telefone do ponto: ';
                    echo stripslashes($row[2]);
                    echo '<br />Tipo de descarte atual: ';
                    echo stripslashes($row[3]);
                    echo '<br />Descrição da sugestão: ';
                    echo stripslashes($row[4]);
                    echo '<br />Status da sugestão: ';
                    echo stripslashes($row[5]);
                    echo '<br />Data de envio: ';
                    echo stripslashes($row[6]);
                    $nome_usuario = mysqli_query($db,'select nome_usuario from tb_usuario where id_usuario = '.$row[7]);
                    $row2 = mysqli_fetch_array($nome_usuario);
                    echo '<br />ID e nome do usuário responsável pela sugestão, respectivamente: ';
                    echo stripslashes($row[7]);
                    echo ', ';
                    echo stripslashes($row2['nome_usuario']);
                    echo '<hr>';
                }
                mysqli_close($db);
            ?>
			</div>
    </div>
    </div>
  </body>
  	<?php include 'include/i_rodape.php' ?>
</html>