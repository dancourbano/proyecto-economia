<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Proyecto de MACROECONOMIA</title>
     <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/site.css"/>
    <link rel="stylesheet" href="css/producto.css"/>
    <link rel="stylesheet" href="css/assets/css/font-awesome.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/prefixfree.js"></script>
    <script src="js/retina.js"></script>
  
    <link rel="stylesheet" href="css/responsiveslides.css">
    <link rel="stylesheet" href="css/danco.css">
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

        $(document).ready(function(){

          $("#calcular").click(function(){
          qd1=$('#qd1').val();
          qd2=$('#qd2').val();
         qd3=$('#qd3').val();
          qo1=$('#qo1').val();
          qo2=$('#qo2').val();
           qo3=$('#qo3').val();
           sal=$('#sal').val();

          signo1=parseInt(qo3), signo2=parseInt(qd3);
          if(qd2=='-'){
            signo2=-1*parseInt(qd3);
          }
          if(qo2=='-'){
            signo1=-1*parseInt(qo3);
          }

            Trabajar=parseInt(qo1)+signo1*parseInt(sal);
           Contratar=parseInt(qd1)+signo2*parseInt(sal);
          document.formulario.trabajar.value=Trabajar;
          document.formulario.contratar.value=Contratar;
          Desempleados=Trabajar-Contratar;

          document.formulario.desempleados.value=Desempleados;
          if(qd2=='+'){            
            qd3=parseInt(qd3)*-1;            
          }
          if(qo2=='-'){
            qo3=parseInt(qo3)*-1;
          }
                   
          Despedidos=(parseInt(qd1)-parseInt(qo1))/(parseInt(qo3)+parseInt(qd3));
          document.formulario.despedidos.value=Despedidos;
          var  equi=(parseInt(qd1)-parseInt(qo1))/(parseInt(qo3)+parseInt(qd3));
          document.formulario.salequi.value=equi;
          document.formulario.cantequi.value=parseInt(qd1)+signo2*parseInt(equi);
        });
        var datos= new Array();
        $('#graficar').click(function(){

            datos[0]=qd1;
            datos[1]=qd2;
            datos[2]=qd3;
            datos[3]=qo1;
            datos[4]=qo2;
            datos[5]=qo3;
           
                    // for similar functionality in Opera, but it's not modal!
                var modal = window.open ("hija.html", null, "width=500,height=500,left=300,modal=yes,alwaysRaised=yes", null);
                modal.dialogArguments = datos;
        
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
<ul>
<table border="5" bordercolor="black" width="400" cellspacing="5" cellpadding="5" >

    <?php
   
   ?>
    </table> 

  <form name="formulario">
  <div id="demanda" class="row">
 
    <label><h4>Demanda</h4>   </label>
    <label><p> Qd= <input type="text" placeholder="numero" pattern="[0-9]+\.?[0-9]*" title="escribir funcion" id="qd1" size="6"  required> <input type="text" id="qd2" placeholder="signo" pattern="[+-]?" title="escribir funcion" id="qd" size="6"  required> <input type="text" id="qd3" placeholder="numero" pattern="[0-9]+\.?[0-9]*" title="escribir funcion" id="qd" size="6"  required> <b>S</b>
    </p></label>
   
  </div>


  <div id="oferta" class="row">
    
    <label><h4>Oferta</h4>  </label>
    <label><p> Qo= <input type="text" placeholder="numero" pattern="[0-9]+\.?[0-9]*" title="escribir funcion" id="qo1" size="6"  required> <input type="text" id="qo2" placeholder="signo" pattern="[+-]?" title="escribir funcion" id="qd" size="6"  required> <input type="text" id="qo3" placeholder="numero" pattern="[0-9]+\.?[0-9]*" title="escribir funcion" id="qd" size="6"  required> <b>S</b>
    </p></label>
   
   
  </div>

  <div id="sal_min" class="row">
    
    <label> <h4>Con Salario Minimo </h4> </label>
     <label> <p>Salario Minimo <input type="text" class="input-small" id="sal" pattern="[0-9]+\.?[0-9]*" title="escribir solo numeros" required></p></label>
    <label><p> <input type="button" id="calcular" value="calcular"></p> </label>
   
    <label> <p>Desean Trabajar(Qo) <input name="trabajar" type="text" class="input-small" ></p></label>
    <label> <p>Se desean Contratar(Qd) <input name="contratar" type="text" class="input-small" ></p></label>
    <label> <p>Desempleados <input name="desempleados" type="text" class="input-small" ></p></label>
    <label> <p>Despedidos <input name="despedidos" type="text" class="input-small" ></p></label>
   
  </div>
    <div id="sin_sal_min" class="row">
    
    <label> <h4>Sin Salario Minimo</h4> </label>
    <label> <p> Salario de Equilibrio <input type="text" name="salequi" class="input-small" ></p></label>
    <label> <p>Cantidad de Equilibrio <input type="text" name="cantequi" class="input-small" ></p></label>
    </div>
    <input type="button" value="graficar" id="graficar">
  </form>



</ul>
</section>


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


