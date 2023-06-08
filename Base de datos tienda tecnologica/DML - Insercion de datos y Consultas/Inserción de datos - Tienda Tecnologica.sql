USE tienda_tecnologica;

select * from role;
#valor inicial del autoincrementable
alter table role auto_increment = 1; 
#registros role
INSERT INTO role (name) 
VALUES ("Administrador"),
	   ("Empleado"),
       ("Cliente");
              

       
select * from user_role;
#valor inicial del autoincrementable 
alter table user_role auto_increment = 100;
#registros user_role
INSERT INTO user_role (id_role, id_user) 
VALUES ("1", "1"),
	   ("2", "2"),
       ("3", "3"),
       ("2", "4"),
       ("3", "5"),
       ("1", "6"),
       ("2", "7"),
       ("2", "8"),
       ("3", "9"),
       ("3", "10"),
       ("2", "11"),
       ("1", "12"),
       ("3", "13"),
       ("2", "14"),
       ("1", "15"),
       ("2", "16"),
       ("2", "17"),
       ("2", "18"),
       ("3", "19"),
       ("3", "20"),
       ("3", "21"),
       ("2", "22"),
       ("2", "23"),
       ("2", "24"),
       ("2", "25"),
       ("3", "26"),
       ("3", "27"),
       ("3", "28"),
       ("3", "29"),
       ("3", "30");
       
select * from user;
#valor inicial del autoincrementable 
alter table user auto_increment = 1;
#registros user
INSERT INTO user (login, email, password, activated, lang_key, image_url, activation_key, reset_key, reset_date) 
VALUES ("login","adm123@gmail.com","pruebas123","1","Español","www.celular.com","8524","8524","2022-01-26"),
	   ("login","eng1688@hotmail.com","pruebas456","1","Español","www.audifonos.com","4125","4125","2022-01-26"),
       ("login","zac1608@hotmail.com","pruebas746","0","Español","www.audifonos.com","0125","0125","2022-01-26"),
       ("login","ale2006@gmail.com","prueba741","1","Español","www.memoriasusb.com","3695","3695","2022-01-26"),
       ("login","jua23@hotmail.com","pruebas233","1","Español","www.audifonos.com","2710","2710","2022-01-26"),
       ("login","ang2001@hotmail.com","154896565","0","Español","www.audifonos.com","1725","1725","2022-01-26"),
       ("login","alb055@gmail.com","741356569","1","Español","www.usb.com","0170","0170","2022-01-26"),
       ("login","hol2010@hotmail.com","dragon1234","0","Español","www.tucelu.com","2505","2505","2022-01-26"),
       ("login","uru1938@gmail.com","ang412563","1","Español","www.audifonos.com","7410","7410","2022-01-26"),
       ("login","tol2022@hotmail.com","1554623","0","Español","www.audifonos.com","7412","7412","2022-01-26"),
       ("login","pol1688@hotmail.com","ads5d6s5d6s","1","Español","www.tucelu.com","1452","1452","2022-01-26"),
       ("login","bra2002@gmail.com","5214789","1","Español","www.usb.com","5820","5820","2022-01-26"),
       ("login","zul456@hotmail.com","pol4563","0","Español","www.audifonos.com","0123","0123","2022-01-26"),
       ("login","rusi@gmail.com","pol78656","1","Español","www.audifonos.com","7413","7413","2022-01-26"),
       ("login","ikl16@hotmail.com","741258036","1","Español","www.audifonos.com","5920","5920","2022-01-26"),
       ("login","por2016@gmail.com","741036985","0","Español","www.audifonos.com","3214","3214","2022-01-26"),
       ("login","eng852@hotmail.com","oplfsd","1","Español","www.audifonos.com","7415","7415","2022-01-26"),
       ("login","col2014@hotmail.com","albhysi","0","Español","www.tucelu.com","8965","8965","2022-01-26"),
       ("login","hun123@gmail.com","bolfrtus","1","Español","www.usb.com","5478","5478","2022-01-26"),
       ("login","bel2018@gmail.com","asdfghj520","1","Español","www.audifonos.com","1020","1020","2022-01-26"),
       ("login","ale2014@gmail.com","perlo2569","1","Español","www.tucelu.com","7090","7090","2022-01-26"),
       ("login","hol1974@hotmail.com","85266","1","Español","www.usb.com","10369","10369","2022-01-26"),
       ("login","kyu@hotmail.com","8520147","0","Español","www.tucelu.com","4512","4512","2022-01-26"),
       ("login","bus1203@hotmail.com","qwer7412","1","Español","www.audifonos.com","2047","2047","2022-01-26"),
       ("login","eng1685@hotmail.com","oplrd963","1","Español","www.audifonos.com","1047","1047","2022-01-26"),
       ("login","venz1236@hotmail.com","jklñ7456","1","Español","www.audifonos.com","9635","9635","2022-01-26"),
       ("login","frut@hotmail.com","pruebav12345","1","Español","www.usb.com","8139","8139","2022-01-26"),
       ("login","ver4789@hotmail.com","ñoplkds","0","Español","www.accesorios.com","5632","5632","2022-01-26"),
       ("login","bar2006@gmail.com","7854132","1","Español","www.accesorios.com","1203","1203","2022-01-26"),
       ("login","real2002@hotmail.com","alt62358","1","Español","www.audifonos.com","6385","6385","2022-01-26");
       
       
