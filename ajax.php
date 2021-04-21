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
        <p></p>
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

      <h2>El objeto XMLHttpRequest</h2>
      <p>Esta es una pieza clave para AJAX. Todos los navegadores web modernos soportan nativamente este objeto.</p>
      <p>Se puede utilizar para intercambiar datos con el servidor web en segundo plano, esto significa que una página
      puede actualizar contenido de ella sin necesidad de recargar toda la página completa.</p>
      <b>Sintaxis:</b> <br>
      <pre><code>   var xhttp = new XMLHttpRequest;</code></pre>
      <p><b>Ejemplo 1.</b> AJAX en acción.</p>
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
      <p>
        Es importante señalar que por razones de seguridad es indispensable que el archivo XML, en este caso un archivo de 
        texto <code>ajax_info.txt</code>, debe estar en el mismo servidor que la propia página web.
      </p>
      <p>
        Archivo: <code>ajax_info.txt</code>
      </p>
      <pre><code>
  &lt;p&gt;AJAX is not a programming language.&lt;/p&gt;
  &lt;p&gt;AJAX is a technique for accessing web servers from a web page.&lt;/p&gt;
  &lt;p&gt;AJAX stands for Asynchronous JavaScript And XML.&lt;/p&gt;
      </code></pre>
      <p>
        Versiones viejas de navegadores (Internet Explorer 5/6) utilizan ActiveX en lugar de XMLHttpRequest. Si desea
        ampliar la compatibilidad con esos navegadores viejos, deberá declararlo en su luagr.
      </p>

      <p><b>Ejemplo 2</b>. ActiveX para navegadores viejos.</p>
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
      </code></pre>

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
      <p>
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
      <p>
        GET es más simple y rápido que POST y se puede utilizar en la mayoría de las veces, sin embargo se debe utilizar POST
        cuando:
        <ul>
          <li>Un archivo en caché no es una opción (actualizar un archivo o una base de datos en el servidor).</li>
          <li>Enviar una gran cantidad de datos al servidor, POST no tiene límites en ello.</li>
          <li>Enviar una entrada de usuario (puede contener caracteres desconocidos), POST es más robusto y seguro que GET.</li>
        </ul>
      </p>

      <h2>Solicitudes GET</h2>
      <p>
        Estructura básica de una solicitud GET:
      </p>
      <pre><code>
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();        
      </code></pre>
      <p>
        Si desea enviar información a través del método GET, se debe agregar información a la URL:
      </p>
      <pre><code>
  xhttp.open("GET", "ajax_info.txt?fname=Juan&lname=Perez", true);
  xhttp.send();        
      </code></pre>

      <h2>Solicitudes POST</h2>
      <p>
        Estructura básica de una solicitud POST:
      </p>
      <pre><code>
  xhttp.open("POST", "ajax_info.txt", true);
  xhttp.send();
      </code></pre>
      <p>
        Para 
      </p>
    </article>
  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
