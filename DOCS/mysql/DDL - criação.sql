create database api_carros;
use api_carros;

create table marca(
	id_marca int auto_increment not null primary key,
    nome_marca char(25) not null
);

create table modelo(
	id_modelo int auto_increment not null primary key,
    nome_modelo varchar(50) not null,
    
    id_marca int not null,
    constraint FKid_marca foreign key (id_marca) references marca (id_marca)
);

create table combustivel(
	id_combustivel int auto_increment not null primary key,
    combustivel char(20) not null
);

create table transmissao(
	id_transmissao int auto_increment not null primary key,
    transmissao char(22)
);

create table veiculo(
	id_veiculo int auto_increment not null primary key,
    piloto_automatico bit not null,
    climatizador bit not null,
    vidro_automatico bit not null,
    am_fm bit not null,
    entrada_auxiliar bit not null,
    bluetooth bit not null,
    cd_player bit not null,
    dvd_player bit not null,
    leitor_mp3 bit not null,
    entrada_usb bit not null,
    versao varchar(50) not null,
    img varchar(100) not null,
    ano_lancamento char(4) not null,
    ano_producao char(4) not null,
    porta int not null,
    motor decimal(2.1) not null,
    carrocerria char(20) not null,
    
    id_modelo int not null,
    constraint FKid_modelo foreign key (id_modelo) references modelo (id_modelo),
    
    id_combustivel int not null,
    constraint FKid_combustivel foreign key (id_combustivel) references combustivel (id_combustivel),
    
    id_transmissao int not null,
    constraint FKid_transmissao foreign key (id_transmissao) references transmissao (id_transmissao)
);



