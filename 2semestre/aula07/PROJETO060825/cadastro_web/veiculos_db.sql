create database if not exists veiculos_db;
use veiculos_db;

create table if not exists automovel (
    id int auto_increment not null,
    modelo varchar(30) not null,
    ano int(4) not null,
    placa varchar(8) not null,
    data_cadastro date not null,
    cor varchar(15) not null,
    valor double(10, 2) not null,
    unique(placa),
    primary key(id)
)