<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Desarrollo de Aplicaciones Web</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
  <link rel="stylesheet" href="css/styles/tomorrow-night.css">
  <script src="js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">jQuery</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        jQuery es una biblioteca de JavaScript que permite simplificar la escritura de código. Consiste de un conjunto de funciones y subrutinas que pueden utilizarse
        cada vez que sea necesario.
      </p>
      <p class="text-justify">
        jQuery toma muchas tareas comunes que requieren muchas líneas de JavaScript y las coloca  en métodos que pueden ser invocados con una línea de código.
      </p>
      <p class="text-justify">
        La biblioteca jQuery contiene las siguientes características:
      </p>
      <ul>
        <li>
          <p class="text-justify">Manipulación HTML/DOM</p>
        </li>
        <li>
          <p class="text-justify">Manipulación CSS</p>
        </li>
        <li>
          <p class="text-justify">Métodos para eventos HTML</p>
        </li>
        <li>
          <p class="text-justify">Efectos y animaciones</p>
        </li>
        <li>
          <p class="text-justify">AJAX</p>
        </li>
        <li>
          <p class="text-justify">Utilidades</p>
        </li>
      </ul>
      <p class="text-justify">
        Adicionalmente jQuery tiene plugins que permiten extender sus capacidades aún más para casi cualquier tarea. Existen otras bibliotecas para JavaScript tales como:
      </p>
      <ul>
        <li>
          <p class="text-justify">Mootools</p>
        </li>
        <li>
          <p class="text-justify">Dojo</p>
        </li>
        <li>
          <p class="text-justify">Ext JS</p>
        </li>
      </ul>
      <p class="text-justify">sin embargo jQuery es la más popular y además la más extendible.</p>
    </article>

    <article class="tema">
      <h2>Agregar biblioteca jQuery</h2>
      <p class="text-justity">
        Existen muchas formas de agregar jQuery a nuestras páginas, por ejemplo:
      </p>
      <ul>
        <li>
          <p class="text-justify">Descargar la última versión en <a href="http://jquery.com/">jquery.com</a>.</p>
        </li>
        <li>
          <p class="text-justify">Incluir jQuery desde un CDN, como <a href="https://developers.google.com/speed/libraries/#jquery">google.</a></p>
        </li>
      </ul>
      <p class="text-justity">
        Cualquiera que sea el método que elija, jQuery debe agregarse al código HTML tal y como lo hace con cualquier JS.
      </p>
      <p class="text-justity">
        Existen dos versiones de jQuery, desarrollo y producción. La versión de desarrollo incluye funcionalidades que se encuentran en fase de prueba, mientras
        que la versión de desarrollo contiene las funciones que ya pasaron por la etapa de prueba y ha sido minimizada y comprimida. En la mayoría de los casos es
        recomendable utilizar la versión de producción.
      </p>
    </article>

    <article class="tema">
      <h2>Sintaxis básica de jQuery.</h2>
      <p class="text-justity">
        La sintaxis jQuery está hecha para seleccionar elementos HTML y realizar alguna acción en estos elementos. La sintaxis básica es:
      </p>
      <pre><code>
  $(selector).action()
      </code></pre>
      <ul>
        <li>
          <p class="text-justify">El símbolo <code>$</code> define/accesa el inicio de jQuery.</p>
        </li>
        <li>
          <p class="text-justify">El <code>selector</code> es el elemento que se aplicará o buscará en los elementos HTML </p>
        </li>
        <li>
          <p class="text-justify"><code>action()</code> es la acción que jQuery realizará sobre los elementos. </p>
        </li>
      </ul>
      <p class="text-justity">
        <b>Ejemplo</b>: Oculta el elemento actual.
      </p>
      <pre><code>
  $(this).hide()
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo</b>: Oculta todos los elementos <code>&lt;p&gt;</code>.
      </p>
      <pre><code>
  $("p").hide()
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo</b>: Oculta todos los elementos de la clase <code>prueba</code>.
      </p>
      <pre><code>
  $(".prueba").hide()
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo</b>: Oculta todos los elementos con id <code>prueba</code>.
      </p>
      <pre><code>
  $("#prueba").hide()
      </code></pre>
      <p class="text-justity">
        Es recomendable que todo el código que se escriba en jQuery se encuentre dentro del evento ready. Esto se hace para prevenir que el código se ejecute hasta que la
        página ha sido completamente cargada y no antes. Si el código se ejecutase antes de que la página haya sido completamente cargada podrían ocurrir situaciones como:
      </p>
      <ul>
        <li>
          <p class="text-justify">Tratar de esconder un elemento que no ha sido creado aún.</p>
        </li>
        <li>
          <p class="text-justify">Tratar de obtener el tamaño de una imagen que no ha sido cargada aún.</p>
        </li>
      </ul>

      <p class="text-justity">
        <b>Ejemplo 1</b>.  Comenzando con jQuery
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Ejemplo 1&lt;/title&gt;
      &lt;script type="text/javascript" src="js/jquery.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("p").click(
              function() {
                $(this).hide();
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;Si me clickeas desapareceré.&lt;/p&gt;
      &lt;p&gt;Click!&lt;/p&gt;
      &lt;p&gt;Click!&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo 2</b>.
      </p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Ejemplo 2&lt;/title&gt;
      &lt;script type="text/javascript" src="js/jquery.js"&gt;
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;div id="capa" style="padding: 10px; background-color: #ff8800"&gt;Haz clic en un botón&lt;/div&gt;
      &lt;br&gt;
      &lt;form&gt;
        &lt;input type="button" value="Botón A"
            onclick="$('#capa').html('Has hecho clic en el botón &lt;b&gt;A&lt;/b&gt;')"&gt;
        &lt;input type="button" value="Botón B"
            onclick="$('#capa').html('Recibido un clic en el botón &lt;b&gt;B&lt;/b&gt;')"&gt;
      &lt;/form&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo 3</b>.
      </p>
      <p class="text-justity">HTML</p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Ejemplo 3&lt;/title&gt;
      &lt;script type="text/javascript" src="js/jquery.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/mijquery.js"&gt;
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;div id="capa" style="padding: 10px; background-color:#ff8800;"&gt;
        Pon el ratón encima de esta capa
      &lt;/div&gt;
      &lt;br&gt;
      &lt;div id="mensaje" style="display:none"&gt;
        Has puesto el ratón encima!! &lt;br&gt;
        (Ahora quitalo de la capa)
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">JS</p>
      <pre><code>
  $(document).ready(function(){
    $("#capa").mouseenter(function(evento){
      $("#mensaje").css("display", "block");
    });
    $("#capa").mouseleave(function(evento){
      $("#mensaje").css("display", "none");
    });
  })
      </code></pre>
    </article>
    <article class="tema">
      <h2>Eventos jQuery</h2>
      <p class="text-justify">
        jQuery está hecho para responder a los eventos que ocurren en un página HTML. Un evento es cada una de las diversas acciones que puede llevar a cabo el usuario
        que la página pueda responder. Un evento representa el momento preciso cuando algo ocurre.
      </p>
      <p class="text-justify">
        Ejemplos:
      </p>
      <ul>
        <li>
          <p class="text-justify">Mover el ratón sobre un elemento.</p>
        </li>
        <li>
          <p class="text-justify">Seleccionar un botón tipo <code>radio</code>.</p>
        </li>
        <li>
          <p class="text-justify">Hacer click sobre un elemento.</p>
        </li>
      </ul>
      <p class="text-justify">Algunos eventos típicos son los siguientes:</p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Ratón</th>
            <th>Teclado</th>
            <th>Formulario</th>
            <th>Documento / Ventana</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>click</td>
            <td>keypress</td>
            <td>submit</td>
            <td>load</td>
          </tr>
          <tr>
            <td>dbclick</td>
            <td>kydown</td>
            <td>change</td>
            <td>resize</td>
          </tr>
          <tr>
            <td>mouseenter</td>
            <td>keyup</td>
            <td>focus</td>
            <td>scroll</td>
          </tr>
          <tr>
            <td>mouseleave</td>
            <td></td>
            <td>blur</td>
            <td>unload</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">
        <b>Ejemplo 4</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Ejemplo 4&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("p").dblclick(
              function() {
                $(this).hide();
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;¡Si me das doble click moriré!&lt;/p&gt;
      &lt;p&gt;¡¡No me mates!!&lt;/p&gt;
      &lt;p&gt;¡Por favor no!&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 5</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Ejemplo 5&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("button").click(
              function() {
                $("p").hide();
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h2&gt;Encabezado&lt;/h2&gt;
      &lt;p&gt;Un párrafo&lt;/p&gt;
      &lt;p&gt;Otro párrafo&lt;/p&gt;
      &lt;button&gt;Presioname&lt;/button&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 6</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("#p1").mouseenter(
              function() {
                  alert("Has entrado a p1!");
                }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p id="p1"&gt;Entra a este párrafo.&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 7</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("#p1").mouseleave(
              function() {
                alert("Has dejado p1!");
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p id="p1"&gt;Este es un párrafo!.&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        El método <code>hover()</code> es la combinación de los métodos <code>mouseenter()</code> y <code>mouseleave()</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 8.</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Ejemplo 8&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("#p1").hover(
              function() {
                alert("Entraste al párrafo.");
              },
              function() {
                alert("Saliste del párrafo.");
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p id="p1"&gt;Éste es un párrafo.&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        El método <code>focus()</code> maneja el evento cuando un campo de un formulario recibe el foco de atención. El método <code>blur()</code> maneja el evento cuando
        un campo pierde el foco de atención.
      </p>
      <p class="text-justity">
        <b>Ejemplo 9.</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Ejemplo 9&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script&gt;
        $(document).ready(
          function() {
            $("input").focus(
              function() {
                $(this).css("background-color","#cccccc");
              }
            );
            $("input").blur(
              function() {
                $(this).css("background-color","#ffffff");
              }
            );
          }
        );
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      Nombre: &lt;input type="text" name="nombre"&gt;&lt;br&gt;
      Email: &lt;input type="email" name="email"&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">
        <b>Ejemplo 10.</b> Modificar el contenido de párrafos y tablas.
      </p>
      <p class="text-justity">HTML</p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Ejemplo 10&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/cambiaTexto.js"&gt;
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;input type="button" value="Obtener el texto contenido en un párrafo" id="boton1"&gt;&lt;br&gt;
      &lt;input type="button" value="Modificar el texto de un párrafo" id="boton2"&gt;&lt;br&gt;
      &lt;input type="button" value="Modificar el texto de los elementos de una tabla" id="boton3"&gt;&lt;br&gt;
      &lt;p id="parrafo1"&gt;Texto del primer párrafo&lt;/p&gt;
      &lt;table&gt;
        &lt;tr&gt;
          &lt;td&gt;celda (1,1)&lt;/td&gt;&lt;td&gt;celda (1,2)&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;celda (2,1)&lt;/td&gt;&lt;td&gt;celda (2,2)&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/table&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">jQuery</p>
      <pre><code>
  var x;
  x=$(document);
  x.ready(inicializarEventos);
  function inicializarEventos () {
    var x = $("#boton1");
    x.click(extraerTexto);
    x = $("#boton2");
    x.click(modificarTexto);
    x = $("#boton3");
    x.click(modificarDatosTabla);
  }
  function extraerTexto () {
    var x = $("#parrafo1");
    alert(x.text());
  }
  function modificarTexto () {
    var x = $("#parrafo1");
    x.text("Nuevo texto del párrafo");
  }
  function modificarDatosTabla () {
    var x = $("td");
    x.text("Texto Nuevo");
  }
      </code></pre>

    </article>

    <article class="tema">
      <h2>Efectos en jQuery</h2>
      <h3>Mostrar y ocultar</h3>
      <p class="text-justity">
        Los métodos <code>hide()</code> y <code>show()</code> permiten ocultar y mostrar elementos HTML respectivamente.
      </p>
      <p class="text-justity">
        <b>Ejemplo 11</b>. Efectos en jQuery: Aparecer y desaparecer texto
      </p>
      <p class="text-justity">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery11.js"&gt;
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;Si presionas el botón "Ocultar" desapareceré!.&lt;/p&gt;
      &lt;button id="hide"&gt;Ocultar&lt;/button&gt;
      &lt;button id="show"&gt;Mostrar&lt;/button&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("#hide").click(
        function() {
          $("p").hide();
        }
      );
      $("#show").click(
        function() {
          $("p").show();
        }
      );
    }
  );
      </code></pre>
      <p class="text-justity">
        Las funciones <code>hide()</code> y <code>show()</code> permiten recibir un par de parámetros que permiten controlar la velocidad con la que se llevan a cabo las
        animaciones. El parámetro que se envía es un tiempo en milisegundos.
      </p>
      <p class="text-justity">
        El método <code>toogle()</code> es la combinación de <code>hide</code> y <code>show</code>, si <code>hide</code> es verdadero entonces se aplica <code>show</code>
        y viceversa.
      </p>
      <p class="text-justity">
        <b>Ejemplo 12</b>. Método toogle.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery12.js"&gt;
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;button&gt;Toggle&lt;/button&gt;
      &lt;p&gt;Un párrafo de ejemplo.&lt;/p&gt;
      &lt;p&gt;Otro párrafo.&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
        function() {
          $("p").toggle(100);
        }
      );
    }
  );
      </code></pre>
    </article>

    <article class="tema">
      <h2>Desvanecer y Aparecer</h2>
      <p class="text-justity">
        Con jQuery se pueden aparecer y desaparecer elementos con los métodos <code>fadeIn()</code> y <code>fadeOut()</code> respectivamente.
      </p>
      <p class="text-justity">
        <b>Ejemplo 13</b>. FadeIn/FadeOut
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Efectos con jQuery&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery13.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;Demostración de fadeIn() y fadeOut() con diferentes parámetros.&lt;/p&gt;
      &lt;button id="fadeIn"&gt;FadeIn&lt;/button&gt;
      &lt;button id="fadeOut"&gt;FadeOut&lt;/button&gt;
      &lt;br&gt;&lt;br&gt;
      &lt;div id="div1" style="width:80px;height:80px;display:none;background-color:red;"&gt;&lt;/div&gt;&lt;br&gt;
      &lt;div id="div2" style="width:80px;height:80px;display:none;background-color:green;"&gt;&lt;/div&gt;&lt;br&gt;
      &lt;div id="div3" style="width:80px;height:80px;display:none;background-color:blue;"&gt;&lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justity">jQuery</p>
      <pre><code>
  $(document).ready(
    function() {
      $("#fadeIn").click(
          function() {
              $("#div1").fadeIn();
              $("#div2").fadeIn("slow");
              $("#div3").fadeIn(3000);
            }
        );
      $("#fadeOut").click(
          function() {
              $("#div1").fadeOut();
              $("#div2").fadeOut("slow");
              $("#div3").fadeOut(3000);
            }
        );
    }
  );

      </code></pre>
      <p class="text-justity">
        El método <code>fadeToggle()</code> es la combinación de fadeIn y fadeOut.
      </p>
      <p class="text-justity">
        <b>Ejemplo 14.</b> fadeToggle
      </p>
      <p class="text-justity">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Efecto fadeToggle()&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery14.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;Demostración de fadeToggle() con diferentes parámetros.&lt;/p&gt;
      &lt;button&gt;Click&lt;/button&gt;
      &lt;br&gt;&lt;br&gt;
      &lt;div id="div1" style="width:80px;height:80px;background-color:red;"&gt;&lt;/div&gt;
      &lt;br&gt;
      &lt;div id="div2" style="width:80px;height:80px;background-color:green;"&gt;&lt;/div&gt;
      &lt;br&gt;
      &lt;div id="div3" style="width:80px;height:80px;background-color:blue;"&gt;&lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
          function() {
              $("#div1").fadeToggle();
              $("#div2").fadeToggle("slow");
              $("#div3").fadeToggle(3000);
            }
        );
    }
  );
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

    <article class="tema">
      <h2>Desplazar</h2>
      <p class="text-justify">
        El método <code>slide()</code> permite desplazar hacia arriba o abajo un elemento HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 15</b>. slideDown y slideUp
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery15.js"&gt;&lt;/script&gt;
      &lt;link rel="stylesheet" type="text/css" href="css/jQuery15.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;div id="flip1"&gt;Click para deslizar&lt;/div&gt;
      &lt;div id="panel1" style="display:none;"&gt;Hola Mundo!&lt;/div&gt;
      &lt;br&gt;
      &lt;div id="flip2"&gt;Click para ocultar&lt;/div&gt;
      &lt;div id="panel2"&gt;Hola Mundo!&lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("#flip1").click(
        function() {
          $("#panel1").slideDown("slow");
        }
      );
      $("#flip2").click(
        function() {
          $("#panel2").slideUp("slow");
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        CSS
      </p>
      <pre><code>
  #panel1, #panel2, #flip1, #flip2 {
    padding:5px;
    text-align:center;
    background-color:#e5eecc;
    border:solid 1px #c3c3c3;
  }
  #panel1 {
    padding:50px;
    display:none;
  }
  #panel2 {
    padding:50px;
    display:block;
  }
      </code></pre>
      <p class="text-justify">
        El método <code>slideToggle()</code> es una combinación entre <code>slideIn</code> y <code>slideOut</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 16.</b> fadeToggle
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery16.js"&gt;&lt;/script&gt;
      &lt;link rel="stylesheet" type="text/css" href="css/jQuery16.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;div id="flip"&gt;Click para mostrar u ocultar&lt;/div&gt;
      &lt;div id="panel"&gt;Acá estoy!&lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("#flip").click(
        function() {
          $("#panel").slideToggle("slow");
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        CSS
      </p>
      <pre><code>
  #panel,#flip {
    padding:5px;
    text-align:center;
    background-color:#e5eecc;
    border:solid 1px #c3c3c3;
  }
  #panel {
    padding:50px;
    display:none;
  }
      </code></pre>
    </article>

    <article class="tema">
      <h2>Animación</h2>
      <p class="text-justify">
        El método <code>animate()</code> de jQuery permite crear animaciones personalizadas sobre elementos HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 17.</b> Mover un elemento
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;jQuery animate&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery17.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;button&gt;Comenzar Animación&lt;/button&gt;
      &lt;p&gt;Por defecto todos los elementos HTML tienen una posición estática y no pueden moverse.
      Para manipular la posición, se debe ajustar la propiedad CSS &lt;i&gt;position&lt;/i&gt; del elemento
      en cuestión a &lt;i&gt;relative&lt;/i&gt;, &lt;i&gt;fixed&lt;/i&gt; o &lt;i&gt;absolute&lt;/i&gt;.&lt;/p&gt;
      &lt;div style="background:#98bf21;height:100px;width:100px;position:absolute;"&gt;
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
        function() {
          $("div").animate({left:'250px'});
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        Con el método <code>animate()</code> se pueden modificar varios atributos simultáneamente.
      </p>
      <p class="text-justify">
        <b>Ejemplo 18</b>. Modificando varios  atributos CSS con animate
      </p>
      <p class="text-justify">jQuery</p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
        function() {
          $("div").animate({
            left:'250px',
            opacity:'0.5',
            height:'150px',
            width:'150px'
          });
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        Cuando se mueve un elemento con animate se pueden utilizar posiciones relativas.
      </p>
      <p class="text-justify">
        <b>Ejemplo 19.</b> Posiciones relativas
      </p>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
        function() {
          $("div").animate({
            left:'+=250px',
            height:'+=150px',
            width:'+=150px'
          });
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        Pueden utilizarse valores predefinidos para las animaciones: <code>show</code>, <code>hide</code> y <code>toggle</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 20.</b> Valores predefinidos para las animaciones.
      </p>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("button").click(
        function() {
          $("div").animate({
            height:'toggle',
          });
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        Por defecto jQuery tiene una cola para las animaciones. Esto es, que si se invocan varias animaciones que afectan al mismo elemento, jQuery crea una cola interna y
        las animaciones se realizan una por una en el orden en que se invocaron.
      </p>
      <p class="text-justify">
        <b>Ejemplo 21</b>. Animaciones en serie 1
      </p>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(function(){
    $("button").click(function(){
      var div=$("div");
      div.animate({height:'300px',opacity:'0.4'},"slow");
      div.animate({width:'300px',opacity:'0.8'},"slow");
      div.animate({height:'100px',opacity:'0.4'},"slow");
      div.animate({width:'100px',opacity:'0.8'},"slow");
    });
  });
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 22</b>. Animaciones en serie 2
      </p>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(function(){
    $("button").click(function(){
      var div=$("div");
      div.animate({left:'100px'},"slow");
      div.animate({fontSize:'3em'},"slow");
    });
  });
      </code></pre>
      <p class="text-justify">
        jQuery tiene una colección de algunos otros efectos, <a href="http://www.w3schools.com/jquery/jquery_ref_effects.asp">aquí</a> puede encontrar más información acerca de ellos.
      </p>

    </article>

    <article class="tema">
      <h2>Interrumpir animaciones</h2>
      <p class="text-justify">
        El método <code>stop()</code> permite interrumpir una animación antes de que termine.
      </p>
      <p class="text-justify">
        Ejemplo 23. Método stop()
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;Método jQuery stop()&lt;/title&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery22.js"&gt;&lt;/script&gt;
      &lt;link rel="stylesheet" type="text/css" href="css/jQuery22.css"&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;button id="stop"&gt;Detener animación&lt;/button&gt;
      &lt;div id="flip"&gt;Presione para deslizar&lt;/div&gt;
      &lt;div id="panel"&gt;Hola Mundo!&lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(
    function() {
      $("#flip").click(
        function() {
          $("#panel").slideDown(5000);
        }
      );
      $("#stop").click(
        function() {
          $("#panel").stop();
        }
      );
    }
  );
      </code></pre>
      <p class="text-justify">
        CSS
      </p>
      <pre><code>
  #panel,#flip {
    padding:5px;
    text-align:center;
    background-color:#e5eecc;
    border:solid 1px #c3c3c3;
  }
  #panel {
    padding:50px;
    display:none;
  }
      </code></pre>
    </article>

    <article class="tema">
      <h2>Encadenando acciones/métodos</h2>
      <p class="text-justify">
        Con jQuery es posible encadenar acciones y métodos. Esto permite poder aplicar varias acciones o métodos a un mismo elemento en una sola línea.
      </p>
      <p class="text-justify">
        <b>Ejemplo 24</b>. Animaciones en Cadena
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Animaciones en Cadena&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"&gt;
      &lt;/script&gt;
      &lt;script type="text/javascript" src="js/jQuery23.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;button&gt;Click&lt;/button&gt;
      &lt;p id="p1" style="background-color: #DAE3ED;"&gt;jQuery is fun?!&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        jQuery
      </p>
      <pre><code>
  $(document).ready(function() {
    $("button").click(function() {
      $("#p1")
        .css("color","red")
        .slideUp(2000)
        .slideDown(2000)
        .fadeOut(1000)
        .fadeIn(1000)
        .animate({left:'+=250px',height:'+=150px',width:'+=150px'})
        .animate({fontSize:'3em'},"slow");
    });
  });
      </code></pre>
    </article>
  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
