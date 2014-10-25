<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Proyecto de MACROECONOMIA</title>
     <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="css/producto.css"/>
    <link rel="stylesheet" href="css/assets/css/font-awesome.css">
   <link rel="stylesheet" href="css/assets/less/retina.less">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/prefixfree.js"></script>
    <script src="js/retina.js"></script>
    <script src="js/retina.less"></script>
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
        $(function () {
         
          $("#slider4").responsiveSlides({
           maxwidth:300,
            speed: 500
           
          });

            $("#slider5").responsiveSlides({
                maxwidth:300,
                speed: 500
          });

        });

        $(function() {
            var pull        = $('#pull');
                menu        = $('ul#menu');
                menuHeight  = menu.height();

            $(pull).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
  </script>
</head>
<body>
  <header>
       <img src="imagenes/logo.jpg" weigth="70" width ="55" alt="Logo">
       <p id="logo"><a  href="index.html">Aplicacion -<span style = "color: #02ADF5">MACROECONOMICA</span></a></p>
        <ul id="menu" class="clearfix">
            <a href="index.html"><li class="active">Descripcion<br>de Aplicacion</li></a>
            <a href="ingreso.php"><li class="active">Distribucion<br>del Ingreso</li></a>
            <a href="mercado.php"><li class="active">Mercado<br>Laboral</li></a>
            <a href="keynesiano.php"><li class="active">Modelo<br>Keynesiano</li></a>



        </ul>  
         <a href="index.html" id="pull">Aplicacion - MACROECONOMICA </a>
    </header>

<section id="derechaC">
<!-- aki hay ejemplos de forms con bootstrap 
   <br/>
   <h2>Registre Nuevo Alumno: </h2>
   <br/>
   <form name="form" class="contact_form" action="alumnos.php" method="POST">
        <ul>
              <li>
              <label for="name"> Ingrese Nombres:</label> 
              <?php
              echo "<input name=nombres type=text  placeholder='Ejemplo : Jesus Luiscin' required />";
              ?>
              </li>
              <li>
                <label for="name">Ingrese Apellidos:</label>
              <?php
              echo "<input name=apellidos type=text  placeholder='Ejemplo : Vela Fernandez' required />";
              ?>
              </li>
              <li>
                 <label for="email">Ingrese Email:</label>
                <?php
              echo "<input name=email type=email  placeholder='Ejemplo : elvago@gmail.com'/>";
              ?>
              </li>
              <li>
              <label for="name">Ingrese Modo de Ingreso:</label>
              <?php
              echo "<input name=modo type=text  placeholder='Ejemplo : Ordinaro , Cepunt , Excelencia' />";
              ?>
               </li>
              <li>
                <label for="name">Comentarios:</label>
                <textarea name="comentario" cols="40" rows="6" style="resize: none;" placeholder="Ejemplo : es urgente" />
              </textarea>
              </li> 
         <li>
         <button name="enviar" class="submit" type="submit" > Registrar las Matriculas </button>
         </li>
	     <li>
         <button name="limpiar" class="submit" type="reset" > Limpiar </button>
         </li>
        </ul>
      </form>
</section>
<?php
if( isset($_POST['enviar']) && $_SERVER['REQUEST_METHOD'] == 'POST')
{  
$conexion=mysql_connect("localhost","root","") or die ('No se pudo acceder a la BD');
mysql_select_db("db_matriculas",$conexion);
//$conexion=mysql_connect("mysql.hostinger.es","u684899530_telp2","guillermo210393")or die ("No se pudo acceder a la BD");
//mysql_select_db("u684899530_telp2",$conexion);
  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $modo=$_POST["modo"];
  $email=$_POST["email"];
  $comentario=$_POST["comentario"];
  $consulta=mysql_query("INSERT INTO alumno VALUES (DEFAULT,'$nombres','$apellidos','$modo','$email','$comentario')");
  mysql_close($conexion);}
?>
<p style:"clear:both;"/>
<br>
<br>
<br>
<br><br><br><br><br><br>
-->
 <nav>
        <ul>
        <li>
    <a href="#" >
    <i class="icon-html5"></i> <i class="icon-css3"></i>
    <p>
    <span>Guillermo Quintanilla Paredes</span><br/>
    Desarrollo del Front-end y parte de Back-end
    </p>
    </a>
      </li> 
     <li>
    <a href="#" >
    <i class="icon-copy"></i>
    <p>
    <span>Favio </span><br/>
        Desarrollo de la Base de Datos
    </p>
    </a>
      </li>
        <li>
    <a href="#" >
    <i class="icon-css3"></i>
    <p> 
    <span>Daniel</span> <br/>
    Apoyo al desarrollo del Front-end 
    </p>
    </a>
      </li>
      <li>
    <a href="#" >
    <i class="icon-cogs"></i>
    <p> 
    <span>Lizbeth</span> <br/>
        Desarrollo la parte de Back-end
    </p>
    </a>
      </li>
  </ul>
    </nav>
</body>
</html>