select * from customer;
#valor inicial del autoincrementable 
alter table customer auto_increment = 100000;
#registros customer
INSERT INTO customer (id_document, id_user, number_document, user_login, name, surnames, address, number_contact) 
VALUES ("100","1","123456","ADMDIEGO","Diego","Rivas","cra 27#49-41 sur","3212546912"),
	   ("101","2","789654","SECPRUEBA","Juan","Meza","cra 100#49-41 norte","3118161503"),
       ("102","3","12036548","ANDRES117","Andres","Rivera","cra 27#49-10 sur","3212465849"),
       ("103","4","7896523","CAROLANG","Carolina","Aldana","Av 95 #38-45","3210546820"),
       ("104","5","7896524","LUISASUA","Luisa","Suarez","Av 68 #37-52","3145896312"),
       ("105","6","7896525","DIANAURRE","Diana","Urrego","Av 26 #34-12","3202126321"),
       ("106","7","7896526","ANTONY123","Antony","Santos","Av 19 #26-15","3102465842"),
       ("107","8","7896527","CARLOSANG","Carlos","Uran","Av 16 #18-20","3108792013"),
       ("108","9","7896528","ANGELING","Angel","Rodriguez","Av 19 #18-20","3105792019"),
       ("109","10","7896529","JOHAN999","Johan","Caro","Av 13 #45-20","3207892010"),
       ("110","11","7896530","ARMSANZ","Armando","Sanz","Av 9 #25-10","3107593017"),
       ("111","12","7896531","LORE145","Lorena","Alvarez","Av 8 #10-15","3117697018"),
       ("112","13","7896532","JULI434","Julian","Barcos","Av 7 #95-15","3217295518"),
       ("113","14","7896533","ANDREA666","Andrea","Gil","Av 9 #95-45","3117394515"),
       ("114","15","7896534","DOUGLASPTE","Douglas","Paez","Av 12 #84-26","3127584610"),
       ("115","16","7896535","CAMIL420","Camila","Orduz","Av 9 #74-27","3110584710"),
       ("116","17","7896536","SAMIR1212","Samir","Gomez","Av 8 #26-27","3030784728"),
       ("117","18","7896537","DANNARIV","Danna","Rivera","Av 10 #10-27","3090584799"),
       ("118","19","7896538","NICOLASV","Nicolas","Velandia","Av 8 #11-20","3190184500"),
       ("119","20","7896539","DANI789","Daniel","Ochoa","Av 9 #14-19","3010194902"),
       ("120","21","7896540","JOHANNA269","Johanna","Sanchez","Av 9 #20-19","3110104709"),
       ("121","22","7896541","JONAT23","Jonathan","Sanchez","Av 9 #20-19","3212546978"),
       ("122","23","7896542","MILENA20","Milena","Soto","Av 9 #20-22","3118164596"),
       ("123","24","7896543","JUANA12","Juana","Arbelaez","Av 9 #12-10","3118144556"),
       ("124","25","7896544","DUVANVR","Duvan","Vela","Av 9 #12-10","3118144556"),
       ("125","26","7896545","ALEJOHR","Alejandro","Mata","Av 9 #12-14","3027144556"),
       ("126","27","7896546","MANUELHO","Manuel","Hurtado","Av 9 #12-14","3027144556"),
       ("127","28","7896547","NICOL","Nicol","Vargas","Av 19 #25-14","3127144956"),
       ("128","29","7896548","LUZ100","Luz","Vela","Av 95 #25-09","3087144456"),
       ("129","30","7896549","BRAYANFT","Brayan","Lopez","Av 95 #25-12","3187147850"); 
       

