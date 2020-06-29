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
