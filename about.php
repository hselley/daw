<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Desarrollo de Aplicaciones Web</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">Acerca de ...</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema clearfix">
      <h2>Programación para Internet</h2>
    </article>
    <article class="tema clearfix">
      <p class="post-contenido text-justify">
        El contenido de este sitio fue hecho estrictamente para fines acadéimcos sin fines de lucro de algún tipo. Algunas partes de los contenidos tienen derechos
        de autor y algunas otras fueron escritas por mi.
      </p>
      <p class="post-contenido text-justify">
        Para poder redistribuir o vender las partes que tienen derecho de autor será necesario contactar al autor original y la editorial correspondiente para solicitar
        permiso. Los contenidos que he generado yo mismo, están bajo el licenciamiento <a href="http://creativecommons.org/">Creative Commons v4.0</a> y puede disponer
        de ellos como mejor le plazca siempre y cuando no cambie este tipo de licenciamiento.
      </p>
    </article>

    <article class="tema clearfix">
      <h2>Dr. Héctor Julián Selley Rojas</h2>
      <p class="post-contenido text-justify">
        ¿Tiene ganas de gritarme?. Estos son los medios en los que puede hacerlo.
      </p>
      <p class="post-contenido text-justify">
        <ul style="list-style: none;">
          <li><a href="http://www.twitter.com/hector_selley" target="_blank"><span class="icon-twitter"></span> Twitter</a></li>
          <li><a href="mailto:hector.selley@gmail.com" target="_blank"><span class="icon-envelop"></span> Correo</a></li>
          <li><a href="https://github.com/hselley/ppi.git" target="_blank"><span class="icon-github"></span> GitHub</a></li>
          <li><a href="https://www.youtube.com/user/hectorselley" target="_blank"><span class="icon-youtube"></span> Youtube</a></li>
          <li><a href="https://hselley.wordpress.com/" target="_blank"><span class="icon-wordpress"></span> Blog en Wordpress</a></li>
          <li><a href="http://hselley.blogspot.mx/" target="_blank"><span class="icon-blogger"></span> Blog en Blogger</a></li>
          <li><a href="https://plus.google.com/u/0/+HectorJulianSelleyRojas/posts" target="_blank"><span class="icon-google-plus"></span> Google+</a></li>
          <li><a href="https://www.instagram.com/hector_selley/" target="_blank"><span class="icon-instagram"></span> Instagram</a></li>
          <li><a href="http://www.last.fm/user/hectorselley"><span class="icon-lastfm"></span> LastFM</a></li>
          <li><a href="http://www.misprofesores.com/profesores/Hector-Julian-Selley-Rojas_21346" target="_blank"><span class="icon-headphones"></span> MisProfesores.com</a></li>
        </ul>
      </p>
    </article>

  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