select * from document;
#valor inicial del autoincrementable 
alter table document auto_increment = 100;
#registros document
INSERT INTO document (type, number_document) 
VALUES ("CC","123456"),
	   ("TI","789654"),
       ("TI","12036548"),
       ("CC","7896523"),
       ("CC","7896524"),
       ("TI","7896525"),
       ("CC","7896526"),
       ("CE","7896527"),
       ("CC","7896528"),
       ("CE","7896529"),
       ("TI","7896530"),
       ("CC","7896531"),
       ("TI","7896532"),
       ("CC","7896533"),
       ("CE","7896534"),
       ("CC","7896535"),
       ("CC","7896536"),
       ("CC","7896537"),
       ("TI","7896538"),
       ("CC","7896539"),
       ("CE","7896540"),
       ("CC","7896541"),
       ("CC","7896542"),
       ("CC","7896543"),
       ("CE","7896544"),
       ("CE","7896545"),
       ("CE","7896546"),
       ("CE","7896547"),
       ("CE","7896548"),
       ("CE","7896549"); 
       

select * from order_customer;
#valor inicial del autoincrementable
alter table order_customer auto_increment = 1;
#registros order_customer
INSERT INTO order_customer (id_customer, reference_order, state, address) 
VALUES ("100000","10000","ENTREGADO","cra 27#49-41 sur"),
	   ("100001","10001","PENDIENTE","cra 100#49-41 norte"),
       ("100002","10002","PENDIENTE","cra 27#49-10 sur"),
       ("100003","10003","PENDIENTE","Av 95 #38-45"),
       ("100004","10004","ENTREGADO","Av 68 #37-52"),
       ("100005","10005","ENTREGADO","Av 26 #34-12"),
       ("100006","10006","ANULADA","Av 19 #26-15"),
       ("100007","10007","ANULADA","Av 16 #18-20"),
       ("100008","10008","ENTREGADO","Av 19 #18-20"),
       ("100009","10009","ENTREGADO","Av 13 #45-20"),
       ("100010","10010","ENTREGADO","Av 9 #25-10"),
       ("100011","10011","ENTREGADO","Av 8 #10-15"),
       ("100012","10012","ENTREGADO","Av 7 #95-15"),
       ("100013","10013","ANULADA","Av 9 #95-45"),
       ("100014","10014","ENTREGADO","Av 12 #84-26"),
       ("100015","10015","ENTREGADO","Av 9 #74-27"),
       ("100016","10016","ENTREGADO","Av 8 #26-27"),
       ("100017","10017","ENTREGADO","Av 10 #10-27"),
       ("100018","10018","ENTREGADO","Av 8 #11-20"),
       ("100019","10019","ENTREGADO","Av 9 #14-19"),
       ("100020","10020","ENTREGADO","Av 9 #20-19"),
       ("100021","10021","ENTREGADO","Av 9 #20-19"),
       ("100022","10022","ENTREGADO","Av 9 #20-22"),
       ("100023","10023","ENTREGADO","Av 9 #12-10"),
       ("100024","10024","ENTREGADO","Av 9 #12-10"),
       ("100025","10025","ENTREGADO","Av 9 #12-14"),
       ("100026","10026","ENTREGADO","Av 9 #12-14"),
       ("100027","10027","ENTREGADO","Av 19 #25-14"),
       ("100028","10028","ENTREGADO","Av 95 #25-09"),
       ("100029","10029","ENTREGADO","Av 95 #25-12"); 
       

