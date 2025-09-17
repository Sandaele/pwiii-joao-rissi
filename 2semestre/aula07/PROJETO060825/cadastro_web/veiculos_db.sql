create database if not exists veiculos_db;
use veiculos_db;

create table if not exists automovel (
    id int auto_increment not null,
    modelo varchar(30) not null,
    ano int(4),
    placa varchar(7) not null,
    data_cadastro date not null,
    cor varchar(20),
    valor double(10,2),
    unique(placa),
    primary key(id)
);

