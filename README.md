_MAPEAMENTO DE PONTOS DE DESCARTE DE RESÍDUOS ELETRÔNICOS E RECICLÁVEIS EM CAMPINAS_
Link do site: http://descartecampinas.000webhostapp.com/

INSTRUÇÕES PARA USO LOCAL DO REPOSITÓRIO: 
	
	1. Instalar um software para rodar o servidor Local, recomendamos o XAMPP (https://www.apachefriends.org/pt_br/index.html);
	
	2. Instalar o Workbench MySQL, para a conexão e hospedagem do banco (https://dev.mysql.com/downloads/workbench/);
	
	3. Fazer o Download do repositório e movê-lo para: OS(C:) > xampp > htdocs;
	
	4. Inicializar o XAMPP (o Workbench deve estar fechado), iniciar o servidor APACHE e o MySQL;
		
		Executar a seguinte cláusula SQL dentro do workbench: 
			
			create database if not exists bd_mapeamento;
			use bd_mapeamento;

			create table if not exists tb_visitante(
			cod_vst int primary key auto_increment,
				nome_vst varchar(100) not null,
			 	email_vst varchar(30),
			 	tel_vst varchar(30)
			  );

			create table if not exists tb_ponto(
			 	cod_ponto int primary key auto_increment,
				end_ponto varchar(150),
				tel_ponto varchar(30),
			 	descarte_ponto varchar(15),
			 	desc_ponto varchar(200)
			);

	5. Abra o link: localhost/mapeamento-pontos-de-descarte-CMP/index.php