select * from bill;
#valor inicial del autoincrementable
alter table bill auto_increment = 2000;
#registros bill
INSERT INTO bill (id_payment, id_order_customer, id_sending, reference_payment, date, hour, value, initials, number_document, state) 
VALUES ("3000","1","1000","4000","2022-01-26","15:13:46","20.000","AVG","123456","PAGADA"),
	   ("3001","2","1001","4001","2022-01-27","11:30:00","40.000","CDA","789654","PAGADA"),
       ("3002","3","1002","4002","2022-01-28","15:30:45","65.000","CRC","12036548","PAGADA"),
       ("3003","4","1003","4003","2022-01-29","09:13:00","80.000","ALM","7896523","PAGADA"),
       ("3004","5","1004","4004","2022-01-30","08:00:05","78.000","LEO","7896524","PAGADA"),
       ("3005","6","1005","4005","2022-02-27","09:00:00","120.000","CER","7896525","PAGADA"),
       ("3006","7","1006","4006","2022-02-01","10:00:00","45.000","SAG","7896526","PAGADA"),
       ("3007","8","1007","4007","2022-02-02","11:00:00","80.000","OLD","7896527","PAGADA"),
       ("3008","9","1008","4008","2022-02-03","12:00:00","200.000","PAS","7896528","PAGADA"),
       ("3009","10","1009","4009","2022-02-04","13:00:00","150.000","ACC","7896529","PAGADA"),
       ("3010","11","1010","4010","2022-02-05","14:00:00","400.000","CEL","7896530","PAGADA"),
       ("3011","12","1011","4011","2022-03-01","15:00:00","70.000","PAG","7896531","PAGADA"),
       ("3012","13","1012","4012","2022-03-01","16:00:00","60.000","OLD","7896532","PAGADA"),
       ("3013","14","1013","4013","2022-03-01","17:00:00","74.000","AVG","7896533","ANULADA"),
       ("3014","15","1014","4014","2022-03-02","18:00:00","85.000","CRC","7896534","ANULADA"),
       ("3015","16","1015","4015","2022-03-02","19:00:00","95.000","RTM","7896535","ANULADA"),
       ("3016","17","1016","4016","2022-03-05","20:00:00","200.000","CMD","7896536","ANULADA"),
       ("3017","18","1017","4017","2022-03-05","08:00:00","85.000","REA","7896537","ANULADA"),
       ("3018","19","1018","4018","2022-03-05","09:10:00","85.000","LEO","7896538","ANULADA"),
       ("3019","20","1019","4019","2022-04-20","10:20:00","200.000","CAN","7896539","ANULADA"),
       ("3020","21","1020","4020","2022-04-01","09:30:00","200.000","ABR","7896540","ANULADA"),
       ("3021","22","1021","4021","2022-04-11","09:45:00","150.000","ALE","7896541","ANULADA"),
       ("3022","23","1022","4022","2022-04-02","15:30:50","95.000","BRA","7896542","PAGADA"),
       ("3023","24","1023","4023","2022-04-15","08:00:00","80.000","ARG","7896543","PAGADA"),
       ("3024","25","1024","4024","2022-05-20","09:10:00","95.000","COL","7896544","PAGADA"),
       ("3025","26","1025","4025","2022-05-01","07:00:00","74.000","BAR","7896545","PAGADA"),
       ("3026","27","1026","4026","2022-05-01","16:40:56","85.000","RMA","7896546","ANULADA"),
       ("3027","28","1027","4027","2022-05-01","11:12:00","150.000","LIV","7896547","ANULADA"),
       ("3028","29","1028","4028","2022-05-22","09:00:00","200.000","AJA","7896548","PAGADA"),
       ("3029","30","1029","4029","2022-05-22","19:01:50","85.000","JUV","7896549","PAGADA"); 
       
       
