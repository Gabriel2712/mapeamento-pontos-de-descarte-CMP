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

