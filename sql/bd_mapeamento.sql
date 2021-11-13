create database if not exists bd_mapeamento;
use bd_mapeamento;


create table if not exists tb_usuario (
  id_usuario int auto_increment primary key,
  nome_usuario varchar(200) NOT NULL,
  telefone_usuario varchar(30) NOT NULL,
  email_usuario varchar(250) NOT NULL,
  senha_usuario varchar(200) NOT NULL,
  data_cadastro date NOT NULL,
  tipo_usuario varchar(20) NOT NULL
);

create table if not exists tb_sugestao(
  id_sugestao int auto_increment primary key,
  end_ponto varchar(250) NOT NULL,
  tel_ponto varchar(30),
  descarte_ponto varchar(30) NOT NULL,
  desc_sugestao varchar(250) NOT NULL,
  status_sugestao varchar(40) NOT NULL,
  data_sugestao date NOT NULL,
  id_usuario int NOT NULL,
  FOREIGN KEY (id_usuario) REFERENCES tb_usuario(id_usuario)
);