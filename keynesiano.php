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

 
 <table align="center" border="5" bordercolor="black" width="400" cellspacing="3" cellpadding="3" >
                  <tr width="20%">
                    <td ><h1>Codigo</h1> </td>
                    <td ><h1>Nombdsfsdfdsso</h1></td>
                  </tr>
                <?
                  ?>
           </table> 

<p style:"clear:both;"/>
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


