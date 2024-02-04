<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Desarrollo de Aplicaciones Web</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
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
        <h1 class="titulo-principal">Bootstrap</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        <a href="http://getbootstrap.com/" target="_blank">Bootstrap</a> es el framework de HTML, CSS y JavaScript más popular para desarrollar sitios web responsivos y móviles.
      </p>
      <p class="text-justify">
        Una página se dice responsiva si se ajusta automáticamente al dispositivo, ya sea un celular, una tableta o una computadora.
      </p>
      <p class="text-justify">
        Características de Bootstrap:
      </p>
      <ul>
        <li>
          <p class="text-justify">Hace que el desarrollo web sea más rápido y fácil. </p>
        </li>
        <li>
          <p class="text-justify">Esta hecho para todo tipo de personas, dispositivos de cualquier forma y proyectos de cualquier tamaño.</p>
        </li>
        <li>
          <p class="text-justify">Escala fácil y eficientemente un sitio web y aplicaciones con un código base simple, desde teléfonos, tabletas y computadoras con sentencias CSS.</p>
        </li>
        <li>
          <p class="text-justify">En Bootstrap 3 existen estilos para dispositivos móviles que son parte del núcleo del framework.</p>
        </li>
        <li>
          <p class="text-justify">Cuenta con una extensa documentación para elementos comunes HTML, docenas de elementos HTML personalizados, componentes CSS y plugins jQuery.</p>
        </li>
        <li>
          <p class="text-justify">Es de código abierto. Está hospedado, desarrollado y mantenido en GitHub.</p>
        </li>
        <li>
          <p class="text-justify">Es compatible con todos los navegadores modernos (Chrome, Firefox, Opera, Internet Explorer, Edge y Safari)</p>
        </li>
      </ul>
      <p class="text-justify">
        Existen muchos sitios web desarrollados con Bootstrap, algunos ejemplos de sitios reales se pueden ver <a href="http://expo.getbootstrap.com/" target="_blank">aquí</a>.
      </p>
      <p class="text-justify">
        Bootstrap cuenta con muchos ejemplos y plantillas para comenzar a desarrollar un sitio web de forma sencilla. En el sitio <a href="http://startbootstrap.com/" target="_blank">Start Bootstrap</a>
        puede encontrar algunas plantillas básicas para comenzar a diseñar su sitio web.
      </p>
    </article>

    <article class="tema">
      <h2>Utilizando Bootstrap</h2>

      <h3>Descarga</h3>
      <p class="text-justify">
        Si desea descargar directamente y utilizar Bootstrap, vaya a <a href="http://getbootstrap.com/" target="_blank">getbootstrap.com</a> y siga las instrucciones.
      </p>

      <h3>CDN (Content Delivery Network)</h3>
      <p class="text-justify">
        Si no desea descargar y hospedar Bootstrap usted mismo, puede ser incluido como un CDN. MaxCDN provee soporte CDN para CSS y JavaScript de Bootstrap. Puede incluirse también jQuery:
      </p>
      <pre><code>
  &lt;!-- Latest compiled and minified CSS --&gt;
  &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;

  &lt;!-- jQuery library --&gt;
  &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;

  &lt;!-- Latest compiled JavaScript --&gt;
  &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
      </code></pre>

      <h3>Ventaja de utilizar Bootstrap desde un CDN:</h3>
      <p class="text-justify">
        Muchos usuarios habrán descargado Bootstrap desde MaxCDN al haber navegado en alguna otra página que lo utilice. Por esta razón, será cargado desde el caché cuando
        visiten su sitio, lo que significa un tiempo menor de carga. También, la mayoría de los CDN se aseguran que  una vez que un usuario les solicita un archivo, le será
        entregado a través del servidor más cercano, lo que significa un tiempo menor de carga.
      </p>
      <p class="text-justify">
        Siempre puede conseguir la más reciente versión de Bootstrap desde el <a href="http://getbootstrap.com/getting-started/#download" target="_blank">sitio web oficial</a>.
      </p>
    </article>

    <article class="tema">
      <h2>Creando la primer página con Bootstrap</h2>

      <h3>Añadir el doctype HTML5</h3>
      <p class="text-justify">
        Bootstrap utiliza elementos HTML y propiedades CSS que requieren HTML5.
      </p>

      <h3>Bootstrap 3 es responsivo</h3>
      <p class="text-justify">
        Bootstrap 3 está diseñado para ser responsivo en dispositivos móviles. Los estilos responsivos son parte del núcleo central de bootstrap. Para asegurarse del correcto
        render de la página y el zoom táctil, añada la etiqueta <code>&lt;meta&gt;</code> dentro de <code>&lt;head&gt;</code>.
      </p>
      <pre><code>
  &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
      </code></pre>
      <p class="text-justify">
        El atributo <code>width=device-width</code> configura el tamaño de la página de acuerdo al tamaño de la pantalla del dispositivo.
      </p>
      <p class="text-justify">
        El atributo <code>initial-scale=1</code> configura el nivel de zoom inicial en la página la primera vez que es cargada.
      </p>

      <h3>Contenedores</h3>
      <p class="text-justify">
        Bootstrap requiere de elementos contenedores que envuelven el contenido del sitio.
      </p>
      <p class="text-justify">
        Existen dos tipos de clases de contenedores:
      </p>
      <ul>
        <li>
          <p class="text-justify">La clase <code>.container</code> ofrece un contendor responsivo y ancho fijo.</p>
        </li>
        <li>
          <p class="text-justify">La clase <code>.container-fluid</code> ofrece un contenedor de ancho completo, que abarca el ancho completo del <code>viewport</code>.</p>
        </li>
      </ul>
      <p class="text-justify">
        Los contenedores no se pueden anidar, es decir, poner un contenedor dentro de otro.
      </p>
      <p class="text-justify">
        <b>Ejemplo 1</b>. Página básica con contenedor de ancho responsivo y fijo
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;My First Bootstrap Page&lt;/h1&gt;
      &lt;p&gt;This is some text.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 2</b>. Paǵina básica con contenedor de ancho completo
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Bootstrap Example&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
      &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
      &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
      &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;div class="container-fluid"&gt;
        &lt;h1&gt;My First Bootstrap Page&lt;/h1&gt;
        &lt;p&gt;This part is inside a .container class.&lt;/p&gt;
        &lt;p&gt;The .container class provides a responsive fixed width container.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Mallas en Bootstrap</h2>
      <p class="text-justify">
        El sistema de mallas en bootstrap permite utilizar hasta 12 columnas dentro de una página. Si no desea utilizar todas las 12 columnas individualmente,
        puede agruparlas para crear columnas más anchas.
      </p>
      <p class="text-justify">
        El sistema de columnas es responsivo, las columnas se acomodarán automáticamente de acuerdo al tamaño de la página.
      </p>
      <p class="text-justify">
        Existen 4 clases de mallas:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>xs</code>: para teléfonos</p>
        </li>
        <li>
          <p class="text-justify"><code>sm</code>: para tablets</p>
        </li>
        <li>
          <p class="text-justify"><code>md</code>: para computadoras</p>
        </li>
        <li>
          <p class="text-justify"><code>lg</code>: para computadoras grandes</p>
        </li>
      </ul>
      <p class="text-justify">
        Estas clases se pueden combinar para crear un sitio dinámico y flexible.
      </p>
      <p class="text-justify">
        En primer lugar, se debe crear un renglón <code>&lt;div class="row"&gt;</code>. Luego, añadir el número deseado de columnas etiquetadas con la clase requerida
        <code>.col-*-*</code>. Los números en <code>.col-*-*</code> siempre deben sumar hasta 12 para cada renglón.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. Tres columnas iguales
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container-fluid"&gt;
    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;p&gt;Resize the browser window to see the effect.&lt;/p&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-sm-4" style="background-color:lavender;"&gt;.col-sm-4&lt;/div&gt;
      &lt;div class="col-sm-4" style="background-color:lavenderblush;"&gt;.col-sm-4&lt;/div&gt;
      &lt;div class="col-sm-4" style="background-color:lavender;"&gt;.col-sm-4&lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 4</b>. Dos columnas no iguales
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container-fluid"&gt;
    &lt;h1&gt;Hello World!&lt;/h1&gt;
    &lt;p&gt;Resize the browser window to see the effect.&lt;/p&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-sm-4" style="background-color:lavender;"&gt;.col-sm-4&lt;/div&gt;
      &lt;div class="col-sm-8" style="background-color:lavenderblush;"&gt;.col-sm-8&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Tablas</h2>
      <p class="text-justify">
        Una tabla básica en bootstrap tiene un relleno ligero y solamente divisores horizontales. La clase <code>.table</code> añade el estilo básico a la tabla.
      </p>
      <p class="text-justify">
        Estos son las clases de estilo que existen en bootstrap:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>.table</code>: Estilo básico de tabla.</p>
        </li>
        <li>
          <p class="text-justify"><code>.table-striped</code>: Estilo tipo zebra.</p>
        </li>
        <li>
          <p class="text-justify"><code>.table-bordered</code>: Añade bordes a todos los costados de la tabla y celdas.</p>
        </li>
        <li>
          <p class="text-justify"><code>.table-hover</code>: Habilita hover en los renglones de la tabla.</p>
        </li>
        <li>
          <p class="text-justify"><code>.table-condensed</code>: Hace la tabla más compacta al cortar a la mitad el espaciado entre celdas.</p>
        </li>
      </ul>
      <p class="text-justify">
        Considere que para agregar clases a una tabla, en primer lugar debe agregar la clase base <code>table</code>, seguido de la clase que desea añadir. Debe separarlas con
        un espacio y estar dentro del mismo par de comillas dobles.
      </p>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Estilo básico de tablas. Pruebe los diferentes estilos.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Basic Table&lt;/h2&gt;
    &lt;p&gt;The .table class adds basic styling (light padding and only horizontal dividers) to a table:&lt;/p&gt;
    &lt;table class="table"&gt;
      &lt;thead&gt;
        &lt;tr&gt;
          &lt;th&gt;Firstname&lt;/th&gt;
          &lt;th&gt;Lastname&lt;/th&gt;
          &lt;th&gt;Email&lt;/th&gt;
        &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
        &lt;tr&gt;
          &lt;td&gt;John&lt;/td&gt;
          &lt;td&gt;Doe&lt;/td&gt;
          &lt;td&gt;john@example.com&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;Mary&lt;/td&gt;
          &lt;td&gt;Moe&lt;/td&gt;
          &lt;td&gt;mary@example.com&lt;/td&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
          &lt;td&gt;July&lt;/td&gt;
          &lt;td&gt;Dooley&lt;/td&gt;
          &lt;td&gt;july@example.com&lt;/td&gt;
        &lt;/tr&gt;
      &lt;/tbody&gt;
    &lt;/table&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Las clases contextuales pueden ser utilizadas para darle color a los renglones y celdas de una tabla.
      </p>
      <p class="text-justify">
        Las clases contextuales que pueden usar son:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>.active</code>: Aplica un color al renglón o celda.</p>
        </li>
        <li>
          <p class="text-justify"><code>.success</code>: Indica una acción positiva satisfactoria.</p>
        </li>
        <li>
          <p class="text-justify"><code>.info</code>: Indica un cambio o acción informativo neutral.</p>
        </li>
        <li>
          <p class="text-justify"><code>.warning</code>: Indica una advertencia que requiera su atención.</p>
        </li>
        <li>
          <p class="text-justify"><code>.danger</code>: Indica una acción peligrosa o potencialmente negativa.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 6</b>. Estilo tipo zebra
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Contextual Classes&lt;/h2&gt;
      &lt;p&gt;Contextual classes can be used to color table rows or table cells.&lt;/p&gt;
      &lt;p&gt;The classes that can be used are: .active, .success, .info, .warning, and .danger.&lt;/p&gt;
      &lt;table class="table"&gt;
        &lt;thead&gt;
          &lt;tr&gt;
            &lt;th&gt;Firstname&lt;/th&gt;
            &lt;th&gt;Lastname&lt;/th&gt;
            &lt;th&gt;Email&lt;/th&gt;
          &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
          &lt;tr class="success"&gt;
            &lt;td&gt;John&lt;/td&gt;
            &lt;td&gt;Doe&lt;/td&gt;
            &lt;td&gt;john@example.com&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr class="danger"&gt;
            &lt;td&gt;Mary&lt;/td&gt;
            &lt;td&gt;Moe&lt;/td&gt;
            &lt;td&gt;mary@example.com&lt;/td&gt;
          &lt;/tr&gt;
          &lt;tr class="info"&gt;
            &lt;td&gt;July&lt;/td&gt;
            &lt;td&gt;Dooley&lt;/td&gt;
            &lt;td&gt;july@example.com&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/tbody&gt;
      &lt;/table&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Texto y tipografía</h2>
      <p class="text-justify">
        En bootstrap, el tamaño por defecto de la letra es de 14 pixeles, con interlineado de 1.428. Esto se aplica a <code>&lt;body&gt;</code> y todos los párrafos.
      </p>
      <p class="text-justify">
        Adicionalmente, todos los elementos <code>&lt;p&gt;</code> tienen un margen inferior que es igual a la mitad del interlineado (10 pixeles por defecto).
      </p>
      <p class="text-justify">
        Por defecto, algunos elementos se mostrarán un poco diferente con bootstrap que por defecto en el navegador.
      </p>
      <p class="text-justify">
        Algunas de las etiquetas de HTML que bootstrap modifica la forma como se despliegan, son las siguientes:
      </p>
      <p class="text-justify">
        <b>Ejemplo 7</b>. Texto y tipografía en bootstrap
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Texto secundario, más claro.&lt;/h1&gt;
      &lt;p&gt;El elemento small se utiliza para crear texto secundario más claro :&lt;/p&gt;
      &lt;h1&gt;Encabezado h1&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h1&gt;
      &lt;h2&gt;Encabezado h2&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h2&gt;
      &lt;h3&gt;Encabezado h3&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h3&gt;
      &lt;h4&gt;Encabezado h4&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h4&gt;
      &lt;h5&gt;Encabezado h5&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h5&gt;
      &lt;h6&gt;Encabezado h6&lt;small&gt;texto secundario&lt;/small&gt;&lt;/h6&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Resaltar Texto&lt;/h1&gt;
      &lt;p&gt;Utilice la etiqueta mark para &lt;mark&gt;resaltar&lt;/mark&gt; texto.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Abreviaciones&lt;/h1&gt;
      &lt;p&gt;El elemento abbr swe utiliza para marcar una abreviación o un acrónimo:&lt;/p&gt;
      &lt;p&gt;La &lt;abbr title="Organización Mundial de la Salud"&gt;OMS&lt;/abbr&gt; fue fundada en 1948.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Blockquotes&lt;/h1&gt;
      &lt;p&gt;The blockquote element is used to present content from another source:&lt;/p&gt;
      &lt;blockquote&gt;
        &lt;p&gt;For 50 years, WWF has been protecting the future of nature. The world's leading conservation
        organization, WWF works in 100 countries and is supported by 1.2 million members in the United States
        and close to 5 million globally.&lt;/p&gt; &lt;footer&gt;From WWF's website&lt;/footer&gt;
      &lt;/blockquote&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Listas Descriptivas&lt;/h1&gt;
      &lt;p&gt;The dl element indicates a description list:&lt;/p&gt;
      &lt;dl&gt;
        &lt;dt&gt;Coffee&lt;/dt&gt;
        &lt;dd&gt;- black hot drink&lt;/dd&gt;
        &lt;dt&gt;Milk&lt;/dt&gt;
        &lt;dd&gt;- white cold drink&lt;/dd&gt;
      &lt;/dl&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Secciones de Código&lt;/h1&gt;
      &lt;p&gt;Inline snippets of code should be embedded in the code element:&lt;/p&gt;
      &lt;p&gt;The following HTML elements: &lt;code&gt;span&lt;/code&gt;, &lt;code&gt;section&lt;/code&gt;, and &lt;code&gt;div&lt;/code&gt; defines
      a section in a document.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h1&gt;Keyboard Inputs&lt;/h1&gt;
      &lt;p&gt;To indicate input that is typically entered via the keyboard, use the kbd element:&lt;/p&gt;
      &lt;p&gt;Use &lt;kbd&gt;ctrl + p&lt;/kbd&gt; to open the Print dialog box.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
    &lt;h1&gt;Lineas de Código&lt;/h1&gt;
    &lt;p&gt;For multiple lines of code, use the pre element:&lt;/p&gt;
    &lt;pre&gt;
    Text in a pre element
    is displayed in a fixed-width
    font, and it preserves
    both      spaces and
    line breaks.
    &lt;/pre&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Colores Contextuales&lt;/h2&gt;
      &lt;p&gt;Use the contextual classes to provide "meaning through colors":&lt;/p&gt;
      &lt;p class="text-muted"&gt;This text is muted.&lt;/p&gt;
      &lt;p class="text-primary"&gt;This text is important.&lt;/p&gt;
      &lt;p class="text-success"&gt;This text indicates success.&lt;/p&gt;
      &lt;p class="text-info"&gt;This text represents some information.&lt;/p&gt;
      &lt;p class="text-warning"&gt;This text represents a warning.&lt;/p&gt;
      &lt;p class="text-danger"&gt;This text represents danger.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Fondos Contextuales&lt;/h2&gt;
      &lt;p&gt;Use the contextual background classes to provide "meaning through colors":&lt;/p&gt;
      &lt;p class="bg-primary"&gt;This text is important.&lt;/p&gt;
      &lt;p class="bg-success"&gt;This text indicates success.&lt;/p&gt;
      &lt;p class="bg-info"&gt;This text represents some information.&lt;/p&gt;
      &lt;p class="bg-warning"&gt;This text represents a warning.&lt;/p&gt;
      &lt;p class="bg-danger"&gt;This text represents danger.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Jumbotron y Encabezado de Página</h2>
      <p class="text-justify">
        Los jumbotrones son grandes cajas que sirven para llamar la atención de algún tipo de contenido especial o relevante en la página. Un jumbotron
        se despliega como un rectángulo gris con las esquinas redondeadas.
      </p>
      <p class="text-justify">
        <b>Ejemplo 8</b>. Jumbotron
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;div class="jumbotron"&gt;
        &lt;h1&gt;Bootstrap Tutorial&lt;/h1&gt;
        &lt;p&gt;Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive,
          mobile-first projects on the web.&lt;/p&gt;
      &lt;/div&gt;
      &lt;p&gt;This is some text.&lt;/p&gt;
      &lt;p&gt;This is another text.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Si el jumbotron se utiliza fuera de un contenedor, se extenderá en todo el ancho de la página.
      </p>
      <p class="text-justify">
        Un encabezado sirve para dividir secciones. La clase añade espacio extra alrededor del elemento.
      </p>
      <p class="text-justify">
        <b>Ejemplo 9</b>. Encabezado de Página
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;div class="page-header"&gt;
        &lt;h1&gt;Example Page Header&lt;/h1&gt;
      &lt;/div&gt;
      &lt;p&gt;This is some text.&lt;/p&gt;
      &lt;p&gt;This is another text.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Wells</h2>
      <p class="text-justify">
        La clase well, o pozo por su traducción literal al español, crea un rectángulo redondeado alrededor del elemento.
      </p>
      <p class="text-justify">
        <b>Ejemplo 10</b>. Wells
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="en"&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Case&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Well Size&lt;/h2&gt;
      &lt;div class="well well-sm"&gt;Small Well&lt;/div&gt;
      &lt;div class="well"&gt;Normal Well&lt;/div&gt;
      &lt;div class="well well-lg"&gt;Large Well&lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Alertas</h2>
      <p class="text-justify">
        Bootstrap proporciona un mecanismo que permite la creación de alertas de forma muy sencilla.
      </p>
      <p class="text-justify">
        Las alertas son creadas con la clase <code>.alert</code>, seguidas de alguna de las clases contextuales <code>.alert-success</code>, <code>.alert-info</code>,
        <code>.alert-warning</code> o <code>.alert-danger</code>:
      </p>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Alertas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Alerts&lt;/h2&gt;
      &lt;div class="alert alert-success"&gt;
        &lt;strong&gt;Success!&lt;/strong&gt; This alert box could indicate a successful or positive action.
      &lt;/div&gt;
      &lt;div class="alert alert-info"&gt;
        &lt;strong&gt;Info!&lt;/strong&gt; This alert box could indicate a neutral informative change or action.
      &lt;/div&gt;
      &lt;div class="alert alert-warning"&gt;
        &lt;strong&gt;Warning!&lt;/strong&gt; This alert box could indicate a warning that might need attention.
      &lt;/div&gt;
      &lt;div class="alert alert-danger"&gt;
        &lt;strong&gt;Danger!&lt;/strong&gt; This alert box could indicate a dangerous or potentially negative action.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Para cerrar los mensajes de alerta, añadir <code>class="close"</code> y <code>data-dismiss="alert"</code> al link o elemento botón:
      </p>
      <p class="text-justify">
        <b>Ejemplo 12</b>. Cerrando Alertas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Alerts&lt;/h2&gt;
      &lt;p&gt;The a element with class="close" and data-dismiss="alert" is used to close the alert box.&lt;/p&gt;
      &lt;div class="alert alert-success"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Success!&lt;/strong&gt; This alert box could indicate a successful or positive action.
      &lt;/div&gt;
      &lt;div class="alert alert-info"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Info!&lt;/strong&gt; This alert box could indicate a neutral informative change or action.
      &lt;/div&gt;
      &lt;div class="alert alert-warning"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Warning!&lt;/strong&gt; This alert box could indicate a warning that might need attention.
      &lt;/div&gt;
      &lt;div class="alert alert-danger"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Danger!&lt;/strong&gt; This alert box could indicate a dangerous or potentially negative action.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Las clases <code>.fade</code> y <code>.in</code> añaden un efecto de desvanecimiento cuando se cierra un mensaje de alerta:
      </p>
      <p class="text-justify">
        <b>Ejemplo 13</b>. Animación al cerrar alertas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Alerts&lt;/h2&gt;
      &lt;p&gt;The .fade and .in classes adds a fading effect when closing the alert message.&lt;/p&gt;
      &lt;div class="alert alert-success fade in"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Success!&lt;/strong&gt; This alert box could indicate a successful or positive action.
      &lt;/div&gt;
      &lt;div class="alert alert-info fade in"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Info!&lt;/strong&gt; This alert box could indicate a neutral informative change or action.
      &lt;/div&gt;
      &lt;div class="alert alert-warning fade in"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Warning!&lt;/strong&gt; This alert box could indicate a warning that might need attention.
      &lt;/div&gt;
      &lt;div class="alert alert-danger fade in"&gt;
        &lt;a href="#" class="close" data-dismiss="alert" aria-label="close"&gt;&times;&lt;/a&gt;
        &lt;strong&gt;Danger!&lt;/strong&gt; This alert box could indicate a dangerous or potentially negative action.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Botones</h2>
      <p class="text-justify">
        Bootstrap proporciona 7 estilos de botones
      </p>
      <div class="container">
        <h2>Button Styles</h2>
        <button type="button" class="btn btn-default">Default</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-success">Success</button>
        <button type="button" class="btn btn-info">Info</button>
        <button type="button" class="btn btn-warning">Warning</button>
        <button type="button" class="btn btn-danger">Danger</button>
        <button type="button" class="btn btn-link">Link</button>
      </div>
      <p class="text-justify">
        Para poder utilizar estos estilos, Bootstrap tiene las siguientes clases:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>.btn-default</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-primary</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-success</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-info</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-warning</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-danger</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-link</code></p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 14</b>. Botones en Bootstrap
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Button Styles&lt;/h2&gt;
      &lt;button type="button" class="btn btn-default"&gt;Default&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary"&gt;Primary&lt;/button&gt;
      &lt;button type="button" class="btn btn-success"&gt;Success&lt;/button&gt;
      &lt;button type="button" class="btn btn-info"&gt;Info&lt;/button&gt;
      &lt;button type="button" class="btn btn-warning"&gt;Warning&lt;/button&gt;
      &lt;button type="button" class="btn btn-danger"&gt;Danger&lt;/button&gt;
      &lt;button type="button" class="btn btn-link"&gt;Link&lt;/button&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Las clases botón pueden ser utilizadas en las etiquetas <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, o <code>&lt;input&gt;</code>:
      </p>
      <p class="text-justify">
        <b>Ejemplo 15</b>. Más botones Bootstrap
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Button Tags&lt;/h2&gt;
      &lt;a href="#" class="btn btn-info" role="button"&gt;Link Button&lt;/a&gt;
      &lt;button type="button" class="btn btn-info"&gt;Button&lt;/button&gt;
      &lt;input type="button" class="btn btn-info" value="Input Button"&gt;
      &lt;input type="submit" class="btn btn-info" value="Submit Button"&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Dado que en el ejemplo no tenemos una página a la cual enlazar a través del link, se colocó un <code>#</code> para no recibir un <code>error 404</code>. En un caso
        realista debería sustituirse por una dirección real.
      </p>
      <p class="text-justify">
        Bootstrap proporciona cuatro tamaños de botones, las clases que definen los diferentes tamaños son:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>.btn-lg</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-md</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-sm</code></p>
        </li>
        <li>
          <p class="text-justify"><code>.btn-xs</code></p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 16</b>. Tamaños de botones
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Button Sizes&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary btn-lg"&gt;Large&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary btn-md"&gt;Medium&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary btn-sm"&gt;Small&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary btn-xs"&gt;XSmall&lt;/button&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Un bloque de botón se extiende en todo el ancho de la página. Basta con añadir la clase <code>.btn-block</code> para crear un bloque de botón:
      </p>
      <p class="text-justify">
        <b>Ejemplo 17</b>. Bloque de botón
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Block Level Buttons&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary btn-block"&gt;Button 1&lt;/button&gt;
      &lt;button type="button" class="btn btn-default btn-block"&gt;Button 2&lt;/button&gt;
      &lt;h2&gt;Large Block Level Buttons&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary btn-lg btn-block"&gt;Button 1&lt;/button&gt;
      &lt;button type="button" class="btn btn-default btn-lg btn-block"&gt;Button 2&lt;/button&gt;
      &lt;h2&gt;Small Block Level Buttons&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary btn-sm btn-block"&gt;Button 1&lt;/button&gt;
      &lt;button type="button" class="btn btn-default btn-sm btn-block"&gt;Button 2&lt;/button&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Bootstrap provee botones activados y desactivados, de manera que el botón puede aparecer activo (presionado) o desactivado (no presionable).
      </p>
      <p class="text-justify">
        La clase <code>.active</code> hace que el botón aparezca presionado, y la clase <code>.disabled</code> hace que el botón no sea presionable:
      </p>
      <p class="text-justify">
        <b>Ejemplo 18</b>. Botones activados y desactivados
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Button States&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary"&gt;Primary Button&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary active"&gt;Active Primary&lt;/button&gt;
      &lt;button type="button" class="btn btn-primary disabled"&gt;Disabled Primary&lt;/button&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Botones</h2>
      <p class="text-justify">
        Bootstrap permite agrupar un conjunto de botones para que aparezcan como uno solo. Se debe utilizar un elemento <code>&lt;div&gt;</code> con la clase
        <code>.btn-group</code> para crear un grupo de botones:
      </p>
      <p class="text-justify">
        <b>Ejemplo 19</b>. Grupo de Botones
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Button Group&lt;/h2&gt;
      &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Apple&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Samsung&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Sony&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Bootstrap permite agrupar los botones de forma vertical:
      </p>
      <p class="text-justify">
        <b>Ejemplo 20</b>. Grupos de botones verticales
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Vertical Button Group&lt;/h2&gt;
      &lt;div class="btn-group-vertical"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Apple&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Samsung&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Sony&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Bootstrap permite anidar botones de manera que salgan como un menú desplegable:
      </p>
      <p class="text-justify">
        <b>Ejemplo 21</b>. Botones anidados
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Nesting Button Groups&lt;/h2&gt;
      &lt;p&gt;Nest button groups to create drop down menus:&lt;/p&gt;
      &lt;div class="btn-group"&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Apple&lt;/button&gt;
        &lt;button type="button" class="btn btn-primary"&gt;Samsung&lt;/button&gt;
        &lt;div class="btn-group"&gt;
          &lt;button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"&gt;
          Sony &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
          &lt;ul class="dropdown-menu" role="menu"&gt;
            &lt;li&gt;&lt;a href="#"&gt;Tablet&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;Smartphone&lt;/a&gt;&lt;/li&gt;
          &lt;/ul&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Glyphicons</h2>
      <p class="text-justify">
        Bootstrap proporciona 200 de un conjunto de <a href="http://glyphicons.com/" target="_blank">Glyphicons</a>. Pueden ser utilizados en texto, botones, barras de herramientas,
        navegación, formularios, <a href="http://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp" target="_blank">etc</a>. Glyphicons Halflings
        no son gratis, sin embargo su creador ha permitido que sean incluidos como parte de Bootstrap.
      </p>
      <p class="text-justify">
        <b>Sintaxis</b>:
      </p>
      <pre><code>
  &lt;span class="glyphicon glyphicon-name"&gt;&lt;/span&gt;
      </code></pre>
      <p class="text-justify">
        donde <code>name</code> deberá reemplazarse por el nombre del glyphicon deseado.
      </p>
      <p class="text-justify">
        <b>Ejemplo 22</b>. Diferentes formas de utilizar glyphicons
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Glyphicon Examples&lt;/h2&gt;
      &lt;p&gt;Envelope icon: &lt;span class="glyphicon glyphicon-envelope"&gt;&lt;/span&gt;&lt;/p&gt;
      &lt;p&gt;Envelope icon as a link:
        &lt;a href="#"&gt;&lt;span class="glyphicon glyphicon-envelope"&gt;&lt;/span&gt;&lt;/a&gt;
      &lt;/p&gt;
      &lt;p&gt;Search icon: &lt;span class="glyphicon glyphicon-search"&gt;&lt;/span&gt;&lt;/p&gt;
      &lt;p&gt;Search icon on a button:
        &lt;button type="button" class="btn btn-default"&gt;
          &lt;span class="glyphicon glyphicon-search"&gt;&lt;/span&gt; Search
        &lt;/button&gt;
      &lt;/p&gt;
      &lt;p&gt;Search icon on a styled button:
        &lt;button type="button" class="btn btn-info"&gt;
          &lt;span class="glyphicon glyphicon-search"&gt;&lt;/span&gt; Search
        &lt;/button&gt;
      &lt;/p&gt;
      &lt;p&gt;Print icon: &lt;span class="glyphicon glyphicon-print"&gt;&lt;/span&gt;&lt;/p&gt;
      &lt;p&gt;Print icon on a styled link button:
        &lt;a href="#" class="btn btn-success btn-lg"&gt;
          &lt;span class="glyphicon glyphicon-print"&gt;&lt;/span&gt; Print
        &lt;/a&gt;
      &lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Insignias y etiquetas</h2>
      <p class="text-justify">
        Las insignias son indicadores numéricos que indican cuántos elementos se encuentran asociados con un link. Para crear una insignia se debe usar la clase <code>.badge</code>
        dentro de un elemento <code>&lt;span&gt;</code>:
      </p>
      <p class="text-justify">
        <b>Ejemplo 23</b>. Insignias
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Badges&lt;/h2&gt;
      &lt;a href="#"&gt;News &lt;span class="badge"&gt;5&lt;/span&gt;&lt;/a&gt;&lt;br&gt;
      &lt;a href="#"&gt;Comments &lt;span class="badge"&gt;10&lt;/span&gt;&lt;/a&gt;&lt;br&gt;
      &lt;a href="#"&gt;Updates &lt;span class="badge"&gt;2&lt;/span&gt;&lt;/a&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Las insignias también pueden ser utilizadas dentro de otros elementos, por ejemplo botones.
      </p>
      <p class="text-justify">
        <b>Ejemplo 24</b>. Insignias dentro de botones
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Badges on Buttons&lt;/h2&gt;
      &lt;button type="button" class="btn btn-primary"&gt;Primary &lt;span class="badge"&gt;7&lt;/span&gt;&lt;/button&gt;
      &lt;button type="button" class="btn btn-success"&gt;Success &lt;span class="badge"&gt;3&lt;/span&gt;&lt;/button&gt;
      &lt;button type="button" class="btn btn-danger"&gt;Danger &lt;span class="badge"&gt;5&lt;/span&gt;&lt;/button&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Las etiquetas son utilizadas para proporcionar información adicional acerca de algo. Para utilizarlo es necesario añadir la clase <code>.label</code> seguida de una
        de las seis clases contextuales <code>.label-default</code>, <code>.label-primary</code>, <code>.label-success</code>, <code>.label-info</code>, <code>.label-warning</code>
        o <code>.label-danger</code> dentro de un elemento para crear las etiquetas.
      </p>
      <p class="text-justify">
        <b>Ejemplo 25</b>. Etiquetas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Case&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Labels&lt;/h2&gt;
      &lt;h1&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h1&gt;
      &lt;h2&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h2&gt;
      &lt;h3&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h3&gt;
      &lt;h4&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h4&gt;
      &lt;h5&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h5&gt;
      &lt;h6&gt;Example &lt;span class="label label-default"&gt;New&lt;/span&gt;&lt;/h6&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 26</b>. Etiquetas con colores contextuales
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Case&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="container"&gt;
      &lt;h2&gt;Contextual Label Classes&lt;/h2&gt;
      &lt;p&gt;Contextual classes can be used to color the label.&lt;/p&gt;
      &lt;span class="label label-default"&gt;Default Label&lt;/span&gt;
      &lt;span class="label label-primary"&gt;Primary Label&lt;/span&gt;
      &lt;span class="label label-success"&gt;Success Label&lt;/span&gt;
      &lt;span class="label label-info"&gt;Info Label&lt;/span&gt;
      &lt;span class="label label-warning"&gt;Warning Label&lt;/span&gt;
      &lt;span class="label label-danger"&gt;Danger Label&lt;/span&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Barras de progreso</h2>
      <p class="text-justify">
        Una barra de progreso puede ser utilizada para mostrar el estado de algún proceso. Bootstrap proporciona una variedad de barras de progreso. Para crear una
        barra de progreso por defecto se debe añadir la clase <code>.progress</code> al elemento <code>&lt;div&gt;</code>:</p>
      <p class="text-justify">
        <b>Ejemplo 27</b>. Barras de progreso en Bootstrap
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
      &lt;h1&gt;Algunos tipos de barras de progreso en Bootstrap&lt;/h1&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Basic Progress Bar&lt;/h2&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
        aria-valuemax="100" style="width:70%"&gt;
          &lt;span class="sr-only"&gt;70% Complete&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Progress Bar With Label&lt;/h2&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0"
      aria-valuemax="100" style="width:70%"&gt;
        70%
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Colored Progress Bars&lt;/h2&gt;
    &lt;p&gt;The contextual classes colors the progress bars:&lt;/p&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
      aria-valuemin="0" aria-valuemax="100" style="width:40%"&gt;
        40% Complete (success)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
      aria-valuemin="0" aria-valuemax="100" style="width:50%"&gt;
        50% Complete (info)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60"
      aria-valuemin="0" aria-valuemax="100" style="width:60%"&gt;
        60% Complete (warning)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70"
      aria-valuemin="0" aria-valuemax="100" style="width:70%"&gt;
        70% Complete (danger)
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Striped Progress Bars&lt;/h2&gt;
    &lt;p&gt;The .progress-bar-striped class adds stripes to the progress bars:&lt;/p&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
      aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%"&gt;
        40% Complete (success)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
      aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%"&gt;
        50% Complete (info)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"&gt;
        60% Complete (warning)
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
      aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%"&gt;
        70% Complete (danger)
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Animated Progress Bar&lt;/h2&gt;
    &lt;p&gt;The .active class animates the progress bar:&lt;/p&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40"
      aria-valuemin="0" aria-valuemax="100" style="width:40%"&gt;
        40%
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Stacked Progress Bars&lt;/h2&gt;
    &lt;p&gt;Create a stacked progress bar by placing multiple bars into the same div with class .progress:&lt;/p&gt;
    &lt;div class="progress"&gt;
      &lt;div class="progress-bar progress-bar-success" role="progressbar" style="width:40%"&gt;
        Free Space
      &lt;/div&gt;
      &lt;div class="progress-bar progress-bar-warning" role="progressbar" style="width:10%"&gt;
        Warning
      &lt;/div&gt;
      &lt;div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%"&gt;
        Danger
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Paginación</h2>
      <p class="text-justify">
        Si usted tiene un sitio con muchas páginas, tal vez le sea útil añadir algún tipo de paginación a su sitio. Para crear una paginación básica en Bootstrap se debe añadir la clase
        <code>.pagination</code> a cada elemento <code>&lt;ul&gt;</code>:
      </p>
      <p class="text-justify">
        <b>Ejemplo 28</b>. Paginación con Bootstrap
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Basic Pagination&lt;/h2&gt;
    &lt;p&gt;The .pagination class provides pagination links:&lt;/p&gt;
    &lt;ul class="pagination"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Pagination - Active State&lt;/h2&gt;
    &lt;p&gt;Add class .active to let the user know which page he/she is on:&lt;/p&gt;
    &lt;ul class="pagination"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Pagination - Disabled State&lt;/h2&gt;
    &lt;p&gt;Add class .disabled if a page for some reason is disabled:&lt;/p&gt;
    &lt;ul class="pagination"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class="disabled"&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Pagination - Sizing&lt;/h2&gt;
    &lt;p&gt;Add class .pagination-lg for larger blocks or .pagination-sm for smaller blocks:&lt;/p&gt;
    &lt;ul class="pagination pagination-lg"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class="pagination pagination-md"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;ul class="pagination pagination-sm"&gt;
      &lt;li&gt;&lt;a href="#"&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;4&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;5&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Menú desplegable</h2>
      <p class="text-justify">
        Una menú desplegable es un menú que permite elegir a un usuario elegir un valor de una lista predefinida. La clase <code>.dropdown</code> indica un menú desplegable.
      </p>
      <p class="text-justify">
        Para abrir un menú desplegable, se puede utilizar un botón o un enlace con la clase <code>.dropdown-toggle</code> y el atributo <code>data-toggle="dropdown"</code>.
      </p>
      <p class="text-justify">
        La clase <code>.caret</code> crea un ícono de flecha que indica que el menú es delegable.
      </p>
      <p class="text-justify">
        Añada la clase <code>.dropdown-menu</code> al elemento <code>&lt;ul&gt;</code> para construir el menú desplegable.
      </p>
      <p class="text-justify">
        <b>Ejemplo 29</b>. Menú desplegable
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;The .dropdown class is used to indicate a dropdown menu.&lt;/p&gt;
    &lt;p&gt;Use the .dropdown-menu class to actually build the dropdown menu.&lt;/p&gt;
    &lt;p&gt;To open the dropdown menu, use a button or a link with a class of .dropdown-toggle and data-toggle="dropdown".&lt;/p&gt;
    &lt;div class="dropdown"&gt;
      &lt;button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"&gt;Dropdown Example
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <ul>
        <li>
          <p class="text-justify">La clase <code>.divider</code> permite crear una separación entre los elementos de la lista desplegable. </p>
        </li>
        <li>
          <p class="text-justify">La clase <code>.dropdown-header</code> permite añadir un encabezado dentro de un menú desplegable.</p>
        </li>
        <li>
          <p class="text-justify">La clase <code>.disabled</code> permite deshabilitar un elemento del menú desplegable.</p>
        </li>
        <li>
          <p class="text-justify">La clase <code>.dropdown-menu-right</code> alinea el menú desplegado a la derecha del elemento que contiene al menú.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 30</b>. Diferentes menús desplegables.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;The .divider class is used to separate links inside the dropdown menu:&lt;/p&gt;
    &lt;div class="dropdown"&gt;
      &lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;Tutorials
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;The .dropdown-header class is used to add headers inside the dropdown menu:&lt;/p&gt;
    &lt;div class="dropdown"&gt;
      &lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;Tutorials
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        &lt;li class="dropdown-header"&gt;Dropdown header 1&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;li class="dropdown-header"&gt;Dropdown header 2&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;The .disabled class is used to disable an item in the dropdown menu:&lt;/p&gt;
    &lt;div class="dropdown"&gt;
      &lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;Tutorials
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li class="disabled"&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;Add the .dropdown-menu-right class to .dropdown-menu to right-align the dropdown menu:&lt;/p&gt;
    &lt;div class="dropdown"&gt;
      &lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;Dropdown Example
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu dropdown-menu-right"&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dropdowns&lt;/h2&gt;
    &lt;p&gt;The .dropup class makes the dropdown menu expand upwards instead of downwards:&lt;/p&gt;
    &lt;div class="dropup"&gt;
      &lt;button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"&gt;Dropup Example
      &lt;span class="caret"&gt;&lt;/span&gt;&lt;/button&gt;
      &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a href="#"&gt;HTML&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;CSS&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;JavaScript&lt;/a&gt;&lt;/li&gt;
        &lt;li class="divider"&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a href="#"&gt;About Us&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Pestañas</h2>
      <p class="text-justify">
        La mayoría de las páginas tienen algún tipo de menú. En HTML un menú es usualmente definido como una lista no ordenada. Para que la lista aparezca en forma horizontal y
        no vertical, basta con añadir la clase <code>.list-inline</code> a la etiqueta <code>&lt;ul&gt;</code>.
      </p>
      <p class="text-justify">
        Para que bootstrap haga la lista como pestañas, solo es necesario agregar la clase <code>&lt;ul class="nav nav-tabs"&gt;</code>  a la etiqueta de la lista no ordenada. Puede agregarse
        también la clase <code>&lt;li class="active"&gt;</code> a la página actual.
      </p>
      <p class="text-justify">
        <b>Ejemplo 31</b>. Paginación con pestañas de Bootstrap.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Case&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h3&gt;Tabs With Dropdown Menu&lt;/h3&gt;
    &lt;ul class="nav nav-tabs"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li class="dropdown"&gt;
        &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;Menu 1 &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
        &lt;ul class="dropdown-menu"&gt;
          &lt;li&gt;&lt;a href="#"&gt;Submenu 1-1&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Submenu 1-2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Submenu 1-3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
        aliquip ex ea commodo consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
        doloremque laudantium, totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Observe que en el ejemplo se hizo un menú desplegable en una de las pestañas.
      </p>
      <p class="text-justify">
        Las pastillas son otra forma de paginación y se crean con <code>&lt;ul class="nav nav-pills"&gt;</code>. Puede marcarse la página actual con <code>&lt;li class="active"&gt;</code>.
      </p>
      <ul>
        <li>
          <p class="text-justify">Las pastillas pueden acomodarse de forma vertical con la clase <code>.nav-stacked</code>. En una pantalla grande el menú ocupará todo el ancho de la pantalla,
            pero en una pantalla pequeña el contenido se ajustará a una sola columna.</p>
        </li>
        <li>
          <p class="text-justify">Las pastillas también pueden contener menus desplegables.</p>
        </li>
        <li>
          <p class="text-justify">Para centrar o justificar las pestañas o pastillas, se utiliza la clase <code>.nav-justified</code>.</p>
        </li>
        <li>
          <p class="text-justify">Para hacer pestañas tipo toggle, se debe añadir el atributo <code>data-toggle="tab"</code> a cada enlace. Luego se debe añadir la clase <code>.tab-pane</code> con
            un identificador para cada pestaña contenida en un elemento <code>&lt;div&gt;</code> con la clase <code>.tab-content</code>. Si se desea un efecto de desvanecimiento basta con añadir
            la clase <code>.fade</code> a <code>.tab-pane</code>.</p>
        </li>
        <li>
          <p class="text-justify">El mismo código aplica para las pastillas, solo cambiando el atributo a <code>data-toggle="pill"</code>.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 32</b>. Varios tipos de paginación.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Case&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h3&gt;Pills&lt;/h3&gt;
    &lt;ul class="nav nav-pills"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h3&gt;Vertical Pills&lt;/h3&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;ul class="nav nav-pills nav-stacked"&gt;
          &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;div class="clearfix visible-lg"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h3&gt;Pills With Dropdown Menu&lt;/h3&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
        et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class="col-md-3"&gt;
        &lt;ul class="nav nav-pills nav-stacked"&gt;
          &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
          &lt;li class="dropdown"&gt;
            &lt;a class="dropdown-toggle" data-toggle="dropdown" href="#"&gt;Menu 1 &lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
            &lt;ul class="dropdown-menu"&gt;
              &lt;li&gt;&lt;a href="#"&gt;Submenu 1-1&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Submenu 1-2&lt;/a&gt;&lt;/li&gt;
              &lt;li&gt;&lt;a href="#"&gt;Submenu 1-3&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          &lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
      &lt;div class="clearfix visible-lg"&gt;&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h3&gt;Centered Tabs&lt;/h3&gt;
    &lt;ul class="nav nav-tabs nav-justified"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;br&gt;
    &lt;h3&gt;Centered Pills&lt;/h3&gt;
    &lt;ul class="nav nav-pills nav-justified"&gt;
      &lt;li class="active"&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a href="#"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dynamic Tabs&lt;/h2&gt;
    &lt;ul class="nav nav-tabs"&gt;
      &lt;li class="active"&gt;&lt;a data-toggle="tab" href="#home1"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="tab" href="#menu1"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="tab" href="#menu2"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="tab" href="#menu3"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="tab-content"&gt;
      &lt;div id="home1" class="tab-pane fade in active"&gt;
        &lt;h3&gt;HOME&lt;/h3&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu1" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 1&lt;/h3&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu2" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 2&lt;/h3&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu3" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 3&lt;/h3&gt;
        &lt;p&gt;Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Dynamic Pills&lt;/h2&gt;
    &lt;ul class="nav nav-pills"&gt;
      &lt;li class="active"&gt;&lt;a data-toggle="pill" href="#home2"&gt;Home&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="pill" href="#menu4"&gt;Menu 1&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="pill" href="#menu5"&gt;Menu 2&lt;/a&gt;&lt;/li&gt;
      &lt;li&gt;&lt;a data-toggle="pill" href="#menu6"&gt;Menu 3&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    &lt;div class="tab-content"&gt;
      &lt;div id="home2" class="tab-pane fade in active"&gt;
        &lt;h3&gt;HOME&lt;/h3&gt;
        &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu4" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 1&lt;/h3&gt;
        &lt;p&gt;Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu5" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 2&lt;/h3&gt;
        &lt;p&gt;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div id="menu6" class="tab-pane fade"&gt;
        &lt;h3&gt;Menu 3&lt;/h3&gt;
        &lt;p&gt;Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Formularios</h2>
      <p class="text-justify">
        Los formularios con bootstrap automáticamente reciben estilo global por defecto. Todos los elementos de texto <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>,
        and <code>&lt;select&gt;</code> con la clase <code>.form-control</code> tienen el 100% del ancho de la página.
      </p>
      <p class="text-justify">
        Bootstrap proporciona tres tipos de estilo para los formularios:
      </p>
      <ul>
        <li>
          <p class="text-justify">Vertical</p>
        </li>
        <li>
          <p class="text-justify">Horizontal</p>
        </li>
        <li>
          <p class="text-justify">Alineados</p>
        </li>
      </ul>
      <p class="text-justify">
        Las reglas estándar para estos tres estilos son las siguientes:
      </p>
      <ul>
        <li>
          <p class="text-justify">Siempre utilizar <code>&lt;form role="form"&gt;</code></p>
        </li>
        <li>
          <p class="text-justify">Encerrar las etiquetas y controles del formulario con <code>&lt;div class="form-group"&gt;</code></p>
        </li>
        <li>
          <p class="text-justify">Añadir la clase <code>.form-control</code> a todos los elementos <code>&lt;input&gt;</code>, <code>&lt;textarea&gt;</code>, y <code>&lt;select&gt;</code>.</p>
        </li>
      </ul>
      <p class="text-justify">
        Para los formularios alienados, todos los elementos están pegados a la izquierda, y las etiquetas están junto a cada campo. Una regla para los formularios alineados es:
      </p>
      <ul>
        <li>
          <p class="text-justify">Añadir la clase <code>.form-inline</code> al elemento <code>&lt;form&gt;</code>.</p>
        </li>
      </ul>
      <p class="text-justify">
        Los formularios horizontales se colocan aparte de los demás formularios. Algunas reglas para utlizarlos son:
      </p>
      <ul>
        <li>
          <p class="text-justify">Añadir la clase <code>.form-horizontal</code> al elemento <code>&lt;form&gt;</code>.</p>
        </li>
        <li>
          <p class="text-justify">Añadir la clase <code>.control-label</code> a todos los elementos <code>&lt;label&gt;</code>.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 33</b>. Formularios en Bootstrap.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;title&gt;Bootstrap Example&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
    &lt;link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"&gt;&lt;/script&gt;
    &lt;script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Vertical (basic) form&lt;/h2&gt;
    &lt;form role="form"&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="email"&gt;Email:&lt;/label&gt;
        &lt;input type="email" class="form-control" id="email" placeholder="Enter email"&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="pwd"&gt;Password:&lt;/label&gt;
        &lt;input type="password" class="form-control" id="pwd" placeholder="Enter password"&gt;
      &lt;/div&gt;
      &lt;div class="checkbox"&gt;
        &lt;label&gt;&lt;input type="checkbox"&gt; Remember me&lt;/label&gt;
      &lt;/div&gt;
      &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Inline form&lt;/h2&gt;
    &lt;p&gt;Make the viewport larger than 768px wide to see that all of the form elements are inline,
    left aligned, and the labels are alongside.&lt;/p&gt;
    &lt;form class="form-inline" role="form"&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="email"&gt;Email:&lt;/label&gt;
        &lt;input type="email" class="form-control" id="email" placeholder="Enter email"&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
        &lt;label for="pwd"&gt;Password:&lt;/label&gt;
        &lt;input type="password" class="form-control" id="pwd" placeholder="Enter password"&gt;
      &lt;/div&gt;
      &lt;div class="checkbox"&gt;
        &lt;label&gt;&lt;input type="checkbox"&gt; Remember me&lt;/label&gt;
      &lt;/div&gt;
      &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
  &lt;/div&gt;
  &lt;div class="container"&gt;
    &lt;h2&gt;Horizontal form&lt;/h2&gt;
    &lt;form class="form-horizontal" role="form"&gt;
      &lt;div class="form-group"&gt;
        &lt;label class="control-label col-sm-2" for="email"&gt;Email:&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
          &lt;input type="email" class="form-control" id="email" placeholder="Enter email"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
        &lt;label class="control-label col-sm-2" for="pwd"&gt;Password:&lt;/label&gt;
        &lt;div class="col-sm-10"&gt;
          &lt;input type="password" class="form-control" id="pwd" placeholder="Enter password"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
          &lt;div class="checkbox"&gt;
            &lt;label&gt;&lt;input type="checkbox"&gt; Remember me&lt;/label&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class="form-group"&gt;
        &lt;div class="col-sm-offset-2 col-sm-10"&gt;
          &lt;button type="submit" class="btn btn-default"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/form&gt;
  &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>


  </section>
</body>
</html>
