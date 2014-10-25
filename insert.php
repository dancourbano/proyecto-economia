 <!DOcTYPE html>
 <html>
 <head>
  <title>|</title>
 </head>
 <body>
 
<?php
  //Nombre de la BD
  $nomBase="baseSQLite3.db"; 
 
  //Ruta del archivo
  $ruta=  getcwd()."/$nomBase";
 
  //Verificamos si ya existe el archivo
  if(!file_exists($ruta)){
    //Si no existe creamos la base, una tabla 
    //e insertamos unos registros
    $db= new SQLite($nomBase);
 
    //Se usa exec en sentencias que no devuelven
    //resultados INSERT, UPDATE, DELETE
    //por ejemplo.
    $db->exec('CREATE TABLE BANDAS (ID INTEGER PRIMARY KEY, NOMBRE VARCHAR(100));
                INSERT INTO BANDAS (NOMBRE) VALUES ("METALLICA");
                INSERT INTO BANDAS (NOMBRE) VALUES ("MEGADETH");
                INSERT INTO BANDAS (NOMBRE) VALUES ("FINTROLL");
                INSERT INTO BANDAS (NOMBRE) VALUES ("IRON MAIDEN");');
 
    echo "Base SQLite creada con &eacute;xito.<br/><br/>";
 
  }else{
    //Si ya existe simplemente nos conectamos a ella utilizando 
    //el mismo comando.
    $db= new SQLite($nomBase);   
    echo "Base SQLite ya existe.<br/><br/>";
  } //Fin verificar
 
  //Ejecutamos un update solo por 
  //amor al deporte
  $db->exec('UPDATE BANDAS SET NOMBRE="IRON MAIDEN - UPDATE" WHERE ID=4');
 
  //changes() guarda el número de cuantas
  //filas se afecta con el último query
  echo "cambios: ". $db->changes(). "<br/>";
 
  //si changes() es menor a uno
  //es que no se ejecuto ningun cambio
  if(($db->changes()) < 1){
    echo "Actualización Fallida<br/><br/>";
  }else{    
    echo "Actualización hecha<br/><br/>";
  }
 
  //Ejecutamos un select a la base
  //para estos usamos query()
  $res = $db->query('SELECT * FROM BANDAS');
 
  //Recuperamos todos los registros del query
  //fetcharray devuelte una fila en forma de array
  //SQLITE3_ASSOC lo usamos para identificar
  //las columnas por su nombre
  while ($fila = $res->fetchArray(SQLITE3_ASSOC)) {
    $id=$fila['ID'];
    $nombre=$fila['NOMBRE'];    
    echo("$id - $nombre<br/>");
  }
 
  //Cerramos la conexion con la BD
  $db->close();
?>

    dfsdfsf
<p>sadasdasd</p>
</body>
</html>