select * from payment;
#valor inicial del autoincrementable
alter table payment auto_increment = 3000;
#registros payment
INSERT INTO payment (method_payment, name, surnames) 
VALUES ("EFECTIVO","Diego","Rivas"),
	   ("TARJETA CREDITO","Juan","Meza"),
       ("TARJETA DEBITO","Andres","Rivera"),
       ("EFECTIVO","Carolina","Aldana"),
       ("EFECTIVO","Luisa","Suarez"),
       ("EFECTIVO","Diana","Urrego"),
       ("EFECTIVO","Antony","Santos"),
       ("EFECTIVO","Carlos","Uran"),
       ("EFECTIVO","Angel","Rodriguez"),
       ("EFECTIVO","Johan","Caro"),
       ("EFECTIVO","Armando","Sanz"),
       ("EFECTIVO","Lorena","Alvarez"),
       ("EFECTIVO","Julian","Barcos"),
       ("EFECTIVO","Andrea","Gil"),
       ("TARJETA DEBITO","Douglas","Paez"),
       ("TARJETA DEBITO","Camila","Orduz"),
       ("TARJETA DEBITO","Samir","Gomez"),
       ("TARJETA DEBITO","Danna","Rivera"),
       ("TARJETA DEBITO","Nicolas","Velandia"),
       ("TARJETA DEBITO","Daniel","Ochoa"),
       ("TARJETA CREDITO","Johanna","Sanchez"),
       ("TARJETA CREDITO","Jonathan","Sanchez"),
       ("TARJETA CREDITO","Milena","Soto"),
       ("TARJETA CREDITO","Juana","Arbelaez"),
       ("TARJETA CREDITO","Duvan","Vela"),
       ("TARJETA CREDITO","Alejandro","Mata"),
       ("TARJETA CREDITO","Manuel","Hurtado"),
       ("TARJETA CREDITO","Nicol","Vargas"),
       ("TARJETA DEBITO","Luz","Vela"),
       ("TARJETA DEBITO","Brayan","Lopez"); 
       
       
       
select * from detail_order;
#valor inicial del autoincrementable
alter table detail_order auto_increment = 5000;
#registros detail_order
INSERT INTO detail_order (id_order, id_product, amount_product, price_sale) 
VALUES ("1","100","25","20.000"),
	   ("2","101","10","40.000"),
       ("3","102","15","65.000"),
       ("4","103","50","80.000"),
       ("5","104","60","78.000"),
       ("6","105","90","120.000"),
       ("7","106","12","45.000"),
       ("8","107","5","80.000"),
       ("9","108","9","200.000"),
       ("10","109","22","150.000"),
       ("11","110","43","400.000"),
       ("12","111","55","70.000"),
       ("13","112","66","60.000"),
       ("14","113","33","74.000"),
       ("15","114","27","85.000"),
       ("16","115","26","95.000"),
       ("17","116","14","200.000"),
       ("18","117","18","85.000"),
       ("19","118","20","85.000"),
       ("20","119","22","200.000"),
       ("21","120","24","200.000"),
       ("22","121","26","150.000"),
       ("23","122","28","95.000"),
       ("24","123","30","80.000"),
       ("25","124","31","95.000"),
       ("26","125","32","74.000"),
       ("27","126","40","85.000"),
       ("28","127","44","150.000"),
       ("29","128","56","200.000"),
       ("30","129","28","85.000"); 
       
       
