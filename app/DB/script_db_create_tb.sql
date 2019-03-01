create sequence clientes_sec_d;
create table clientes(
id_cliente int default nextval('clientes_sec_d') primary key,
num_ti_cl int,
nombre_cl varchar(250),
direccion_cl varchar(250),
email_cl varchar(100),
telefono_cl varchar(100), 
fecha_creacion timestamp default NULL
);
create sequence hoteles_sec_d;
create table hoteles(
id_hotel int default nextval('hoteles_sec_d') primary key,
nombre_ho varchar(250),
direccion_ho varchar(250),
email_ho varchar(100),
fecha_creacion timestamp default NULL
);
create sequence tipo_hotel_sec_d;
create table tipo_hotel(
id_tipo_hotel int default nextval('tipo_hotel_sec_d') primary key,
descripcion_tipo_ho varchar(250)
);
create sequence tipo_acomod_sec_d;
create table tipo_acomodacion(
id_tipo_acomod int default nextval('tipo_acomod_sec_d') primary key,
descripcion_tipo_acomod varchar(250)
);
create sequence hoteles_tipo_acomd_sec_d;
create table hoteles_tipo_acomdacion(
id_tip_acomd int default nextval('hoteles_tipo_acomd_sec_d') primary key,
id_hotel int,
id_tipo_acomod int,
cantidad_tipo_acomod int,
cantidad_dispon_tipo_acomod int
);
alter table hoteles_tipo_acomdacion 
    add constraint fk_tip_acomd_hotel
    foreign key (id_hotel) 
    REFERENCES hoteles (id_hotel);
alter table hoteles_tipo_acomdacion 
    add constraint fk_tip_acomd_tip_acomd
    foreign key (id_tipo_acomod) 
    REFERENCES tipo_acomodacion (id_tipo_acomod);
create sequence reservas_sec_d;
create table reservas(
id_reserva int default nextval('reservas_sec_d') primary key,
id_cliente int,
id_hotel int,
id_tipo_acomod int,
cantidad_personas_reserva int
);
alter table reservas 
    add constraint fk_reservas_cliente
    foreign key (id_cliente) 
    REFERENCES clientes (id_cliente);
alter table reservas 
    add constraint fk_reservas_hotel
    foreign key (id_hotel) 
    REFERENCES hoteles (id_hotel);
alter table reservas 
    add constraint fk_reservas_tipo_acomod 
    foreign key (id_tipo_acomod) 
    REFERENCES tipo_acomodacion (id_tipo_acomod);