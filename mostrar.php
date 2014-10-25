<html>
<head>
	<title></title>
</head>
<body>


<?php 


try

{

    $db = new PDO('sqlite:dan.sqlite');






 

//insert some data...
$db->exec("INSERT INTO nombre (id, nombre) VALUES (12,'dan');".

"INSERT INTO nombre (id, nombre) VALUES (13,'dani');" .

"INSERT INTO nombre (id, nombre) VALUES (14,'dancoman');");

 

//now output the data to a simple html table...

print "<table border=1>";

print "<tr><td>Id</td><td>Breed</td></tr>";

$result = $db->query('SELECT * FROM nombre');

foreach($result as $row)

{
print "<tr><td>".$row['id']."</td>";
print "<td>".$row['nombre']."</td>";
}

print "</table>";

 

// close the database connection

$db = NULL;


}

catch(PDOException $e)

{
print 'Exception : '.$e->getMessage();
}

 ?>
</body>
</html>