select * from sending;
#valor inicial del autoincrementable
alter table sending auto_increment = 1000;
#registros sending
INSERT INTO sending (id_protractor, reference_sending) 
VALUES ("1","800"),
	   ("2","801"),
       ("3","802"),
       ("4","803"),
       ("5","804"),
       ("6","805"),
       ("7","806"),
       ("8","807"),
       ("9","808"),
       ("10","809"),
       ("11","810"),
       ("12","811"),
       ("13","812"),
       ("14","813"),
       ("15","814"),
       ("16","815"),
       ("17","816"),
       ("18","817"),
       ("19","818"),
       ("20","819"),
       ("21","820"),
       ("22","821"),
       ("23","822"),
       ("24","823"),
       ("25","824"),
       ("26","825"),
       ("27","826"),
       ("28","827"),
       ("29","828"),
       ("30","829");
       

select * from product;
#valor inicial del autoincrementable
alter table product auto_increment = 100; 
#registros product
INSERT INTO product (id_category, reference_product, amount_stock, value_vp, mark, colour) 
VALUES ("1","1000","10","20.000","Xiaomi","Gris"),
	   ("2","1001","20","40.000","Kingston","Verde"),
       ("3","1002","30","60.000","Huawei","Negro"),
       ("4","1003","40","80.000","Kingston","Dorado"),
       ("5","1004","50","100.000","Kingston","Gris"),
       ("6","1005","60","30.000","Kingston","Azul"),
       ("7","1006","70","50.000","Kingston","Rojo"),
       ("8","1007","80","170.000","Kingston","Negro"),
       ("9","1008","90","90.000","Kingston","Negro"),
       ("10","1009","100","40.000","Huawei","Negro"),
       ("11","1010","110","40.000","Samsung","Rojo"),
       ("12","1011","120","740.000","Huawei","Gris"),
       ("13","1012","130","20.000","Samsung","Dorado"),
       ("14","1013","140","20.000","Samsung","Verde"),
       ("15","1014","150","90.000","Samsung","Gris"),
       ("16","1015","160","90.000","Samsung","Negro"),
       ("17","1016","170","590.000","Xiaomi","Gris"),
       ("18","1017","180","50.000","Xiaomi","Gris"),
       ("19","1018","190","30.000","Kingston","Dorado"),
       ("20","1019","200","30.000","Kingston","Gris"),
       ("21","1020","210","30.000","Huawei","Rojo"),
       ("22","1021","220","880.000","Xiaomi","Negro"),
       ("23","1022","230","80.000","Xiaomi","Rojo"),
       ("24","1023","240","50.000","Motorola","Gris"),
       ("25","1024","250","50.000","Motorola","Rojo"),
       ("26","1025","260","990.000","Huawei","Verde"),
       ("27","1026","270","20.000","Huawei","Gris"),
       ("28","1027","280","20.000","Huawei","Gris"),
       ("29","1028","290","120.000","Huawei","Rojo"),
       ("30","1029","300","20.000","Huawei","Negro");
       

