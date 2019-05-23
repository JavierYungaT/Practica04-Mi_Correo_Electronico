# Practica04-Mi_Correo_Electronico

 	FORMATO DE INFORME DE PRÁCTICA DE LABORATORIO / TALLERES / CENTROS DE SIMULACIÓN – PARA ESTUDIANTES

CARRERA: Computación 	ASIGNATURA: Hipermedial
NRO. PRÁCTICA:	4	TÍTULO PRÁCTICA: Resolución de problemas sobre PHP y MySQL
OBJETIVO ALCANZADO:
•	Entender y organizar de una mejor manera los sitios de web en Internet 
•	Diseñar adecuadamente elementos gráficos en sitios web en Internet. 
•	Crear sitios web aplicando estándares actuales.
ACTIVIDADES DESARROLLADAS
1.	Generar el diagrama E-R para la solución de la práctica

 ![image](https://user-images.githubusercontent.com/49315481/58288914-8efdf180-7d7a-11e9-976a-3d8af635115a.png)

2.	Nombre de la base de datos
hipermedial
 ![image](https://user-images.githubusercontent.com/49315481/58288943-a4731b80-7d7a-11e9-8761-a7a3fcadcdb7.png)


3.	Sentencias SQL de la estructura de la base de datos

CREATE TABLE roles (
rol_codigo int(11) NOT NULL AUTO_INCREMENT,
rol_nombre varchar(15) NOT NULL, 
rol_eliminado varchar(5) NOT NULL, 
rol_fecha_creacion timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, rol_fecha_modificacion timestamp NULL DEFAULT NULL, 
PRIMARY KEY (rol_codigo) )
ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE usuario ( usu_codigo int(11) NOT NULL AUTO_INCREMENT, usu_cedula varchar(10) NOT NULL, 
usu_nombres varchar(50) NOT NULL, 
usu_apellidos varchar(50) NOT NULL, 
usu_direccion varchar(75) NOT NULL, 
usu_telefono varchar(50) NOT NULL, 
usu_correo varchar(20) NOT NULL, 
usu_password varchar(255) NOT NULL, 
usu_fecha_nacimiento date NOT NULL, 
usu_eliminado varchar(1) NOT NULL DEFAULT 'N', 
usu_fecha_creacion timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, usu_fecha_modificacion timestamp NULL DEFAULT NULL, 
rol_usu_codigo int(11) NOT NULL, 
usu_imagen longblob NULL DEFAULT NULL, 
PRIMARY KEY (usu_codigo), 
UNIQUE KEY usu_cedula (usu_cedula), 
FOREIGN KEY (rol_usu_codigo) REFERENCES roles(rol_codigo) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

CREATE TABLE correo ( 
cor_codigo int(11) NOT NULL AUTO_INCREMENT, 
cor_usu_remitente int(11) NOT NULL, 
cor_usu_destino int(11) NOT NULL, 
cor_asunto varchar(200) NOT NULL, 
cor_mensaje varchar(1000) NOT NULL, 
cor_fecha_envio timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP, cor_eliminado varchar(1) NOT NULL DEFAULT 'N', 
cor_elimina int(11) NULL DEFAULT NULL, 
cor_fecha_elimina timestamp NULL DEFAULT NULL, 
PRIMARY KEY (cor_codigo), 
FOREIGN KEY (cor_usu_remite) REFERENCES usuario(usu_codigo) ) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

4.	La evidencia del correcto diseño de las páginas HTML usando CSS. Para lo cuál, se puede generar fotografías instantáneas (pantallazos).
Paginas html:
 
 ![image](https://user-images.githubusercontent.com/49315481/58288974-b785eb80-7d7a-11e9-8d4c-aafe275fabb9.png)
![image](https://user-images.githubusercontent.com/49315481/58288998-c8cef800-7d7a-11e9-83b0-062a52a4c7cc.png)

Paginas estilos:
 
 
 ![image](https://user-images.githubusercontent.com/49315481/58289031-dd12f500-7d7a-11e9-904b-b21e80342489.png)
![image](https://user-images.githubusercontent.com/49315481/58289041-e3a16c80-7d7a-11e9-8333-b1d2ad85c7e0.png)
![image](https://user-images.githubusercontent.com/49315481/58289050-e8feb700-7d7a-11e9-9ad2-b08f9045ba3f.png)
![image](https://user-images.githubusercontent.com/49315481/58289054-ed2ad480-7d7a-11e9-929e-cc09dd784df8.png)
![image](https://user-images.githubusercontent.com/49315481/58289065-f1ef8880-7d7a-11e9-958d-9c08d0112371.png)
![image](https://user-images.githubusercontent.com/49315481/58289073-f6b43c80-7d7a-11e9-83cb-1dabdf6fdb34.png)

Algunas páginas php:
        

![image](https://user-images.githubusercontent.com/49315481/58289108-0f245700-7d7b-11e9-8b51-8ecccb6cd666.png)
![image](https://user-images.githubusercontent.com/49315481/58289111-13507480-7d7b-11e9-9215-6ef08fa263b9.png)
![image](https://user-images.githubusercontent.com/49315481/58289119-19465580-7d7b-11e9-8a4b-8844f1a91899.png)
![image](https://user-images.githubusercontent.com/49315481/58289126-1cd9dc80-7d7b-11e9-92db-fef9831f4adb.png)
![image](https://user-images.githubusercontent.com/49315481/58289135-219e9080-7d7b-11e9-9023-f447715dfa56.png)
![image](https://user-images.githubusercontent.com/49315481/58289139-25321780-7d7b-11e9-95d3-d9bfd70f70bf.png)
![image](https://user-images.githubusercontent.com/49315481/58289144-2b27f880-7d7b-11e9-8dc8-e96b6877b6c4.png)
![image](https://user-images.githubusercontent.com/49315481/58289153-3713ba80-7d7b-11e9-9a3c-ea099c65a7ca.png)


Pagina Ajax:
 
![image](https://user-images.githubusercontent.com/49315481/58289177-472b9a00-7d7b-11e9-8368-6606fb67ca6e.png)

5.	La evidencia del correcto funcionamiento de cada uno de los puntos requeridos.
Registrarse:
 
![image](https://user-images.githubusercontent.com/49315481/58289199-527ec580-7d7b-11e9-9ff7-1635dfbb01e2.png)


Login:

 ![image](https://user-images.githubusercontent.com/49315481/58289207-60344b00-7d7b-11e9-993b-048cdcaf7a8f.png)
 
Enviar mensajes del administrador: 
 
![image](https://user-images.githubusercontent.com/49315481/58289220-704c2a80-7d7b-11e9-950f-798942d17b1d.png)

Mensajes enviados:

 ![image](https://user-images.githubusercontent.com/49315481/58289235-7cd08300-7d7b-11e9-8d6b-fb974204b20d.png)
 
Buscar mensajes:

![image](https://user-images.githubusercontent.com/49315481/58289256-8a860880-7d7b-11e9-80e2-f3c69e5e4e6d.png)


Cuenta de casa usuario:

![image](https://user-images.githubusercontent.com/49315481/58289287-9bcf1500-7d7b-11e9-9c3f-5048e1d67b0c.png)
 
Modificar datos del usuario:
 

![image](https://user-images.githubusercontent.com/49315481/58289314-a8536d80-7d7b-11e9-9d8d-0b2b8320a3f4.png)


Cambiar contraseña:
 
 ![image](https://user-images.githubusercontent.com/49315481/58289344-b4d7c600-7d7b-11e9-8247-c82b3fa38df1.png)
 
Inicio:
 
![image](https://user-images.githubusercontent.com/49315481/58289357-c28d4b80-7d7b-11e9-9e20-55c42019caab.png)

Mensajes recibidos por parte del usuario:

![image](https://user-images.githubusercontent.com/49315481/58289379-d5078500-7d7b-11e9-8da6-a3934e99ae53.png)

 
NOTA: Los usuarios pueden modificar, editar sus datos y eliminar su cuenta.

6.	Repositorio:
Usuario: JavierYungaT
Repositorio: https://github.com/JavierYungaT/Practica04-Mi_Correo_Electronico

RESULTADO(S) OBTENIDO(S):
•	Tener el conocimiento suficiente para poder entender y organizar de una mejor manera los sitios web. 
CONCLUSIONES:
Esta práctica fue muy útil ya que se obtuvo mucho conocimiento sobre JavaScrip, Ajax, etc. Cabe recalcar compleja al momento de desarrollarla sobre todo con la base de datos, pero al final se solvento y se pudo llegar a concluir con la práctica.
También nos damos cuenta que es de mucha importancia saber de este tema ya que nos puede ayudar para solventarlo en la vida real.  
RECOMENDACIONES:
•	Tener conocimientos previos al tema.
•	Probar en diferentes navegadores. 

Nombre de estudiante: Javier Yunga
Firma de estudiante:  

![image](https://user-images.githubusercontent.com/49315481/58289396-e486ce00-7d7b-11e9-9d71-8123adea600b.png)

