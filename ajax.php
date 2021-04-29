<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Programación para Internet</title>
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
        <h1 class="titulo-principal">AJAX</h1>
        <p class="text-justify"></p>
      </div>
    </div>

    <!-- Barra superior de navegación -->
    <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        AJAX es el sueño de los desarrolladores debido a que les permite:
      </p>
      <ul>
        <li>
          <p class="text-justify">Actualizar una página sin recargar la página por completo.</p>
        </li>
        <li>
          <p class="text-justify">Solicitar datos a un servidor luego de que la página haya sido cargada.</p>
        </li>
        <li>
          <p class="text-justify">Recibir datos de un servidor luego de que la página haya sido cargada.</p>
        </li>
        <li>
          <p class="text-justify">Enviar datos a un servidor en segundo plano.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>AJAX</b> = <b>A</b>synchronous <b>Ja</b>vaScript <b>X</b>ML.
      </p>
      <p class="text-justify">
        AJAX es una técnica para crear páginas rápidas y dinámicas. Permite a las páginas web ser actualizadas de forma asíncrona mediante un intercambio 
        de pequeñas cantidades de información en segundo plano. Sin embargo, <b>AJAX no es un lenguaje de programación</b>.
      </p>
      <p class="text-justify">
        Google hizo popular AJAX en 2005 con <i>Google Suggest</i>.
      </p>
      <p class="text-justify">
        <i>Google Suggest</i> utiliza AJAX para crear una interfaz web dinámica: cuando se comienza a escribir en la caja de busqueda de Google, JavaScript 
        envía los caracteres al servidor y éste le devuelve la lista de sugerencias de búsqueda.
      </p>

      <h2>AJAX está basado en los estándares de Internet</h2>
      <p class="text-justify">
        AJAX está basado en los estándares de Internet y utiliza una combinación de:
      </p>
      <ul>
        <li>
          <p class="text-justufy">
            Objeto XMLHttpRequest (para recibir datos desde un servidor)
          </p>
        </li>
        <li>
          <p class="text-justufy">
            JavaScript/DOM (para desplegar y tulizar los datos)
          </p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Nota</b>: <b>XMLHttpRequest</b> es un nombre engañoso, no es necesario conocer XML para utilizar AJAX.
      </p>

      <h2>AJAX en acción</h2>
      <p class="text-justify"><b>Ejemplo 1.</b> AJAX en acción.</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
      &lt;p id="demo"&gt;Let AJAX change this text.&lt;/p&gt;
      &lt;button type="button" onclick="loadDoc()"&gt;Change Content&lt;/button&gt;
      &lt;script&gt;
        function loadDoc() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "ajax_info.txt", true);
          xhttp.send();
        }
      &lt;/script&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Es importante señalar que por razones de seguridad es indispensable que el archivo XML, en este caso un archivo de 
        texto <code>ajax_info.txt</code>, debe estar en el mismo servidor que la propia página web.
      </p>
      <p class="text-justify">
        Archivo: <code>ajax_info.txt</code>
      </p>
      <pre><code>
  &lt;p&gt;AJAX is not a programming language.&lt;/p&gt;
  &lt;p&gt;AJAX is a technique for accessing web servers from a web page.&lt;/p&gt;
  &lt;p&gt;AJAX stands for Asynchronous JavaScript And XML.&lt;/p&gt;
      </code></pre>
      <h3>¿Cómo funciona el código?</h3>
      <ul>
        <li>
          <p class="text-justify">
            La página HTML contiene un elemento <code>&lt;div&gt;</code> y un <code>&lt;button&gt;</code>.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La sección delimitada por <code>&lt;div&gt;</code> se utiliza para desplegar información obtenida del servidor.
          </p>
        </li>
        <li>
          <p class="text-justify">
            El <code>&lt;button&gt;</code> llama a una función si es presionado.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La función solicita información del servidor y la despliega.
          </p>
        </li>
      </ul>

      <h2>Como funciona AJAX</h2>
      <img src="img/pic_ajax.gif" class="img-responsive imgcenter">
      AJAX funciona de la siguiente forma:
      <ol>
        <li>Ocurre un evento en la página: la página fue cargada, un botón es presionado, etc.</li>
        <li>JavaScript crea un objeto XMLHttpRequest.</li>
        <li>El objeto XMLHttpRequest envía una solicitud a un servidor web.</li>
        <li>El servidor procesa la solicitud.</li>
        <li>El servidor envía una respuesta a la página web.</li>
        <li>La respuesta es leída por JavaScript.</li>
        <li>JavaScript realiza la acción adecuada (como la actualización de la página).</li>
      </ol>


      <!-- <h3>Navegadores descontinuados</h3>
      <p class="text-justify">
        Versiones viejas de navegadores (Internet Explorer 5/6) utilizan ActiveX en lugar de XMLHttpRequest. Si desea
        ampliar la compatibilidad con esos navegadores viejos, deberá declararlo en su luagr.
      </p>

      <p class="text-justify"><b>Ejemplo 2</b>. ActiveX para navegadores viejos.</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
      &lt;p id="demo"&gt;Let AJAX change this text.&lt;/p&gt;
      &lt;button type="button" onclick="loadDoc()"&gt;Change Content&lt;/button&gt;
      &lt;script&gt;
        function loadDoc() {
          var xhttp;
          if (window.XMLHttpRequest) {
            // code for modern browsers
            xhttp = new XMLHttpRequest();
          } else {
            // code for IE6, IE5
            xhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("demo").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "ajax_info.txt", true);
          xhttp.send();
        }
      &lt;/script&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre> -->

      <h2>El objeto XMLHttpRequest</h2>
      <p class="text-justify">Esta es una pieza clave para AJAX. Todos los navegadores web modernos soportan nativamente este objeto.</p>
      <p class="text-justify">Se puede utilizar para intercambiar datos con el servidor web en segundo plano, esto significa que una página
      puede actualizar contenido de ella sin necesidad de recargar toda la página completa.</p>
      <b>Sintaxis:</b> <br>
      <pre><code>   var xhttp = new XMLHttpRequest;</code></pre>

      <h2>Métodos del objeto XMLHttpRequest</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Método</th>
            <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <td>new XMLHttpRequest()</td>
            <td>Crea un objeto XMLHttpRequest</td>
          </tr>
          <tr>
            <td>abort()</td>
            <td>Cancela la solicitud actual</td>
          </tr>
          <tr>
            <td>getAllResponseHeaders()</td>
            <td>Devuelve información del encabezado</td>
          </tr>
          <tr>
            <td>getResponseHeader()</td>
            <td>Devuelve información de un encabezado específico</td>
          </tr>
          <tr>
            <td>open(<i>method, url, async, user, passwd</i>)</td>
            <td>Especifica la solicitud: <br>
              <i>method</i>: tipo solicitud: GET o POST <br>
              <i>url</i>: ubicación del archivo <br>
              <i>async</i>: true = asíncrono, false = síncrono <br>
              <i>user</i>: nombre de usuario (opcional) <br>
              <i>passwd</i>: contraseña (opcional)
            </td>
          </tr>
          <tr>
            <td>send()</td>
            <td>Envía la solicitud al servidor, utilizado para solicitudes GET.</td>
          </tr>
          <tr>
            <td>send(string)</td>
            <td>Envía la solicitud al servidor, utilizado para solicitudes POST.</td>
          </tr>
          <tr>
            <td>setRequestHeader()</td>
            <td>Agrega etiqueta/valor al encabezad a enviar.</td>
          </tr>
        </tbody>
      </table>
        
      <h2>Propiedades del objeto XMLHttpRequest</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Propiedad</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>onreadystatechange</td>
            <td>Define una función que será llamada cuando la propiedad readyState cambia.</td>
          </tr>
          <tr>
            <td>readyState</td>
            <td>
              Guarda el estado del objeto XMLHttpRequest. <br>
              0: Solicitud no inicializada. <br>
              1: Conexión establecida con el servidor. <br>
              2: Solicitud recibida. <br>
              3: Procesando solicitud. <br>
              4: Solicitud terminada y la respuesta está lista.
            </td>
          </tr>
          <tr>
            <td>responseText</td>
            <td>Devuelve la respuesta como un string.</td>
          </tr>
          <tr>
            <td>responseXML</td>
            <td>Devuelve la respuesta como un XML.</td>
          </tr>
          <tr>
            <td>status</td>
            <td>
              Devuelve el código de estado de una solicitud: <br>
              200: OK <br>
              403: Forbidden <br>
              404: Not Found <br>
              <a href="https://www.w3schools.com/tags/ref_httpmessages.asp" target="_blank">Lista con todos los códigos</a>
            </td>
          </tr>
          <tr>
            <td>statusText</td>
            <td>Devuelve el texto de estado (ejemplo: "OK" o "Not Found").</td>
          </tr>
        </tbody>
      </table>
    </article>
    <article class="tema">
      <h2>Enviar una solicitud al servidor</h2>
      <p class="text-justify">
        Para enviar una solicitud al servidor se utilizan los métodos <code>open()</code> y <code>send()</code> del 
        objeto XMLHttpRequest.
      </p>
      <pre><code>
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();        
      </code></pre>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Método</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>open(method, url, async)</td>
            <td>
              Especifica el tipo de solicitud: <br>
              <i>method</i>: tipo de solicitud: GET o POST.<br>
              <i>url</i>: la ubicación del servidor.<br>
              <i>async</i>: true = asíncrono, false = síncrono.
            </td>
          </tr>
          <tr>
            <td>send()</td>
            <td>Envía la solicitud al servidor, utilizado para solicitudes GET.</td>
          </tr>
          <tr>
            <td>send(string)</td>
            <td>Envía la solicitud al servidor, utilizado para solicitudes POST.</td>
          </tr>
        </tbody>
      </table>

      <h2>GET o POST</h2>
      <p class="text-justify">
        GET es más simple y rápido que POST y se puede utilizar en la mayoría de las veces, sin embargo se debe utilizar POST
        cuando:
        <ul>
          <li>Un archivo en caché no es una opción (actualizar un archivo o una base de datos en el servidor).</li>
          <li>Enviar una gran cantidad de datos al servidor, POST no tiene límites en ello.</li>
          <li>Enviar una entrada de usuario (puede contener caracteres desconocidos), POST es más robusto y seguro que GET.</li>
        </ul>
      </p>

      <h2>Solicitudes GET</h2>
      <p class="text-justify">
        Estructura básica de una solicitud GET:
      </p>
      <pre><code>
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();        
      </code></pre>
      <p class="text-justify">
        Si desea enviar información a través del método GET, se debe agregar información a la URL:
      </p>
      <pre><code>
  xhttp.open("GET", "ajax_info.txt?fname=Juan&lname=Perez", true);
  xhttp.send();        
      </code></pre>

      <h2>Solicitudes POST</h2>
      <p class="text-justify">
        Estructura básica de una solicitud POST:
      </p>
      <pre><code>
  xhttp.open("POST", "ajax_info.txt", true);
  xhttp.send();
      </code></pre>
      <p class="text-justify">
        Para enviar datos, por ejemplo un formulario HTML, se debe añadir un encabezado HTTP con <code>setRequestHeader()</code>. 
        Se debe especificar los datos que se desean enviar mediante el método <code>send()</code>.
      </p>
      <pre><code>
  xhttp.open("POST", "ajax_test.asp", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Henry&lname=Ford");
      </code></pre>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Método</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>setRequestHeader(<i>header</i>, <i>value</i>)</td>
            <td>
              Añade encabezado HTTP a la solicitud <br>
              <i>header</i>: nombre del encabezado. <br>
              <i>value</i>: valor del encabezado.
            </td>
          </tr>
        </tbody>
      </table>
      <h2>La propiedad onreadystatechange</h2>
      <p class="text-justify">
        Con el objeto <code>XMLHttpRequest</code> se puede definir una función que será ejecutada una vez que se reciba una 
        respuesta. La función se debe definir en la propiedad <code>onreadystatechange</code> del objeto <code>XMLHttpRequest</code>.
      </p>
      <p class="text-justify"><b>Ejemplo 2</b>. Método onreadystatechange</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;div id="demo"&gt;
        &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
        &lt;button type="button" onclick="loadDoc()"&gt;Change Content&lt;/button&gt;
      &lt;/div&gt;
      &lt;script&gt;
      function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML =
            this.responseText;
          }
        };
        xhttp.open("GET", "ajax_info.txt", true);
        xhttp.send();
      }
      &lt;/script&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <ul>
        <li>
          <p class="text-justify">La propiedad <code>readyState</code> almacena el estado de la solicitud <code>XMLHttpRequest</code>.</p>
        </li>
        <li>
          <p class="text-justify">La propiedad <code>onreadystatechange</code> define la función que será ejecutada cuando <code>readyState</code> cambie.</p>
        </li>
        <li>
          <p class="text-justify">Las propiedades <code>status</code> y <code>statusText</code> almacenan el estado del objeto <code>XMLHttpRequest</code>.</p>
        </li>
      </ul>

    </article>
    <article class="tema">
      <h2>Función callback</h2>
      <p class="text-justify">
        Una función callback es aquella función que se pasa como parámetro a otra función.
      </p>
      <p class="text-justify">
        Si se tiene más de una tarea AJAX en la página web, se debe crear una función para el objeto 
        <code>XMLHttpRequest</code> y una función para cada tarea AJAX.
      </p>
      <p class="text-justify">
        La función <code>loadDoc</code> que realiza la llamada contiene la URL y la función que llamará 
        una vez que la respuesta esté lista.
      </p>
      <p class="text-justify"><b>Ejemplo 3</b>. Funciones callback</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;title&gt;AJAX cFunction&lt;/title&gt;
    &lt;/head&gt;
  &lt;body&gt;
    &lt;div id="demo"&gt;
      &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;
      &lt;button type="button" onclick="loadDoc('ajax1.html', myFunction1)"&gt;Función 1&lt;/button&gt;
      &lt;button type="button" onclick="loadDoc('ajax2.html', myFunction2)"&gt;Función 2&lt;/button&gt;
    &lt;/div&gt;

    &lt;script&gt;
      function loadDoc(url, cFunction) {
        var xhttp;
        xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            cFunction(this);
          }
        };
        xhttp.open("GET", url, true);
        xhttp.send();
      }
      function myFunction1(xhttp) {
        document.getElementById("demo").innerHTML =
        xhttp.responseText;
      }
      function myFunction2(xhttp) {
        document.getElementById("demo").innerHTML =
        xhttp.responseText;
      }
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"><b>Archivo</b>. ajax1.html</p>
      <pre><code>
  &lt;p&gt;Resultado de la función 1&lt;/p&gt;
      </code></pre>
      <p class="text-justify"><b>Archivo</b>. ajax2.html</p>
      <pre><code>
  &lt;p&gt;Resultado de la función 2&lt;/p&gt;
      </code></pre>

      <h2>Propiedades de respuesta del servidor</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Propiedad</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>responseText</td>
            <td>Obtiene la respuesta como una cadena.</td>
          </tr>
          <tr>
            <td>responseXML</td>
            <td>Obtiene la respuesta como XML.</td>
          </tr>
        </tbody>
      </table>
      <h3>La propiedad responseText</h3>
      <p class="text-justify">
        Es la propiedad que se ha usado en los ejemplos previos.
      </p>
      <pre><code>
  document.getElementById("demo").innerHTML = xhttp.responseText;
      </code></pre>
      <h3>La propiedad responseXML</h3>
      <p class="text-justify">
        El objeto <code>XMLHttpRequest</code> tiene un analizador integrado de XML. La propiedad 
        <code>responseXML</code> obtiene la respuesta del servidor como un objeto XML DOM.
      </p>
      <p class="text-justify">
        <b>Ejemplo 4</b>. Solicitud del archivo <code><a href="https://www.w3schools.com/js/cd_catalog.xml" target="_blank">cd_catalog.xml</a></code> y se analiza la respuesta.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;

    &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

    &lt;p id="demo"&gt;&lt;/p&gt;
    
    &lt;script&gt;
      var xhttp, xmlDoc, txt, x, i;
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          xmlDoc = this.responseXML;
          txt = "";
          x = xmlDoc.getElementsByTagName("ARTIST");
          for (i = 0; i &lt; x.length; i++) {
            txt = txt + x[i].childNodes[0].nodeValue + "&lt;br&gt;";
          }
          document.getElementById("demo").innerHTML = txt;
        }
      };
      xhttp.open("GET", "cd_catalog.xml", true);
      xhttp.send();
    &lt;/script&gt;

    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    
      <h2>Metodos de respuesta del servidor</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Método</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>getResponseHeader()</td>
            <td>Devuelve un encabezado específico del servidor.</td>
          </tr>
          <tr>
            <td>getAllResponseHeaders()</td>
            <td>Devuelve todos los encabezados del servidor.</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify"><b>Ejemplo 5</b>. El método getAllResponseHeaders()</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;body&gt;

    &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

    &lt;p&gt;The getAllResponseHeaders() function returns all the header information of a resource, 
    like length, server-type, content-type, last-modified, etc:&lt;/p&gt;

    &lt;p id="demo"&gt;&lt;/p&gt;

    &lt;script&gt;
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML =
          this.getAllResponseHeaders();
        }
      };
      xhttp.open("GET", "ajax_info.txt", true);
      xhttp.send();
    &lt;/script&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"><b>Ejemplo 6</b>. El método getResponseHeaders()</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;body&gt;

    &lt;h2&gt;The XMLHttpRequest Object&lt;/h2&gt;

    &lt;p&gt;The getResponseHeader() function is used to return specific header information from a resource, 
    like length, server-type, content-type, last-modified, etc:&lt;/p&gt;

    &lt;p&gt;Last modified: &lt;span id="demo"&gt;&lt;/span&gt;&lt;/p&gt;

    &lt;script&gt;
      var xhttp=new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("demo").innerHTML =
          this.getResponseHeader("Last-Modified");
        }
      };
      xhttp.open("GET", "ajax_info.txt", true);
      xhttp.send();
    &lt;/script&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>AJAX + PHP</h2>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>
  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