select * from image;
#valor inicial del autoincrementable
alter table image auto_increment = 1;
#registros image
INSERT INTO image (id_product, url) 
VALUES ("100","https://developer.mozilla.org"),
	   ("101","http://www.example.com:80/path/to/myfile.html?key1=value1&key2=value2#SomewhereInTheDocument"),
       ("102","https://developer.mozilla.org/en-US/docs/Learn"),
       ("103","http://web.ua.es/es/masterinformatica/enlaces/interesantes.html"),
       ("104","http://web.ua.es/va/masterinformatica/enllacos/interessants.html"),
       ("105","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("106","http://web.ua.es/es/masterinformatica/enlaces/interesantes.html"),
       ("107","https://developer.mozilla.org"),
       ("108","http://web.ua.es/es/masterinformatica/enlaces/interesantes.html"),
       ("109","https://developer.mozilla.org"),
       ("110","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("111","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("112","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("113","http://web.ua.es/va/masterinformatica/enllacos/interessants.html"),
       ("114","http://web.ua.es/va/masterinformatica/enllacos/interessants.html"),
       ("115","https://developer.mozilla.org"),
       ("116","https://developer.mozilla.org"),
       ("117","https://developer.mozilla.org"),
       ("118","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("119","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("120","http://web.ua.es/va/masterinformatica/enllacos/interessants.html"),
       ("121","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("122","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("123","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("124","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("125","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("126","http://web.ua.es/en/masterinformatica/links/interesting.html"),
       ("127","https://developer.mozilla.org"),
       ("128","https://developer.mozilla.org"),
       ("129","https://developer.mozilla.org");
       
       
       
select * from category;
#valor inicial del autoincrementable
alter table category auto_increment = 1;
#registros category
INSERT INTO category (reference_category, name_category, description, state) 
VALUES ("1","Almacenamiento","8GB","DISPONIBLE"),
	   ("2","Accesorios","Audifonos","AGOTADO"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("1","Almacenamiento","16GB","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("2","Accesorios","Audifonos","AGOTADO"),
       ("2","Accesorios","Audifonos","AGOTADO"),
       ("1","Almacenamiento","16GB","AGOTADO"),
       ("1","Almacenamiento","16GB","AGOTADO"),
       ("3","Celulares","P Smart","DISPONIBLE"),
       ("1","Almacenamiento","8GB","DISPONIBLE"),
       ("1","Almacenamiento","8GB","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("3","Celulares","Redmi 7","DISPONIBLE"),
       ("1","Almacenamiento","32GB","DISPONIBLE"),
       ("1","Almacenamiento","16GB","DISPONIBLE"),
       ("1","Almacenamiento","16GB","DISPONIBLE"),
       ("1","Almacenamiento","8GB","DISPONIBLE"),
       ("3","Celulares","Note 8","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("2","Accesorios","Audifonos","DISPONIBLE"),
       ("1","Almacenamiento","32GB","DISPONIBLE"),
       ("3","Celulares","Mate 10","DISPONIBLE"),
       ("1","Almacenamiento","8GB","DISPONIBLE"),
       ("1","Almacenamiento","8GB","DISPONIBLE"),
       ("2","Accesorios","Audifonos","AGOTADO"),
       ("1","Almacenamiento","8GB","AGOTADO");
       


select * from protractor;
#valor inicial del autoincrementable
alter table protractor auto_increment = 1;
#registros protractor
INSERT INTO protractor (name, number_contact, type_vehicle, information_vehicle) 
VALUES ("Juan","3212546912","Microbus","Blanco"),
	   ("Diego","3222546917","Microbus","Blanco"),
       ("Carlos","3272540412","Microbus","Blanco"),
       ("Diana","3102546910","Moto","Negro"),
       ("Luisa","3102546911","Moto","Negro"),
       ("Leider","3102546912","Moto","Negro"),
       ("Brayan","3102546913","Moto","Azul"),
       ("Cristian","3102546914","Moto","Verde"),
       ("Ronald","3118161501","Moto","Amarillo"),
       ("Andres","3112126320","Moto","Rojo"),
       ("Ferney","3102465841","Carro","Negro"),
       ("Johanna","3052465842","Carro","Negro"),
       ("Leonardo","3052465847","Carro","Blanco"),
       ("Ana","3052465848","Carro","Verde"),
       ("Duvan","3052465849","Moto","Negro"),
       ("Manuel","3052465850","Moto","Gris"),
       ("Felipe","3112126388","Moto","Naranja"),
       ("Manolo","3112126389","Moto","Verde"),
       ("Wilmer","3112126390","Moto","Azul"),
       ("Daniel","3112178390","Moto","Negro"),
       ("Julian","321466781","Microbus","Blanco"),
       ("Carolina","321466782","Microbus","Blanco"),
       ("Luis","321466783","Microbus","Blanco"),
       ("Hernan","321466784","Microbus","Blanco"),
       ("Oscar","321466785","Microbus","Blanco"),
       ("Pablo","305466781","Microbus","Blanco"),
       ("Maria","305466787","Carro","Negro"),
       ("Samuel","305466780","Carro","Gris"),
       ("Santiago","315465781","Carro","Negro"),
       ("Sebastian","315465701","Carro","Negro");
       

       

       