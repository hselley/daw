<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Programación para Internet</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
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
        AJAX es una técnica para crear páginas rápidas y dinámicas. Permite a las páginas web ser actualizadas de forma asíncrona mediante un intercambio de pequeñas cantidades de información
        en segundo plano. Sin embargo, AJAX no es un lenguaje de programación.
      </p>
      <p class="text-justify">
        Google hizo popular AJAX en 2005 con <i>Google Suggest</i>.
      </p>
      <p class="text-justify">
        <i>Google Suggest</i> utiliza AJAX para crear una interfaz web dinámica: cuando se comienza a escribir en la caja de busqueda de Google, JavaScript envía los caracteres al servidor y éste le
        devuelve la lista de sugerencias de búsqueda.
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
    </article>

  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
