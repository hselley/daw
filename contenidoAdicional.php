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
        <h1 class="titulo-principal">Contenido Adicional</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Parallax Scrolling</h2>
      <h3>Desplazamiento en Paralaje</h3>
      <p class="text-justify">
        El desplazamiento en paralaje ocurre en los sitios web donde la imágen de fondo se mueve a diferente velocidad que el texto en primer plano mientras se hace
        un desplazamiento. Los enlaces siguientes muestran la diferencia entre un sitio con y sin desplazamiento paralaje.
      </p>
      <a href="https://www.w3schools.com/howto/tryhow_css_parallax_demo.htm" target="_blank" class="btn btn-success">Sitio con Desplazamiento en Paralaje</a>
      <a href="https://www.w3schools.com/howto/tryhow_css_parallax_demo_none.htm" target="_blank" class="btn btn-danger">Sitio sin Desplazamiento en Paralaje</a>
      <h5>
        <b>Nota</b>: El desplazamiento en paralaje no siempre funciona en dispositivos moviles. Sin embargo, se pueden utilizar instrucciones para deshabilitar el efecto
        en dispositivos moviles.
      </h5>
      <h3>Como crear el efecto</h3>
      <p class="text-justify">
        Uilice un conenedor y agregue una imagen de fondo al contenedor con una altura específica. Luego utilice la propiedad <code>background-attachment: fixed</code>
        para crear el efecto de paralaje. La propiedad <code>background-attachment</code> determina si la imágen de fondo permanece fija o si se desplaza
        con el resto de la página.
      </p>
      <p class="text-justify">
        Las demás propiedades para la imagen de fondo se utilizan para centrar y escalar la imágen.
      </p>
      <h4><b>Ejemplo 1</b>. Altura en pixeles.</h4>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
  &lt;style&gt;
    .parallax {
        /* La imágen a utilizar */
        background-image: url("parallax1.jpg");

        /* Una altura específica */
        min-height: 700px;

        /* Crear el efecto de desplazamiento de paralaje */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;p&gt;Desplace hacia arriba y abajo para ver el efecto de paralaje.&lt;/p&gt;

    &lt;div class="parallax"&gt;&lt;/div&gt;

    &lt;div style="height:1000px; background-color:gray; font-size:24px"&gt;
      &lt;p&gt;Desplace hacia arriba y abajo para ver el efecto de paralaje.&lt;/p&gt;
      &lt;p&gt;Este div solo está aquí para habilitar el desplazamiento.&lt;/p&gt;
      &lt;p&gt;&lt;b&gt;Tip&lt;/b&gt;: Intente quitar la propiedad background-attachment para deshabilitar
        el efecto de desplazamiento.
      &lt;/p&gt;
    &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        En este ejemplo se utilizan pixeles para establecer la altura de la imágen. Si lo desea puede utilizar porcentaje para conseguir que la imágen
        ocupe toda la pantalla, bastará con establecer la altura del contenedor a 100%. También será necesario establecer la altura de <code>&lt;html&gt;</code>
        y <code>&lt;body&gt;</code> al 100%.
      </p>
      <h4><b>Ejemplo 2</b>. Altura en porcentaje.</h4>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
  &lt;style&gt;
  html, body {
    height: 100%;
  }
    .parallax {
        /* La imágen a utilizar */
        background-image: url("parallax1.jpg");

        /* Una altura específica */
        min-height: 100%;

        /* Crear el efecto de desplazamiento de paralaje */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div class="parallax"&gt;&lt;/div&gt;

    &lt;div style="height:1000px; background-color:gray; font-size:24px"&gt;
      &lt;p&gt;Desplace hacia arriba y abajo para ver el efecto de paralaje.&lt;/p&gt;
      &lt;p&gt;Este div solo está aquí para habilitar el desplazamiento.&lt;/p&gt;
      &lt;p&gt;&lt;b&gt;Tip&lt;/b&gt;: Intente quitar la propiedad background-attachment para deshabilitar
        el efecto de desplazamiento.
      &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="parallax"&gt;&lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Algunos dispositivos moviles tienen problemas con <code>background-attachment: fixed</code>. Sin embargo, se pueden utlizar isntrucciones para
        deshabilitar el efecto de paralaje en dispositivos moviles.
      </p>
      <h4><b>Ejemplo 3</b>. Deshabilitar el desplazamiento de paralaje en teléfonos y tabletas.</h4>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
  &lt;style&gt;
    html, body {
        height: 100%;
    }
    .parallax {
        /* La imágen a utilizar */
        background-image: url("parallax1.jpg");

        /* Una altura específica */
        min-height: 100%;

        /* Crear el efecto de desplazamiento de paralaje */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    /* Deshabilita el scroll para telefonos y tabletas. Incremente los pixeles si fuera necesario */
    @media only screen and (max-device-width: 1024px) {
        .parallax {
            background-attachment: scroll;
        }
    }
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div class="parallax"&gt;&lt;/div&gt;

    &lt;div style="height:100%; background-color:gray; font-size:24px"&gt;
      &lt;p&gt;Desplace hacia arriba y abajo para ver el efecto de paralaje.&lt;/p&gt;
      &lt;p&gt;Este div solo está aquí para habilitar el desplazamiento.&lt;/p&gt;
      &lt;p&gt;&lt;b&gt;Tip&lt;/b&gt;: Intente quitar la propiedad background-attachment para deshabilitar
        el efecto de desplazamiento.
      &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="parallax"&gt;&lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        La regla <code>@media</code> se utiliza para definir reglas de estilo para diferentes dispositivos multimedia.
      </p>
      <p class="text-justify">
        En CSS2 esto se llamaba tipos multimedia, ahora en CSS3 se les llama consultas multimedia.
      </p>
      <p class="text-justify">
        Las consultas multimedia obtienen las capacidades del dispositivo, y pueden ser utilizadas para muchas cosas como:
      </p>
      <ul>
        <li>
          <p class="text-justify">Alto y ancho de la ventana de visualización.</p>
        </li>
        <li>
          <p class="text-justify">Alto y ancho del dispositivo.</p>
        </li>
        <li>
          <p class="text-justify">Orientación (modo vertical u horizontal del telefono/tableta).</p>
        </li>
        <li>
          <p class="text-justify">Resolución.</p>
        </li>
      </ul>
      <p class="text-justify">
        El atributo <code>max-device-width</code> establece el ancho máximo del dispositivo, tal como una computadora.
      </p>
      <h4><b>Ejemplo 4</b>. Ejemplo completo.</h4>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
  &lt;style&gt;
    body, html {
      height: 100%;
      margin: 0;
      font: 400 15px/1.8 "Lato", sans-serif;
      color: #777;
    }

    .bgimg-1, .bgimg-2, .bgimg-3 {
      position: relative;
      opacity: 0.65;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }
    .bgimg-1 {
      background-image: url("parallax1.jpg");
      min-height: 100%;
    }

    .bgimg-2 {
      background-image: url("parallax2.jpg");
      min-height: 400px;
    }

    .bgimg-3 {
      background-image: url("parallax3.jpg");
      min-height: 400px;
    }

    .caption {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
    }

    .caption span.border {
      background-color: #111;
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
    }

    h3 {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }

    /* Turn off parallax scrolling for tablets and phones */
    @media only screen and (max-device-width: 1024px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
        }
    }
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div class="bgimg-1"&gt;
      &lt;div class="caption"&gt;
        &lt;span class="border"&gt;Desplace hacia abajo&lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;"&gt;
      &lt;h3 style="text-align:center;"&gt;Ejemplo de Parallax&lt;/h3&gt;
      &lt;p&gt;
        Parallax scrolling is a web site trend where the background content is moved at a different speed than
        the foreground content while scrolling. Nascetur per nec posuere turpis, lectus nec libero turpis nunc
        at, sed posuere mollis ullamcorper libero ante lectus, blandit pellentesque a, magna turpis est sapien
        duis blandit dignissim. Viverra interdum mi magna mi, morbi sociis. Condimentum dui ipsum consequat
        morbi, curabitur aliquam pede, nullam vitae eu placerat eget et vehicula. Varius quisque non molestie
        dolor, nunc nisl dapibus vestibulum at, sodales tincidunt mauris ullamcorper, dapibus pulvinar, in in
        neque risus odio. Accumsan fringilla vulputate at quibusdam sociis eleifend, aenean maecenas vulputate,
        non id vehicula lorem mattis, ratione interdum sociis ornare. Suscipit proin magna cras vel, non sit
        platea sit, maecenas ante augue etiam maecenas, porta porttitor placerat leo.
      &lt;/p&gt;
    &lt;/div&gt;

    &lt;div class="bgimg-2"&gt;
      &lt;div class="caption"&gt;
        &lt;span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"&gt;
          LESS HEIGHT
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div style="position:relative;"&gt;
      &lt;div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"&gt;
        &lt;p&gt;Scroll up and down to really get the feeling of how Parallax Scrolling works.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="bgimg-3"&gt;
      &lt;div class="caption"&gt;
        &lt;span class="border" style="background-color:transparent;font-size:25px;color: #f7f7f7;"&gt;
          SCROLL UP
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div style="position:relative;"&gt;
      &lt;div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;"&gt;
        &lt;p&gt;Scroll up and down to really get the feeling of how Parallax Scrolling works.&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;div class="bgimg-1"&gt;
      &lt;div class="caption"&gt;
        &lt;span class="border"&gt;
          COOL!
        &lt;/span&gt;
      &lt;/div&gt;
    &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
    </article>
  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
