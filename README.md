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
	
	        create table if not exists tb_usuario (
	          id_usuario int primary key auto_increment,
	          nome_usuario varchar(200) NOT NULL,
	          telefone_usuario varchar(30),
	          email_usuario varchar(250) NOT NULL,
	          senha_usuario varchar(200) NOT NULL
	        );
	
	        create table if not exists tb_ponto(
	          id_ponto int primary key auto_increment,
	          end_ponto varchar(250),
	          tel_ponto varchar(30),
	          descarte_ponto varchar(30),
	          desc_ponto varchar(250),
	          id_usuario int,
	          FOREIGN KEY (id_usuario) REFERENCES tb_usuario(id_usuario)
	        );
	
	5. Abra o link: localhost/mapeamento-pontos-de-descarte-CMP/index.php
