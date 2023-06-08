#1. Consulta la tabla role si existe un rol Administrador o me busca que el Id 3 pertenece al rol Cliente
select * from role where name = "Administrador" OR id_role = "3";

#2. Consulta de manera descendente por el campo id_user los registro que tengan el id_role igual a 2
select * from user_role where id_role = "2" order by id_user desc;

#3. Consulta de manera ascendente por el campo id a los usuarios que manejen correos de tipo hotmail
select * from user where email like "%hotmail%" order by id_user asc; 

#4. Consulta los campos id_document, number_document, user_login, name, surnames, id_role, address, number_contact de la tabla customer y se utiliza el inner join para saber a cual id_role pertenece cada usuario
select id_document, number_document, user_login, name, surnames, id_role, address, number_contact from customer as c inner join user_role as u on c.id_user = u.id_user
where id_role between "1" and "2"; 

#5. Consulta el numero total de clientes registrados con el tipo de documento TI
select count(type) as nro_total_clientes_registrados_TI from document where type = "TI";
select * from document;

#6. Consulta los pedidos que estan en estados diferentes a PENDIENTE y a ANULADA
select * from order_customer where state not like "%PENDIENTE%" and state not like "%ANULADA%";

#7. Consulta el maximo valor de la factura
select max(value) as valor_max_factura from bill;
select * from bill;

#8. Consulta los pagos realizados con los metodos de pago EFECTIVO y TARJETA CREDITO
select * from payment where method_payment IN ("EFECTIVO","TARJETA CREDITO");

#9. Consulta el detalle del pedido que tenga mas de 50 unidades del producto
select * from detail_order where amount_product>50;

#10. Consulta las tablas sending y protractor los tipos de vehiculo igual a motos o que su información sea igual a Azul 
select * from sending as s inner join protractor as p on s.id_protractor = p.id_protractor where type_vehicle = "Moto" or information_vehicle = "Azul";

#11. Consulta  mark, colour, amount_stock, value_vp de los productos marca Huawei
select mark, colour, amount_stock, value_vp from product where mark = "Huawei";

#12. Consulta los registros de la tabla image en orden ascendente por el campo id
select * from image order by id_image asc;

#13. Agrupa los registros de la tabla category por el campo name_category
select * from category group by name_category;

#14. Consulta los tipos de vehiculo que son diferente a Carro y que en information_vehicle sean Blanco, Verde y Gris
select * from protractor where not type_vehicle = "Carro" and information_vehicle IN ("Blanco","Verde","Gris");