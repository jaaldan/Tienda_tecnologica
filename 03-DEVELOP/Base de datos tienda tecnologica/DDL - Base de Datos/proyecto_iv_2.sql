
#Almacena los roles
create table rol(
id_rol integer (10) auto_increment not null,
nombre_rol varchar (50) not null,
primary key(id_rol)   
);


#Almacena la información del usuario
create table usuario(
id_usuario integer(10) auto_increment not null,
nombres varchar (50) not null,
apellidos varchar (50) not null,
correo varchar (100) not null,
numero_celular varchar (25) not null,
estado integer (11) not null,
contraseña varchar (60) not null,  
imagen_usuario varchar (100),
primary key (id_usuario)
);


#Almacena la información de los documentos
create table tipo_documento(
id_tipo_documento integer (10) auto_increment not null,
nombre_documento varchar (10) not null,
acronimo_documento varchar (10) not null,
estado varchar (15) not null,
primary key (id_tipo_documento)
);


#Almacena la información de los pagos
create table pago (
id_pago integer (10) auto_increment not null,
metodo_pago varchar (50) not null,
estado varchar (15) not null,
primary key (id_pago)
);

#Almacena la información de las categorias
create table categorias (
id_categoria integer (10) auto_increment not null,
nombre_categoria varchar (50) not null,
estado_categoria varchar (30),
primary key (id_categoria) 
); 

#Almacena la información de la transportadora
create table  transportadora(
id_transportadora integer (10) auto_increment not null,
nombre_transportadora varchar (50) not null,
numero_telefono varchar (30),
estado varchar (50),
primary key (id_transportadora)
);


#Almacena los roles de usuario
create table rol_usuario(
id_rol_usuario integer (10) auto_increment not null,
id_rol integer (10) not null,
id_usuario integer (10) not null,
primary key(id_rol_usuario),   
foreign key (id_rol) references rol(id_rol),
foreign key (id_usuario) references usuario(id_usuario)
);


#Almacena la información del cliente
create table cliente(
id_cliente integer (10) auto_increment not null,
id_tipo_documento integer (10) not null,
id_usuario integer (10) not null,
numero_documento integer (10) not null,
direccion varchar (50) not null,
primary key (id_cliente),
foreign key (id_tipo_documento) references tipo_documento(id_tipo_documento),
foreign key (id_usuario) references usuario(id_usuario)
); 


#Almacena la información del pedido
create table pedido(
id_pedido integer (10) auto_increment not null,
id_cliente integer (10) not null,
direccion varchar (30),
fecha date,
estado varchar (30),
primary key (id_pedido),
foreign key (id_cliente) references cliente(id_cliente)
);


#Almacena la información del envio
create table envio(
id_envio integer (10) auto_increment not null,
id_transportadora integer (10)not null,
direccion varchar (30) not null,
estado varchar (30) not null,
primary key (id_envio),
foreign key (id_transportadora) references transportadora (id_transportadora)
);

#Almacena la informacion de la factura
create table ventas (
id_venta integer (10) auto_increment not null,
id_pago integer (10) not null,
id_pedido integer (10) not null,
fecha timestamp,
hora time not null,
valor_total numeric (19,2),
estado varchar (15),
primary key (id_venta),
foreign key (id_pago) references pago(id_pago),
foreign key (id_pedido) references pedido(id_pedido)
);

#Almacena la información del producto
create table productos(
id_producto integer (10) auto_increment not null,
nombre_producto varchar (30),
id_categoria integer (10) not null,
marca varchar (30),
color varchar (30),
pvp_con_iva numeric (19,2),
salidas integer(10),
cantidad_stock integer(10),
primary key (id_producto),
foreign key (id_categoria) references categorias (id_categoria)
);


#Almacena la información del detalle del pedido
create table detalle_pedido(
id_pedido integer (10) not null,
id_producto integer (10) not null,
cantidad_producto integer (10),
valor_iva numeric (19,2),
precio_venta numeric (19,2),
foreign key (id_pedido) references pedido(id_pedido),
foreign key (id_producto) references productos(id_producto)
);


#Almacena la imagen de los productos
create table imagenes (
id_imagen integer (10) auto_increment not null,
id_producto integer (10) not null,
url varchar (100),
primary key (id_imagen),
foreign key (id_producto) references productos(id_producto)
);

#Almacena las entradas de los productos
create table entradas(
id_entrada integer (10) auto_increment not null,
id_producto integer (10) not null,
proveedor varchar (40),
cantidad_entrada integer (10),
valor_proveedor numeric (19,2),
primary key (id_entrada),
foreign key (id_producto) references productos(id_producto)
);

#Almacena la venta y envio de los productos
create table ventas_envio(
id_venta integer (10) not null,
id_envio integer (10) not null,
fecha date,
foreign key (id_venta) references ventas(id_venta),
foreign key (id_envio) references envio(id_envio)
);