<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Programación para Internet</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
  <style>
    /* Estilo necesario para el funcionamiento del carrusel de Bootstrap de la Práctica 11 */
    .carousel-inner > .item > img,
    .carousel-inner > .item > a > img {
        width: 70%;
        margin: auto;
    }
  </style>
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">Prácticas</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Práctica 1: Usabilidad</h2>
      <p class="text-justify">
        Presentar en clase dos páginas web comerciales que posean una <b>buena usabilidad</b> y dos más que posean una <b>mala usabilidad</b>.
        En todos los casos deberan fundamentar sus elecciones.
      </p>
    </article>

    <article class="tema">
      <h2>Práctica 2: HTML 1</h2>
      <h3>Elementos básicos de HTML.</h3>
      <p class="text-justify">
        Elegir alguna temática de su agrado y desarrollar una documento HTML que contenga los siguientes elementos:
      </p>
      <ul>
        <li>2 Encabezados h1, h2, h3, h4, h5, y h6.</li>
        <li>Una lista ordenada con 10 elementos.</li>
        <li>Una lista no ordenada que tenga 10 elementos.</li>
        <li>Una lista descriptiva que contenga 5 elementos.</li>
        <li>Un formulario con los siguientes campos:
          <ul>
            <li>Tres campos de texto.</li>
            <li>Un campo de contraseña.</li>
            <li>Un campo numérico.</li>
            <li>Un campo para introducir fecha (componente nativo de HTML5)</li>
            <li>Un selector de opciones incluyentes (checkbox) con 4 opciones.</li>
            <li>Un selector de opciones excluyentes (radio) con 4 opciones.</li>
            <li>Un botón de "Submit"</li>
          </ul>
        </li>
      </ul>
    </article>

    <article class="tema">
      <h2>Práctica 3: HTML 2</h2>
      <h3>Tablas con HTML y estilo básico con CSS.</h3>
      <p class="text-justify">
        Elija alguna temática de su agrado y desarrollar las siguientes tablas en HTML con las características indicadas:
      </p>
      <ol>
        <!-- <li>
          <ul>
            <li>
              <p class="text-justify">Tamaño: 4 renglones y 3 columnas</p>
            </li>
            <li>
              <p class="text-justify">Borde: "dashed", 5 pixeles de ancho y algún color distinto a negro.</p>
            </li>
          </ul>
        </li> -->
        <li>
          <ul>
            <li>
              <p class="text-justify">Tamaño: Al menos 10 renglones y 4 columnas.</p>
            </li>
            <li>
              <p class="text-justify">El encabezado debe tener estilo contrastante con respecto al contenido.</p>
            </li>
            <li>
              <p class="text-justify">En el contenido debe haber tres tipos diferentes de estilo alternados por renglón.</p>
            </li>
          </ul>
        </li>
        <li>
          Realizar una tabla que tenga estilo similar a la siguiente: <br>
          <img class="img-responsive" src="img/tabla.png" width="800px" alt="" class="imgcenter">
        </li>
        <li>
          Investigar como realizar una tabla que tenga celdas colapsadas o agrupadas, y realizar una tabla como la siguiente:
          <div class="table-responsive">
            <table class="table table-bordered">
              <tr>
                <th colspan="2">Grupo 1</th>
                <th colspan="2">Grupo 2</th>
              </tr>
              <tr>
                <td>Elemento 1</td>
                <td>Elemento 2</td>
                <td>Elemento 3</td>
                <td>Elemento 4</td>
              </tr>
              <tr>
                <td>Elemento 5</td>
                <td>Elemento 6</td>
                <td>Elemento 7</td>
                <td>Elemento 8</td>
              </tr>
            </table>
          </div>
        </li>
      </ol>
    </article>

    <article class="tema">
      <h2>Práctica 4: JavaScript 1</h2>
      <h3>Manejo de elementos HTML con JavaScript</h3>
      <p class="text-justify">
        Desarrollar los siguientes archivos HTML y JavaScript. Utilice archivos independientes para HTML y JS.
      </p>
      <ol>
        <li> Desarrollar un programa en JS que reciba como parámetro una calificación numérica a través
          de un elemento <code>&lt;input&gt;</code> tipo número dentro de un formulario HTML. El archivo JS debe
          tener una función que haga la evaluación de acuerdo a la siguiente tabla:
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <th>Rango de calificaciones</th>
                <th>Equivalencia</th>
              </thead>
              <tbody>
                <tr>
                  <td>[0,6)</td>
                  <td>NA</td>
                </tr>
                <tr>
                  <td>[6,7.5)</td>
                  <td>S</td>
                </tr>
                <tr>
                  <td>[7.5,9)</td>
                  <td>B</td>
                </tr>
                <tr>
                  <td>[9,10)</td>
                  <td>MB</td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>LAP</td>
                </tr>
              </tbody>
            </table>
          </div>
          Si el usuario ingresa una calificación menor a 0 o mayor a 10 se deberá mandar un mensaje de error.
          El resultado deberá escribirse en un párrafo.
        </li>
        <li>
          <p class="text-justify">
            Desarrollar un script en JavaScript que reciba un número a través de un <code>&lt;input&gt;</code> tipo número
            dentro de un formulario HTML y calcule el factorial de ese número.
          </p>
          <p class="text-justify">
            Considere que si <code>n</code> es positivo el factorial es
            <code>1*2*3*4*...*n</code>, si <code>n</code> es cero por definición el factorial es 1 y si <code>n</code>
            es negativo el factorial no está definido.
          </p>
          <p class="text-justify">
            Escriba el resultado en un parrafo.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Desarrolle un programa en JavaScript que reciba información de un formulario de HTML. El formulario deberá
            tener las siguientes entradas y el tipo de <code>&lt;input&gt;</code> indicado.
          </p>
          <ul>
            <li>Nombre (text)</li>
            <li>Correo (email)</li>
            <li>Edad (number)</li>
            <li>Género (radio)</li>
            <li>Fecha de nacimiento (date)</li>
            <li>Color favorito (color)</li>
          </ul>
          <p class="text-justify">
            Imprimir en un párrafo toda la información recibida de formulario.
          </p>
        </li>
      </ol>
    </article>

    <article class="tema">
      <h2>Práctica 5: JavaScript 2</h2>
      <h3>Manipulación y modificación de contenido HTML con JS</h3>
      <p class="text-justify">
        Desarrollar un script que permita introducir información a una tabla HTML a través de un formulario. Dicho formulario
        deberá tener los siguientes campos:
      </p>
      <ul>
        <li>1 <code>&lt;text&gt;</code></li>
        <li>1 <code>&lt;email&gt;</code></li>
        <li>1 <code>&lt;checkbox&gt;</code> con tres opciones</li>
        <li>1 <code>&lt;radio&gt;</code> con tres opciones</li>
        <li>1 <code>&lt;datetime-local&gt;</code></li>
        <li>1 <code>&lt;color&gt;</code></li>
        <li>1 <code>&lt;range&gt;</code></li>
      </ul>
      <p class="text-justify">

      </p>
      <p class="text-justify">
        Considere también:
      </p>
      <ol>
        <li>
          <p class="text-justify">
            El formulario deberá tener un <code>&lt;button&gt;</code> que llame a una función en <code>JS</code> que se encargue de
            validar que todos los campos no se encuentren vacios (indicar cual se encuentra vacio).
          </p>
        </li>
        <li>
          <p class="text-justify">
            Una vez que todos los campos estén llenos, al presionar el botón deberá escribirse el la información en un nuevo renglón
            de la tabla y borrar los campos del formulario.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La tabla debe alternar estilo entre renglones (con dos estilos es suficiente, puede usar la funcionalidad incluida en CSS).
          </p>
        </li>
        <li>
          <p class="text-justify">
            La tabla deberá tener la propiedad <code>hover</code> (resaltado del renglón cuando el cursor pase sobre el renglón, puede
            usar la funcionalidad incluida en CSS) y <code>overflow-x</code> para responsividad.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Usar archivos independientes para <code>HTML</code>, <code>CSS</code> y <code>JS</code>.
          </p>
        </li>
      </ol>
      <p class="text-justify">

      </p>
    </article>

    <article class="tema">
      <h2>Práctica 6: HTML5 Audio/Video, Youtube y GoogleMaps.</h2>
      <p class="text-justify">
        Desarrollar una página que contenga elementos multimedia de HTML5, Youtube y GoogleMaps. La página deberá contener los siguientes elementos:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            1 archivo de audio
          </p>
        </li>
        <li>
          <p class="text-justify">
            1 arcivo de video
          </p>
        </li>
        <li>
          <p class="text-justify">
            1 video de Youtube
          </p>
        </li>
        <li>
          <p class="text-justify">
            1 feed de Twitter (puede ser un @usuario, #hashtag, búsqueda o alguna otra cosa que muestre una lista de tweets).
          </p>
        </li>
        <li>
          <p class="text-justify">
            1 feed de FaceBook (puede ser un bloque de comentarios insertados o publicaciones insertadas, auxiliese de <a href="https://developers.facebook.com/docs/plugins/embedded-posts" target="_blank">la siguiente página</a> para desarrolladores de FaceBook).
          </p>
        </li>
        <li>
          <p class="text-justify">
            1 elemento de geolicalización con GoogleMaps (investigar como registrarse para obtener el elemento funcional de GoogleMaps).
          </p>
        </li>
      </ul>
      <p class="text-justify">
        Se puede utilizar un <a href="http://www.clipconverter.cc/" target="_blank">convertidor en línea de videos</a> para descargar un vídeo de youtube (en audio o video).
      </p>
      <p class="text-justify">
        Utilizar un archivo externo CSS para asignarle estilo básico a la página que desarrolle.
      </p>
    </article>

    <article class="tema">
      <h2>Práctica 7: CSS y jQuery</h2>
      <p class="text-justify">
        Desarrollar una página en HTML con estilo básico de CSS y funcionalidad con jQuery. Deberá generar tres archivos independientes: HTML, CSS y jQuery.
        La página deberá tener y hacer lo siguiente:
      </p>
      <ul>
        <li>
          <p class="text-justify">Un formulario con 2 campos de texto y uno numérico.</p>
        </li>
        <li>
          <p class="text-justify">Una tabla con tres columnas y dos renglones. Una columna para cada campo del formulario, un renglón para el encabezado de la tabla y otro para el contenido.</p>
        </li>
        <li>
          <p class="text-justify">A través de un botón utilizar jQuery para escribir el contenido del formulario en los campos de la tabla.</p>
        </li>
        <li>
          <p class="text-justify">Utilizar el evento <code>focus</code> para cambiar el color de fondo para cada campo una vez que el cursor se encuentre en el.</p>
        </li>
        <li>
          <p class="text-justify">Un botón de jQuery que borre el contenido del formulario.</p>
        </li>
        <li>
          <p class="text-justify">Deberá haber un botón para hacer <code>toggle</code> para ocultar/mostrar el formulario, otro para la tabla y uno más para ambos.</p>
        </li>
      </ul>
      <p class="text-justify"></p>
    </article>

    <article class="tema">
    	<h2>Práctica 8: Conceptos básicos de PHP</h2>
    	<p class="text-justify">
    		Desarrollar dos paginas HTML con código PHP que realicen lo siguiente:
    	</p>
    	<ol>
        <li>
          <p class="text-justify">Una función en PHP que aproxime el valor del número <code>pi</code>. Uilice la siguiente fórmula. Solicite al usuario
            un valor para el límite superior <code>n</code> de la suma a través de un formulario, mientras más grande sea <code>n</code> mejor será la
            aproximación. Verifique que el valor de <code>n</code> sea mayor que cero.
          </p>
        </li>
        <img class="img-responsive imgcenter" src="img/pi.png" width="200px" alt="Número pi" class="imgcenter">
        <li>
          <p class="text-justify">Una función en PHP que aproxime el valor del número <code>e</code>. Uilice la siguiente fórmula. Solicite al usaurio
            un valor para el límite superior <code>n</code> de la suma a través de un formulario, mientras más grande sea mejor será la aproximación.
            En este caso será necesario que desarrolle una función adicional para la operación factorial. Verifique que el valor de <code>n</code>
            sea mayor que cero.
          </p>
        </li>
        <img class="img-responsive imgcenter" src="img/e.png" width="100px" alt="Número pi" class="imgcenter">
      </ol>
      <p class="text-justify">
      	Utilice una tabla de HTML para imprimir los valores de las iteraciones de los ciclos. La tabla deberá tener dos columnas: <code>n</code> y <code>x</code>. Donde <code>n</code>
      	mostrará la iteración actual y <code>x</code> el valor de la aproximación en dicha iteración. La impresión en la tabla deberá realizarse desde PHP.
      </p>
      <p class="text-justify">
        Utilice un formulario con <code>POST</code> o <code>GET</code> para solicitar los valores de <code>n</code> para cada caso.
      </p>
      <p class="text-justify">
      	Establezca un estilo básico a la página con un archivo externo de CSS.
      </p>
    </article>

    <article class="tema">
      <h2>Practica 9: Manejo de formularios con PHP</h2>
      <p class="text-justify">
        Desarrollar una página que tenga un formuario en HTML con los siguientes input:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>text</code></p>
        </li>
        <li>
          <p class="text-justify"><code>email</code></p>
        </li>
        <li>
          <p class="text-justify"><code>number</code></p>
        </li>
        <li>
          <p class="text-justify"><code>date</code></p>
        </li>
        <li>
          <p class="text-justify"><code>url</code></p>
        </li>
        <li>
          <p class="text-justify"><code>radio</code></p>
        </li>
        <li>
          <p class="text-justify"><code>checkbox</code></p>
        </li>
      </ul>
      <p class="text-justify">
        El contenido deberá ser validado con PHP, utilizar la función <code>filter_var</code> y el
        <a href="http://php.net/manual/en/filter.filters.validate.php" target="_blank">filtro</a> correspondiente para validar
        todos los campos que esta función pueda resolver. Para los demás haga la validación de la forma que corresponda.
      </p>
      <p class="text-justify">
        El formulario deberá indicar los campos requeridos y deberá impedir que el formulario sea enviado si no se han completado estos campos.
        Deberán mantenerse los valores válidos introducidos por el usuario cuando introduzca alguno de forma incorrecta.
      </p>
      <p class="text-justify">
        Una vez que el formulario haya sido llenado correctamente, muestre el contenido del formulario en una tabla HTML que solo tenga
        dos filas, una de encabezados y otra de contenido.
      </p>
      <p class="text-justify">
        Las páginas deberán tener estilo mínimo utilizando un mismo archivo externo <code>CSS</code> para ambas.
      </p>
      <p class="text-justify"></p>
    </article>


    <article class="tema">
      <h2>Práctica 10: MySQL</h2>
      <p class="text-justify">
        Desarrollar un mini-sistema que guarde y lea información de una base de datos en <code>MySQL</code>.
      </p>
      <ol>
        <li>
          <p class="text-justify">
            Una página contendrá un formulario en <code>HTML</code> que le permitirá guardar información al usuario. El formulario deberá tener
            los siguientes campos:
          </p>
          <ul>
            <li><code>text</code></li>
            <li><code>email</code></li>
            <li><code>number</code></li>
            <li><code>url</code></li>
          </ul>
          <p class="text-justify">
            Al ser llenado el formulario deberá guardar en la base de datos el contenido del mismo.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La segunda págian deberá permitir leer el contenido de la base de datos y desplegarla en una tabla en <code>HTML</code>. La tabla
            deberá tener estilo básico (puede reciclar un estilo ya existente).
          </p>
        </li>
      </ol>
      <p class="text-justify">
        Previamente haga la tabla con los campos necesarios en la base de datos.
      </p>
      <p class="text-justify">
        Las páginas deberán tener estilo mínimo utilizando un mismo archivo externo <code>CSS</code> para ambas.
      </p>
    </article>

    <article class="tema">
      <h2>Práctica 11: Elementos básicos de Bootstrap</h2>
      <ol>
        <li>
          <p class="text-justify">Reutilice sus códigos de la práctica 10 y cambie aplique Bootstrap a los archivos que desarrolló.</p>
          <p class="text-justify">Cambie la tabla y el fomulario a la versión de Bootstrap. Además utilice elementos como <code>alert</code>, <code>button</code>,
          <code>well</code> y <code>jumbotron</code> en su minisistema.</p>
          <p class="text justify">No utilice CSS para esta práctica, deje que Bootstrap se encargue del estilo.</p>
        </li>
        <li>
          <p class="text-justify">
            Bootstrap tiene un plugin para desarrollar un carrusel con una pequeña cantidad de código. Utilice el ejemplo que puede encontrar
            <a href="https://www.w3schools.com/bootstrap/bootstrap_carousel.asp">aquí</a> para desarrollar uno con las imégenes de su elección (distintas al ejemplo).
          </p>
          <p class="text-justify"></p>
          <p class="text-justify"></p>
        </li>
      </ol>
          <h3>Ejemplo de Carrusel de Bootstrap</h3>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="img/img_chania.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>Chania</h3>
                  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>

              <div class="item">
                <img src="img/img_chania2.jpg" alt="Chania">
                <div class="carousel-caption">
                  <h3>Chania</h3>
                  <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
                </div>
              </div>

              <div class="item">
                <img src="img/img_flower.jpg" alt="Flower">
                <div class="carousel-caption">
                  <h3>Flowers</h3>
                  <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
              </div>

              <div class="item">
                <img src="img/img_flower2.jpg" alt="Flower">
                <div class="carousel-caption">
                  <h3>Flowers</h3>
                  <p>Beatiful flowers in Kolymbari, Crete.</p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </article>

  </section>
</body>
</html>
