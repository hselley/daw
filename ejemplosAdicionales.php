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
  <!-- Highlighting code -->
  <link rel="stylesheet" href="css/styles/tomorrow-night.css">
  <script src="js/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
  <!-- jQuery -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <!-- Smooth Scroll -->
	<script>
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
	</script>
  <!-- Google Analytics -->
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70774204-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>

  <!-- Aqui va la cabecera -->
  <div class="container-fluid cabecera" style="height:200px;">
    <div class="container">
      <h1 class="titulo-principal">Ejemplos Adicionales</h1>
    </div>
  </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

        <!-- Ejemplo 1 -->
        <article id="ejemplo1" class="tema">
          <h3>Ejemplo 1. Menú Animado con jQuery</h3>
          <p class="text-justify">HTML</p>
          <pre><code>
      &lt;html&gt;
        &lt;head&gt;
          &lt;link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css"
            rel="stylesheet"&gt;
          &lt;link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300'
            rel='stylesheet' type='text/css'&gt;
          &lt;link href='style.css' rel='stylesheet'&gt;
          &lt;script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
          &lt;script src="app.js"&gt;&lt;/script&gt;
        &lt;/head&gt;
        &lt;body&gt;
          &lt;div class="menu"&gt;
            &lt;!-- Menu icon --&gt;
            &lt;div class="icon-close"&gt;
              &lt;img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/close.png"&gt;
            &lt;/div&gt;
            &lt;!-- Menu --&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Blog&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Help&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/div&gt;
          &lt;!-- Main body --&gt;
          &lt;div class="jumbotron"&gt;
            &lt;div class="icon-menu"&gt;
              &lt;i class="fa fa-bars"&gt;&lt;/i&gt;
              Menu
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/body&gt;
      &lt;/html&gt;
          </code></pre>
          <p class="text-justify">JS</p>
          <pre><code>
      var main = function() {
        /* Push the body and the nav over by 285px over */
        $('.icon-menu').click(function() {
          $('.menu').animate({
            left: "0px"
          }, 200);
          $('body').animate({
            left: "285px"
          }, 200);
        });
        /* Then push them back */
        $('.icon-close').click(function() {
          $('.menu').animate({
            left: "-285px"
          }, 200);
          $('body').animate({
            left: "0px"
          }, 200);
        });
      };
      $(document).ready(main);
          </code></pre>
          <p class="text-justify">CSS</p>
          <pre><code>
      /* Initial body */
      body {
        left: 0;
        margin: 0;
        overflow: hidden;
        position: relative;
      }
      /* Initial menu */
      .menu {
        background: #202024
          url('http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/black-thread.png')
          repeat left top;
        left: -285px;  /* start off behind the scenes */
        height: 100%;
        position: fixed;
        width: 285px;
      }
      /* Basic styling */
      .jumbotron {
        background-image: url('http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/uber/bg.png');
        height: 100%;
        -webkit-background-size: cover;
               -moz-background-size: cover;
                 -o-background-size: cover;
                    background-size: cover;
      }
      .menu ul {
        border-top: 1px solid #636366;
        list-style: none;
        margin: 0;
        padding: 0;
      }
      .menu li {
        border-bottom: 1px solid #636366;
        font-family: 'Open Sans', sans-serif;
        line-height: 45px;
        padding-bottom: 3px;
        padding-left: 20px;
        padding-top: 3px;
      }
      .menu a {
        color: #fff;
        font-size: 15px;
        text-decoration: none;
        text-transform: uppercase;
      }
      .icon-close {
        cursor: pointer;
        padding-left: 10px;
        padding-top: 10px;
      }
      .icon-menu {
        color: #fff;
        cursor: pointer;
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        padding-bottom: 25px;
        padding-left: 25px;
        padding-top: 25px;
        text-decoration: none;
        text-transform: uppercase;
      }
      .icon-menu i {
        margin-right: 5px;
      }
          </code></pre>
        </article>


        <!-- Ejemplo 2 -->
        <article id="ejemplo2" class="tema clearfix">
          <h3>Ejemplo 2. Menú Animado con HTML5 y CSS3</h3>
          <p class="text-justify">HTML</p>
          <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Menú&lt;/title&gt;
    &lt;link rel="stylesheet" href="estilo.css"&gt;
    &lt;link rel="stylesheet" href="fonts.css"&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;header&gt;
      &lt;nav&gt;
        &lt;ul&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;span class="primero"&gt;&lt;i class="icon icon-home"&gt;&lt;/i&gt;&lt;/span&gt;Inicio&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;span class="segundo"&gt;&lt;i class="icon icon-price-tag"&gt;&lt;/i&gt;&lt;/span&gt;Catgorias&lt;/a&gt;
            &lt;ul&gt;
              &lt;li&gt;&lt;a href="#"&gt;Item #1&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Item #2&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Item #3&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Item #4&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Item #5&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;span class="tercero"&gt;&lt;i class="icon icon-menu"&gt;&lt;/i&gt;&lt;/span&gt;Servicios&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;span class="cuarto"&gt;&lt;i class="icon icon-briefcase"&gt;&lt;/i&gt;&lt;/span&gt;Acerca de&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;&lt;span class="quinto"&gt;&lt;i class="icon icon-pencil"&gt;&lt;/i&gt;&lt;/span&gt;Contacto&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;

      &lt;/nav&gt;
    &lt;/header&gt;
  &lt;/body&gt;
  &lt;/html&gt;
          </code></pre>
          <p class="text-justify">CSS</p>
          <pre><code>
  * {
    margin: 0;
    padding: 0;
  }
  header {
    margin-top: 10px;
    width: 100%;
    overflow: hidden;
    height: 150px;
    position: relative;
  }
  nav {
    top: -20px;
    position: absolute;
    left: 0;
    right: 0;
    margin: 20px auto;
    width 90%;
    max-width: 1000px;
  }
  nav ul {
    list-style: none;
  }
  nav > ul {
    display: table;
    width: 100%;
    background: #000;
    position: relative;
  }
  nav > ul li {
    display: table-cell;
  }

  /* Submenu */
  nav > ul > li:hover > ul {
    display: block;
    height: 100%;
  }
  nav > ul > li > ul {
    display: block;
    position: absolute;
    background: #000;
    left: 0;
    right: 0;
    overflow: hidden;
    height: 0%;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
  }
  nav > ul li a {
    color: #fff;
    display: block;
    line-height: 20px;
    padding: 20px;
    position: relative;
    text-align: center;
    text-decoration: none;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
  }
  nav > ul > li > ul > li a:hover {
    background: #5da5a2;
  }
  nav > ul > li > a span {
    background: #174459;
    display: block;
    height: 100%;
    width: 100%;
    left: 0;
    position: absolute;
    top: -55px;
    -webkit-transition: all .3s ease;
    -moz-transition: all .3s ease;
    -ms-transition: all .3s ease;
    -o-transition: all .3s ease;
    transition: all .3s ease;
  }
  nav > ul > li > a span .icon {
    display: block;
    line-height: 60px;
  }
  nav > ul > li > a:hover > span {
    top: 0;
  }
   /* Colores */
   nav ul li a .primero {
     background: #0e5061;
   }
   nav ul li a .segundo {
     background: #5da5a2;
   }
   nav ul li a .tercero {
     background: #f25724;
   }
   nav ul li a .cuarto {
     background: #174459;
   }
   nav ul li a .quinto {
     background: #37a4b9;
   }
          </code></pre>
          <p class="text-justify">CSS Adicional (<a target="_blank" href="https://icomoon.io/">Iconos Personalizados</a>)</p>
          <pre><code>
  @font-face {
  	font-family: 'icomoon';
  	src:url('fonts/icomoon.eot?-lugcb');
  	src:url('fonts/icomoon.eot?#iefix-lugcb') format('embedded-opentype'),
  		url('fonts/icomoon.ttf?-lugcb') format('truetype'),
  		url('fonts/icomoon.woff?-lugcb') format('woff'),
  		url('fonts/icomoon.svg?-lugcb#icomoon') format('svg');
  	font-weight: normal;
  	font-style: normal;
  }

  [class^="icon-"], [class*=" icon-"] {
  	font-family: 'icomoon';
  	speak: none;
  	font-style: normal;
  	font-weight: normal;
  	font-variant: normal;
  	text-transform: none;
  	line-height: 1;

  	/* Better Font Rendering =========== */
  	-webkit-font-smoothing: antialiased;
  	-moz-osx-font-smoothing: grayscale;
  }

  .icon-home:before {
  	content: "\e600";
  }
  .icon-pencil:before {
  	content: "\e601";
  }
  .icon-price-tag:before {
  	content: "\e602";
  }
  .icon-briefcase:before {
  	content: "\e603";
  }
  .icon-menu:before {
  	content: "\e604";
  }
          </code></pre>
        </article>

  </section>
</body>
</html>
