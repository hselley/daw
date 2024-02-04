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
  <script>
    function myShowFunction() {
        document.getElementById("panel").style.display = "block";
    }
    </script>
    <style>
    #panel, .flip {
        font-size: 16px;
        padding: 10px;
        text-align: center;
        background-color: #4CAF50;
        color: white;
        border: solid 1px #a6d8a8;
        margin: auto;
    }
    #panel {
        display: none;
    }
  </style>
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">CSS</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        CSS es un lenguaje de hoja de estilo que describe la presentación de un documento HTML. CSS describe como los elementos deben ser presentados en la pantalla, en papel o
        en algún otro medio.
      </p>
      <ul>
        <li>
          <p class="text-justify">
            <b>CSS</b> es el acrónimo de <b>C</b>ascading <b>S</b>tyle <b>S</b>heet, hoja de estilos en cascada.
          </p>
        </li>
        <li>
          <p class="text-justify">
            CSS describe como los elementos HTML son presentados en la pantalla, papel o algún otro medio.
          </p>
        </li>
        <li>
          <p class="text-justify">
            CSS nos ahorra mucho trabajo debido a que permite controlar el estilo de muchas páginas simultaneamente.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Las hojas de estilo externas son almacenadas en <b>archivos CSS</b>.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La W3C propone separar el contenido, la funcionalidad y el estilo de una página web de manera que sean entidades independientes que interactúan simultaneamente.
            El contenido de una página se escribe en HTML5, el estilo se controla en CSS3 y la funcionalidad se codifica en JavaScript.
          </p>
        </li>
      </ul>
    </article>
    <article class="tema">
      <h2>Sintáxis</h2>
      <p class="text-justify">
        El conjunto de reglas CSS consiste de un selector y un bloque de declaración:
      </p>
      <img src="img/selector.gif" alt="sintaxis" class="imgcenter img-responsive img-rounded">
      <p class="text-justify">
        El selector apunta al elemento HTML que se desea modificar el estilo. El bloque de declaración se deben serparar las propiedades con punto y coma.
        Cada declaración incluye una propiedad CSS, nombre y valor separados por dos puntos. Una declaración CSS siempre termina con punto y coma, y los
        bloques de declaración están delimitados por llaves.
      </p>
    </article>
    <article class="tema">
      <h2>Selectores en CSS</h2>
      <p class="text-justify">
        Los selectores en CSS se utilizan para marcar elementos HTML de acuerdo a su nombre, id, clase, atributo entre otros.
      </p>
      <h3>Selección por elemento</h3>
      <p class="text-justify">
        La selección por elemento se basa en el nombre del elemento. Por ejemplo, se pueden seleccionar todos los elementos <code>&lt;p&gt;</code> y definir que
        deberán estar centrados y con texto color rojo.
      </p>
      <pre><code>
  p {
    color: red;
    text-align: center;
  }
      </code></pre>
      <p class="text-justify">
        De esta forma todos los elementos que se encuentren en el documento HTML tendrán asignado este estilo.
      </p>
      <h3>Selección por id</h3>
      <p class="text-justify">
        El selector por <code>id</code> utiliza este atributo de los elementos HTML para seleccionar un elemento específico. El <code>id</code> de un elemento debería
        ser único en una sola página, por lo tanto la selección por <code>id</code> debería ocurrir a un único elemento.
      </p>
      <p class="text-justify">
        Para seleccionar un elemento desde CSS con un <code>id</code> específico, se debe escribir el caracter <code>#</code> seguido del <code>id</code> del elemento.
      </p>
      <pre><code>
  #para1 {
    text-align: center;
    color: red;
  }
      </code></pre>
      <p class="text-justify">
        <b>Nota</b>: El nombre de un <code>id</code> no puede comenzar con un número.
      </p>
    </article>
    <article class="tema">
      <h3>Selección por clase</h3>
      <p class="text-justify">
        El selector por clase marca los elementos con un nombre específico de clase. El atributo clase se utiliza cuando se desean marcar dos o más elementos HTML para
        asignarles un estilo específico.
      </p>
      <p class="text-justify">
        Para seleccionar elementos desde CSS con una clase específica, se debe escribir el caracter <code>.</code> seguido del nombre de la clase.
      </p>
      <pre><code>
  .center {
    text-align: center;
    color: red;
  }
      </code></pre>
      <p class="text-justify">
        A pesar de que la recomendación de la W3C indica que los id se utilicen para marcar un solo elemento HTML y las clases para marcar dos o más elementos HTML, no existe
        una prohibición que impida hacer lo contrario. Sin embargo esta recomendación tiene la intención de tener un contenido y estilo bien estructurado y ordenado.
      </p>
      <p class="text-justify">
        Se pueden especificar solamente algunos elementos HTML específicos para ser afectados por el estilo asignado a la clase. Por ejemplo:
      </p>
      <pre><code>
  p.center {
    text-align: center;
    color: red;
  }
      </code></pre>
      <p class="text-justify">
        En este ejemplo, el estilo solo aplicará a los elementos <code>&lt;p&gt;</code> cuya clase sea <code>center</code>. Los elementos <code>&lt;p&gt;</code> que no tengan
        esa clase y los elementos que tengan clase <code>center</code> que no sean <code>&lt;p&gt;</code> no se verán afectados.
      </p>
      <p class="text-justify">
        Los elementos HTML pueden tener más de una clase. En el siguiente ejemplo el elemento <code>&lt;p&gt;</code> recibirá el estilo definido por la clase <code>center</code>
        y <code>large</code>.
      </p>
      <pre><code>
  &lt;p class="center large"&gt;
   This paragraph refers to two classes.
  &lt;/p&gt;
      </code></pre>
      <p class="text-justify">
        <b>Nota</b>: El nombre de una clase no puede comenzar con un número.
      </p>
      <h3>Agrupación de selectores</h3>
      <p class="text-justify">
        Si se tienen elementos con las mismas definiciones de estilo pueden ser agrupados para minimizar el código. Por ejemplo:
      </p>
      <pre><code>
  h1 {
    text-align: center;
    color: red;
  }
  h2 {
    text-align: center;
    color: red;
  }
  p {
    text-align: center;
    color: red;
  }
      </code></pre>
      <p class="text-justify">
        Estos elementos pueden ser agrupados, separando por comas los selectores de los elementos.
      </p>
      <pre><code>
  h1, h2, p {
    text-align: center;
    color: red;
  }
      </code></pre>
      <h3>Comentarios en CSS</h3>
      <p class="text-justify">
        Los comentarios son utilizados para explicar el código, ayuda a entender el código en una edición futura. Los comentarios son ingnorados por los
        navegadores. Los comentarios en CSS se inician con <code>/*</code> y se finalizan con <code>*/</code>, pueden marcarse cualquier número de líneas.
      </p>
      <pre><code>
  p {
    color: red;
    /* This is a single-line comment */
    text-align: center;
  }
  /* This is
  a multi-line
  comment */
      </code></pre>
    </article>

    <article class="tema">
      <h2>Modos de inserción de estilo</h2>
      <p class="text-justify">
        Existen tres formas de insertar estilo:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Externa.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Interna.
          </p>
        </li>
        <li>
          <p class="text-justify">
            En línea.
          </p>
        </li>
      </ul>

      <h3>Hoja de Estilo Externa</h3>
      <p class="text-justify">
        Una hoja de estilos externa permite controlar la apariencia de una página Web completa con tan solo un archivo.
      </p>
      <p class="text-justify">
        Cada página debe incluir una referencia a la hoja de estilos externa dentro de la etiqueta HTML <code>&lt;link&gt;</code>. Esta etiqueta debe incluirse
        dentro de la sección de configuración <code>&lt;head&gt;</code>.
      </p>
      <pre><code>
  &lt;head&gt;
    &lt;link rel="stylesheet" type="text/css" href="mystyle.css"&gt;
  &lt;/head&gt;
      </code></pre>
      <p class="text-justify">
        En este ejemplo, el atributo <code>href</code> hace referencia al archivo llamado <code>mystyle.css</code> que contiene el estilo externo.
      </p>
      <p class="text-justify">
        Una hoja de estilos externa puede ser escrita en un editor de texto y no debe incluir etiquetas HTML. El archivo de hoja de estilos debe tener extensión
        <code>.css</code>.
      </p>
      <p class="text-justify">
        No añada espacios entre el valor de la propiedad y la unidad correspondiente (por ejemplo <code>margin-left:20 px;</code>), la forma correcta es:
        <code>margin-left:20px;</code>.
      </p>

      <h3>Hoja de Estilo Interna</h3>
      <p class="text-justify">
        Se recomienda utilizar una hoja de estilo interna si se tiene un solo archivo HTML. El estilo interno se define dentro de la etiqueta <code>&lt;style&gt;</code>
        dentro del encabezado <code>&lt;head&gt;</code> de la página HTML.
      </p>
      <pre><code>
  &lt;head&gt;
    &lt;style&gt;
      body {
        background-color: linen;
      }

      h1 {
        color: maroon;
        margin-left: 40px;
      }
    &lt;/style&gt;
  &lt;/head&gt;
      </code></pre>

      <h3>Estilo En Línea</h3>
      <p class="text-justify">
        El estilo en línea se utiliza para establecer estilo a un único elemento HTML. Para ello basta con añadir el atributo <code>style</code> a la etiqueta HTML que se desea
        modificar el estilo. El atributo <code>style</code> puede contener cualquier propiedad CSS.
      </p>
      <pre><code>
  &lt;h1 style="color:blue;margin-left:30px;"&gt;
    This is a heading.
  &lt;/h1&gt;
      </code></pre>
      <p class="text-justify">
        Utilizar este método para establecer el estilo ocasiona la perdida de las ventajas de una hoja de estilos. Debería ser utilizado solo cuando no haya
        otra alternativa.
      </p>

      <h3>Orden en Cascada</h3>
      <p class="text-justify">
        En CSS el estilo se aplica en cascada, lo que significa que los estilos se aplican de acuerdo a su prioridad.
      </p>
      <ul>
        <li>
          <p class="text-justify">Estilo en Línea</p>
        </li>
        <li>
          <p class="text-justify">Estilo en Hoja de Estilos Externa e Interna</p>
        </li>
        <li>
          <p class="text-justify">Estilo por defecto aplicado por el navegador.</p>
        </li>
      </ul>
      <p class="text-justify">
        La aplicación del estilo sobre el contenido en HTML funciona en cascada (tal como su nombre lo indica), esto significa que cuando un navegador recibe el código
        HTML se aplica el estilo por defecto del navegador. Posteriormente se buscan las hojas de estilo específicas para el documento y se aplica el estilo contenido en
        cada una de ellas. En primer lugar se busca la hoja de estilos externa, luego la hoja de estilos interna y finalmente el estilo en línea.
      </p>
      <h3>Prioridad de las Hojas de Estilo en HTML</h3>
      <ol>
        <li>En Línea</li>
        <li>Interna</li>
        <li>Externa</li>
        <li>Predeterminada del Navegador</li>
      </ol>
      <h3>Orden en que se aplican las Hojas de Estilo</h3>
      <ol>
        <li>Predeterminada del Navegador</li>
        <li>Externa</li>
        <li>Interna</li>
        <li>En Línea</li>
      </ol>
      <p class="text-justify">
        CSS aplica el estilo en cascada, lo que significa que en primer lugar se aplica el estilo por defecto del navegador, posteriormente el estilo en la hoja
        externa, luego el estilo en la hoja interna y por último el estilo en línea. Conforme un estilo se aplica posterior a otro, se reemplazan los atributos
        que se encuentren repetidos de acuerdo a la prioridad que corresponde a cada tipo de estilo.
      </p>
    </article>

    <article class="tema">
      <h2>Estilo de tablas con CSS</h2>
      <p class="text-justify">
        El estilo de las tablas en CSS puede mejorarse notablemente.
      </p>

      <h3>Bordes de las Tablas</h3>
      <p class="text-justify">
        Para especificar bordes en la tabla se utiliza la propiedad <code>border</code>. El siguiente ejemplo establece una línea solida de color negro de 1 pixel para
        los elementos <code>&lt;table&gt;</code>, <code>&lt;th&gt;</code> y <code>&lt;td&gt;</code>.
      </p>
      <pre><code>
  table, th, td {
     border: 1px solid black;
  }
      </code></pre>
      <p class="text-justify">
        Observe que en este ejemplo se tienen bordes dobles, esto es debido a que cada uno de los elementos <code>&lt;th&gt;</code> y <code>&lt;td&gt;</code> tienen sus
        respectivos bordes.
      </p>

      <h3>Colapsar los bordes de las Tablas</h3>
      <p class="text-justify">
        La propiedad <code>border-collapse</code> establece si los bordes deben ser colapsados en una sola línea.
      </p>
      <pre><code>
  table {
      border-collapse: collapse;
  }

  table, th, td {
      border: 1px solid black;
  }
      </code></pre>
      <p class="text-justify">
        Si solo se desea un único borde alrededor de la tabla, solo se debería especificar la propiedad <code>border</code> para la etiqueta <code>&lt;table&gt;</code>.
      </p>
      <pre><code>
  table {
      border: 1px solid black;
  }
      </code></pre>

      <h3>Ancho y Alto de la Tabla</h3>
      <p class="text-justify">
        El ancho y alto de una tabla se definen con las propiedades <code>widht</code> y <code>height</code> respectivamente.
      </p>
      <p class="text-justify">
        En el siguiente ejemplo se establece un ancho de la tabla al 100% y el alto de los elementos <code>&lt;th&gt;</code> de 50 pixeles.
      </p>
      <pre><code>
  table {
      width: 100%;
  }

  th {
      height: 50px;
  }
      </code></pre>

      <h3>Alineación Horizontal</h3>
      <p class="text-justify">
        La propiedad <code>text-align</code> establece la alineación horizontal (ya sea derecha, izquierda o centrada) del contenido de <code>&lt;th&gt;</code> y
        <code>&lt;td&gt;</code>. Por defecto, el contenido de los elementos <code>&lt;th&gt;</code> está centrado y el contenido de los elementos <code>&lt;td&gt;</code>
        está alineado a la izquierda.
      </p>
      <pre><code>
  th {
      text-align: left;
  }
      </code></pre>

      <h3>Alineación Vertical</h3>
      <p class="text-justify">
        La propiedad vertical-align establece la alineación vertical (ya sea superior, inferior o media) del contenido de <code>&lt;th&gt;</code> y
        <code>&lt;td&gt;</code>. Por defecto la alineación vertical del contenido de la tabla es inferior, tanto para los elementos <code>&lt;th&gt;</code>
        como para <code>&lt;th&gt;</code>.
      </p>
      <pre><code>
  td {
      height: 50px;
      vertical-align: bottom;
  }
      </code></pre>

      <h3>Espaciado en la Tabla</h3>
      <p class="text-justify">
        Para controlar el espaciado interno del contenido de la tabla, se utiliza la propiedad padding en los elementos <code>&lt;th&gt;</code> y
        <code>&lt;td&gt;</code>.
      </p>
      <pre><code>
  th, td {
      padding: 15px;
      text-align: left;
  }
      </code></pre>

      <h3>Divisores Horizontales</h3>
      <p class="text-justify">
        Para añadir solo divisores horizontales basta con establecer la propiedad border-bottom a los elementos <code>&lt;th&gt;</code> y <code>&lt;td&gt;</code>.
      </p>
      <pre><code>
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
  }
      </code></pre>

      <h3>Tabla con Resaltado al paso del Cursor</h3>
      <p class="text-justify">
        Para que una tabla reaccione al usuario cuando este pasa el puntero sobre alguno de sus elementos, basta con añadir el selector :hover a los elementos <code>&lt;tr&gt;</code>.
      </p>
      <pre><code>
  tr:hover {
    background-color: #f5f5f5
  }
      </code></pre>

      <h3>Tablas a Rayas</h3>
      <p class="text-justify">
        Para tablas que esten rayadas en sus renglones, se puede utilizar el selector <code>nth-child()</code> y añadir un color de fondo para todos los renglones pares o nones.
      </p>
      <pre><code>
tr:nth-child(even) {
  background-color: #f2f2f2
}
      </code></pre>

      <h3>Colores en las Tablas</h3>
      <p class="text-justify">
        El ejemplo muestra una tabla en la cual los elementos <code>&lt;th&gt;</code> tienen un color de fondo específico.
      </p>
      <pre><code>
  th {
      background-color: #4CAF50;
      color: white;
  }
      </code></pre>

      <h3>Tablas Responsivas</h3>
      <p class="text-justify">
        Una tabla responsiva despliega una barra de desplazamiento horizontal si la pantalla es muy pequeña para desplegar el contenido de la tabla.
      </p>
      <p class="text-align">
        Para conseguir esto basta con añadir un elemento contenedor (como puede ser <code>&lt;div&gt;</code>) alrededor del elemento <code>&lt;table&gt;</code>
        para hacerlo responsivo.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
  &lt;style&gt;
  table {
      border-collapse: collapse;
      width: 100%;
  }

  th, td {
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;

  &lt;h2&gt;Responsive Table&lt;/h2&gt;
  &lt;p&gt;A responsive table will display a horizontal scroll bar if the screen is too
  small to display the full content. Resize the browser window to see the effect:&lt;/p&gt;
  &lt;p&gt;To create a responsive table, add a container element (like div) with &lt;strong&gt;overflow-x:auto&lt;/strong&gt; around the table element:&lt;/p&gt;

  &lt;div style="overflow-x:auto;"&gt;
    &lt;table&gt;
      &lt;tr&gt;
        &lt;th&gt;First Name&lt;/th&gt;
        &lt;th&gt;Last Name&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
        &lt;th&gt;Points&lt;/th&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Jill&lt;/td&gt;
        &lt;td&gt;Smith&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
        &lt;td&gt;50&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Eve&lt;/td&gt;
        &lt;td&gt;Jackson&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
        &lt;td&gt;94&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Adam&lt;/td&gt;
        &lt;td&gt;Johnson&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
        &lt;td&gt;67&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
  &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Texto en CSS</h2>

      <h3>Color del Texto</h3>
      <p class="text-justify">
        La propiedad <code>color</code> se utiliza para establecer el color del texto.
      </p>
      <p class="text-justify">
        En CSS, el color puede ser especificado por:
      </p>
      <ul>
        <li>
          <p class="text-justify">Valor Hexadecimal: <code>#ff0000</code></p>
        </li>
        <li>
          <p class="text-justify">Valor en RGB: <code>rgb(255,0,0)</code></p>
        </li>
        <li>
          <p class="text-justify">Nombre del color: <code>red</code></p>
        </li>
      </ul>
      <p class="text-justify">
        El color por defecto del texto en una página está definido por el selector <code>body</code>.
      </p>
      <pre><code>
  body {
      color: blue;
  }
  h1 {
      color: green;
  }
      </code></pre>
      <p class="text-justify">
        <b>Nota</b>: La convención de CSS sugerida por la W3C dice que si se define la propiedad <code>color</code>, también debe definirse la propiedad
        <code>background-color</code>.
      </p>

      <h3>Alineación de Texto</h3>
      <p class="text-justify">
        La propiedad <code>text-align</code> se utiliza para establecer la alineación horizontal de un texto. Un texto puede ser alineado a la derecha, izquierda, centrado
        o justificado.
      </p>
      <pre><code>
  h1 {
      text-align: center;
  }

  h2 {
      text-align: left;
  }

  h3 {
      text-align: right;
  }
  div {
    text-align: justify;
}
      </code></pre>

      <h3>Decoración de texto</h3>
      <p class="text-justify">
        La propiedad <code>text-decoration</code> se utiliza para establecer o quitar decoración al texto. El valor <code>text-decoration: none;</code> se utiliza comúnmente
        para quitar el subrayado en el texto de los enlaces.
      </p>
      <pre><code>
  a {
      text-decoration: none;
  }
      </code></pre>
      <p class="text-justify">
        Los demás valores posibles que puede tener la propiedad <code>text-decoration</code> son los siguientes:
      </p>
      <pre><code>
  h1 {
      text-decoration: overline;
  }

  h2 {
      text-decoration: line-through;
  }

  h3 {
      text-decoration: underline;
  }
      </code></pre>
      <p class="text-justify">
        <b>Nota:</b> No se recomeinda utilizar subrayado en texto que no sea un enlace, esto puede confundir a los lectores del sitio.
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

    <article class="tema">
      <h2>Estilo de Enlaces</h2>
      <p class="text-justify">
        El estilo de los enlaces pueden ser modificados por cualquier propiedad de CSS. Adicionalmente, el estilo de los enlaces puede ser modificado de acuerdo
        al estado en el que se encuentran. Los estados son:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>a:link</code>. Enlace no visitado</p>
        </li>
        <li>
          <p class="text-justify"><code>a:visited</code>. Enlace ya visitado</p>
        </li>
        <li>
          <p class="text-justify"><code>a:hover</code>. Cuando el usuario pasa el ratón sobre el enlace.</p>
        </li>
        <li>
          <p class="text-justify"><code>a:active</code>. El momento cuando el usuario presiona el enlace.</p>
        </li>
      </ul>
      <pre><code>
  /* unvisited link */
  a:link {
      color: red;
  }

  /* visited link */
  a:visited {
      color: green;
  }

  /* mouse over link */
  a:hover {
      color: hotpink;
  }

  /* selected link */
  a:active {
      color: blue;
  }
      </code></pre>
      <p class="text-justify">
        Cuando se modifique el estilo de muchos enlaces, hay un par de reglas que deben tomarse:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>a:hover</code> debe definirse después de <code>a:link</code> y <code>a:visited</code></p>
        </li>
        <li>
          <p class="text-justify"><code>a:active</code> debe definirse después de <code>a:hover</code></p>
        </li>
      </ul>

      <h3>Estilo Avanzado de Enlaces</h3>
      <p class="text-justify">
        El siguiente ejemplo demuestra un estilo más avanzado donde se combinan varias propiedades CSS para desplegar los enlaces como botones que reaccionan
        al usuario.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
  &lt;style&gt;
      /* Estilo en común para todos los enlaces */
      a {
          color: white;
          padding: 14px 25px;
          text-decoration: none;
          text-align: center;
          border: 2px solid white;
          display: inline-block;
      }
      /* Estilo para cada enlace */
      a#link1 {
          background-color: rgb(154, 55, 55);
      }
      a#link2 {
          background-color: green;
      }
      a#link3 {
          background-color: blue;
      }
      /* Comportamiento cuando el cursor está sobre algún enlace */
      a#link1:hover, a#link2:hover, a#link3:hover {
        color: black;
        background-color: white;
        border: 2px solid red;
      }
  &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;a id="link1" href="javascript:void(0)"&gt;Enalce 1&lt;/a&gt;
    &lt;a id="link2" href="javascript:void(0)"&gt;Enalce 2&lt;/a&gt;
    &lt;a id="link3" href="javascript:void(0)"&gt;Enlace 3&lt;/a&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>














    <article class="tema">
      <h2>Modelo de Cajas</h2>
      <p class="text-justify">
        Todos los elementos en HTML pueden ser considerados como cajas. En CSS en término “modelo de caja” se utiliza cuando se trata acerca del diseño y estilo.
      </p>
      <p class="text-justify">
        El modelo de cajas consiste de margenes, bordes, espaciado y contenido.
      </p>
      <img src="img/box-model.gif" alt="Modelo de Cajas" class="imgcenter img-rounded img-responsive">
      <ul>
        <li>
          <p class="text-justify"><b>Margin: </b>Establece un área alrededor de un borde. El margen no tiene un color de fondo, es transparente. </p>
        </li>
        <li>
          <p class="text-justify"><b>Border: </b>El borde que se encuenra entre el espaciado y el contenido. El borde es heredado de la propiedad color de la caja.</p>
        </li>
        <li>
          <p class="text-justify"><b>Padding: </b>Establece unárea alrededor del contenido. El espaciado es afectado por el color de fondo de la caja.</p>
        </li>
        <li>
          <p class="text-justify"><b>Content: </b>El contenido de la caja, el lugar donde está el texto o imágenes.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 1</b>. Modelo de cajas de CSS
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Título&lt;/title&gt;
    &lt;style&gt;
      p.x {
        width: 220px;
        padding: 10px;
        border: 5px solid gray;
        margin: 0px;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Ejemplo de Box Model&lt;/p&gt;
    &lt;p class="x"&gt;Este texto tiene como ancho de 220 pixeles, espaciado de 10 pixeles,
    bordes de 5 pixeles grises sólidos y margen de 0 pixeles.&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <h2>Border</h2>
      <p class="text-justify">La propiedad <b>border-style</b> especifica que tipo de borde se desplegará.</p>
      <ul>
        <li>
          <p class="text-justify">
            <b>Border Width</b>. Define el ancho del borde. Por defecto se utiliza pixeles pero se puede utilizar valores: thin, medium o thick.
          </p>
          <pre><code>
  p.one {
    border-style: solid;
    border-width: 5px;
  }

  p.two {
    border-style: solid;
    border-width: medium;
  }
          </code></pre>
        </li>
        <li>
          <p class="text-justify">
            <b>Border Color</b>. Define el color del borde. El color puede ser establecido como:
              <ul>
                <li>
                  <p class="text-justify"><b>nombre</b>. Especificar el color por su nombre. e.g. "red"</p>
                </li>
                <li>
                  <p class="text-justify"><b>RGB</b>. Especificar el valor RGB. e.g. "rgb(255,0,0)"</p>
                </li>
                <li>
                  <p class="text-justify"><b>Hex</b>. Especificar el valor hexadecimal. e.g. "#ff0000"</p>
                </li>
              </ul>
          </p>
          <pre><code>
  p.one {
    border-style:solid;
    border-color:red;
  }

  p.two {
    border-style:solid;
    border-color:#98bf21;
  }
          </code></pre>
        </li>
      </ul>
      <p class="text-justify">
        En CSS es posible especificar diferentes bordes para todos los lados:
      </p>
      <pre><code>
  p {
    border-top-style:dotted;
    border-right-style:solid;
    border-bottom-style:dotted;
    border-left-style:solid;
  }
      </code></pre>
      <p class="text-justify">
        Con la finalidad de reducir la cantidad de código, es posible especificar todos los bordes en uno solo. Sin embargo, es posible especificar el borde por
        separado por si fuera necesario. Por lo tanto, esta propiedad puede tener de uno a cuatro valores:
      </p>
      <ul>
        <li>
          <p class="text-justify">border-style: dotted solid double dashed;</p>
          <ul>
            <li>
              <p class="text-justify">borde superior = punteado</p>
            </li>
            <li>
              <p class="text-justify">borde derecho = sólido</p>
            </li>
            <li>
              <p class="text-justify">borde inferior = doble</p>
            </li>
            <li>
              <p class="text-justify">borde izquierdo = sombreado</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">border-style: dotted solid double;</p>
          <ul>
            <li>
              <p class="text-justify">borde superior = punteado</p>
            </li>
            <li>
              <p class="text-justify">borde derecho e izquierdo = sólido</p>
            </li>
            <li>
              <p class="text-justify">borde inferior = doble</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">border-style: dotted solid;</p>
          <ul>
            <li>
              <p class="text-justify">borde superior e inferior = punteado</p>
            </li>
            <li>
              <p class="text-justify">borde derecho e izquierdo= sólido</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">border-style: dotted;</p>
          <ul>
            <li>
              <p class="text-justify">borde superior, inferior, derecho e izquierdo = punteado</p>
            </li>
          </ul>
        </li>
      </ul>
      <h2>Margin</h2>
      <p class="text-justify">El margen es el área alrededor de un elemento (fuera del borde). El margen no tiene color de fondo y es transparente.</p>
      <p class="text-justify">Posibles valores:</p>
      <table class="table table-bordered table-hover">
        <thead>
          <tr class="warning">
            <th>Valor</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>auto</td>
            <td>El navegador calcula el margen</td>
          </tr>
          <tr>
            <td>lenght</td>
            <td>Especifica el margen en px, pt, cm, etc. El valor por defecto es 0px.</td>
          </tr>
          <tr>
            <td>%</td>
            <td>Especifica un margen en porcentaje del ancho del elemento contenido.</td>
          </tr>
          <tr>
            <td>inherit</td>
            <td>Especifica que el margen debe ser heredado del elemento padre.</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">En CSS es posible especificar diferente margen para cada lado de la caja. Por ejemplo: </p>
      <pre><code>
  clase/id/elemento {
    margin-top:100px;
    margin-bottom:100px;
    margin-right:50px;
    margin-left:50px;
  }
      </code></pre>
      <p class="text-justify">Con la finalidad de reducir la cantidad de código, es posible especificar todos los márgenes en una sola línea. Sin embargo, es posible
        especificar el margen por separado por si fuera necesario. Por lo tanto, esta propiedad puede tener de uno a cuatro valores:</p>
      <ul>
        <li>
          <p class="text-justify">margin: 25px 50px 75px 100px;</p>
          <ul>
            <li>
              <p class="text-justify">margen superior = 25px</p>
            </li>
            <li>
              <p class="text-justify">margen derecho = 50px</p>
            </li>
            <li>
              <p class="text-justify">margen inferior = 75px</p>
            </li>
            <li>
              <p class="text-justify">margen izquierdo = 100px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">margin: 25px 50px 75px;</p>
          <ul>
            <li>
              <p class="text-justify">margen superior = 25px</p>
            </li>
            <li>
              <p class="text-justify">margen derecho e izquierdo = 50px</p>
            </li>
            <li>
              <p class="text-justify">margen inferior = 75px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">margin: 25px 50px;</p>
          <ul>
            <li>
              <p class="text-justify">margen superior e inferior = 25px</p>
            </li>
            <li>
              <p class="text-justify">margen derecho e izquierdo= 50px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">margin: 25px;</p>
          <ul>
            <li>
              <p class="text-justify">margen superior, inferior, derecho e izquierdo = 25px</p>
            </li>
          </ul>
        </li>
      </ul>
      <h2>Padding</h2>
      <p class="text-justify">En CSS es posible especificar diferente espaciado para cada lado de la caja. Por ejemplo: </p>
      <pre><code>
  padding-top:25px;
  padding-bottom:25px;
  padding-right:50px;
  padding-left:50px;
      </code></pre>
      <p class="text-justify">
        Con la finalidad de reducir la cantidad de código, es posible especificar todos los espaciados en una sola línea. Sin embargo, es posible especificar el
        espaciado por separado por si fuera necesario. Por lo tanto, esta propiedad puede tener de uno a cuatro valores:
      </p>
      <ul>
        <li>
          <p class="text-justify">padding: 25px 50px 75px 100px;</p>
          <ul>
            <li>
              <p class="text-justify">espaciado superior = 25px</p>
            </li>
            <li>
              <p class="text-justify">espaciado derecho = 50px</p>
            </li>
            <li>
              <p class="text-justify">espaciado inferior = 75px</p>
            </li>
            <li>
              <p class="text-justify">espaciado izquierdo = 100px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">padding: 25px 50px 75px;</p>
          <ul>
            <li>
              <p class="text-justify">espaciado superior = 25px</p>
            </li>
            <li>
              <p class="text-justify">espaciado derecho e izquierdo = 50px</p>
            </li>
            <li>
              <p class="text-justify">espaciado inferior = 75px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">padding: 25px 50px;</p>
          <ul>
            <li>
              <p class="text-justify">espaciado superior e inferior = 25px</p>
            </li>
            <li>
              <p class="text-justify">espaciado derecho e izquierdo= 50px</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">padding: 25px;</p>
          <ul>
            <li>
              <p class="text-justify">espaciado superior, inferior, derecho e izquierdo = 25px</p>
            </li>
          </ul>
        </li>
      </ul>
    </article>

    <article class="tema">
      <h2>Desplegado en CSS</h2>
      <p class="text-justify">
        La propiedad <code>display</code> en CSS es la más importante para controlar el diseño. La propiedad <code>display</code> especifica si un elemento es desplegado y la forma como
        se despliega.
      </p>
      <p class="text-justify">
        Cada elemento en HTML tiene un valor por defecto de <code>display</code> dependiendo del elemento que sea. El valor por defecto para la mayoría de los elementos es <code>block</code>
        o <code>inline</code>.
      </p>

      <p class="flip" onclick="myShowFunction()">Click to show panel</p>
      <div id="panel">
        <p>This panel contains a &lt;div&gt; element, which is hidden by default (<code>display: none</code>).</p>
        <p>It is styled with CSS, and we use JavaScript to show it (change it to (<code>display: block</code>).</p>
      </div>

      <h2>Elementos en Bloque</h2>
      <p class="text-justify">
        Un elemento en bloque siempre comienza en una nueva línea y toma todo el ancho disponible (se estira hacia la derecha e izquierda tanto como sea posible).
      </p>
      <p class="text-justify">
        Ejemplos de elementos en bloque:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>&lt;div&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;h1&gt;</code> hasta <code>&lt;h6&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;p&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;form&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;header&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;footer&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;section&gt;</code></p>
        </li>
      </ul>

      <h2>Elementos en Línea</h2>
      <p class="text-justify">
        Un elemento en línea no inicia en una nueva línea y solo toma el espacio necesario.
      </p>
      <p class="text-justify">
        Ejemplos de elementos en línea:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>&lt;span&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;a&gt;</code></p>
        </li>
        <li>
          <p class="text-justify"><code>&lt;img&gt;</code></p>
        </li>
      </ul>

      <h2>Display: none</h2>
      <p class="text-justify">
        El valor <code>display: none</code> se utiliza frecuentemente con JavaScript para ocultar y mostrar elementos sin borrarlos ni volverlos a crear. El elemento <code>&lt;script&gt;</code>
        utiliza <code>display: none</code> por defecto.
      </p>
      <p class="text-justify">
        Es posible cambiar el valor del atributo <code>display</code> de los elementos para que estos se comporten de forma diferente a como lo harían por defecto. Cambiar el valor de
        en línea a bloque puede ser útil para hacer que una página luzca de una forma específica, sin violar los estándares de la web.
      </p>
      <p class="text-justify">
        Un ejemplo típico de esto es en los elementos <code>&lt;li&gt;</code>:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo Lista&lt;/title&gt;
    &lt;style&gt;
      li.clase {
        display: inline;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Lista en bloque&lt;/h1&gt;
    &lt;ul&gt;
      &lt;li&gt;Elemento 1&lt;/li&gt;
      &lt;li&gt;Elemento 2&lt;/li&gt;
      &lt;li&gt;Elemento 3&lt;/li&gt;
    &lt;/ul&gt;

    &lt;h1&gt;Lista en Línea&lt;/h1&gt;
    &lt;ul&gt;
      &lt;li class="clase"&gt;Elemento 1&lt;/li&gt;
      &lt;li class="clase"&gt;Elemento 2&lt;/li&gt;
      &lt;li class="clase"&gt;Elemento 3&lt;/li&gt;
    &lt;/ul&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>Esconder un elemento: ¿display:none o visibility:hidden?</h2>
      <p class="text-justify">
        Para esconder un elemento se debe establecer a la propiedad <code>display: none;</code>, el elemento se esconderá y la página se desplegará como
        si el elemento no estuviese allí.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      h1.hidden {
        display: none;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;This is a visible heading&lt;/h1&gt;
    &lt;h1 class="hidden"&gt;This is a hidden heading&lt;/h1&gt;
    &lt;p&gt;Notice that the h1 element with display: none; does not take up any space.&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      Por otro lado, <code>visibility: hidden;</code> también ocultará el elemento, sin embargo el elemento aún toma el espacio en el esquema de la página.
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      h1.hidden {
        visibility: hidden;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;This is a visible heading&lt;/h1&gt;
    &lt;h1 class="hidden"&gt;This is a hidden heading&lt;/h1&gt;
    &lt;p&gt;Notice that the hidden heading still takes up space.&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <table class="table table-striped table-hover table-bordered">
        <thead>
          <tr>
            <th>Propiedad</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a target="_blank" href="http://www.w3schools.com/cssref/pr_class_display.asp">display</a></td>
            <td>Especifica como sera desplegado un elemento.</td>
          </tr>
          <tr>
            <td><a target="_blank" href="http://www.w3schools.com/cssref/pr_class_visibility.asp">visibility</a></td>
            <td>Especifica si un elemento será desplegado o no.</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">
        <b>Ejemplo 2</b>. <code>display: none</code> Vs. <code>visibility: none</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      .imgbox {
          float: left;
          text-align: center;
          width: 120px;
          height: 145px;
          border: 1px solid gray;
          margin: 4px;
          padding: 0;
      }
      .thumbnail {
          width: 110px;
          height: 90px;
          margin: 3px;
      }
      .box {
          width: 110px;
          padding: 0;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div style="text-align:center"&gt;
      &lt;div style="width:394px;height:160px;margin-left:auto;
        margin-right:auto;text-align:left;border:1px solid gray;"&gt;
        &lt;div class="imgbox" id="imgbox1"&gt;Box 1&lt;br&gt;
          &lt;img class="thumbnail" src="klematis_small.jpg" width="107" height="90" alt="Klematis"&gt;
          &lt;input class="box" type="button" onclick="removeElement()" value="Remove"&gt;
        &lt;/div&gt;
        &lt;div class="imgbox" id="imgbox2"&gt;Box 2&lt;br&gt;
          &lt;img class="thumbnail" src="klematis2_small.jpg" width="107" height="90" alt="Klematis"&gt;
          &lt;input class="box"  type="button" onclick="changeVisibility()" value="Hide"&gt;
        &lt;/div&gt;
        &lt;div class="imgbox"&gt;Box 3&lt;br&gt;
          &lt;img class="thumbnail" src="klematis3_small.jpg" width="107" height="90" alt="Klematis"&gt;
          &lt;input class="box"  type="button" onclick="resetElement()" value="Reset All"&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;script&gt;
      function removeElement() {
          document.getElementById("imgbox1").style.display = "none";
      }
      function changeVisibility() {
          document.getElementById("imgbox2").style.visibility = "hidden";
      }
      function resetElement() {
          document.getElementById("imgbox1").style.display = "block";
          document.getElementById("imgbox2").style.visibility = "visible";
      }
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Diseño CSS</h2>
      <p class="text-justify">
        Como se ha mencionado, un elemento de bloque siempre ocupará todo el espacio disponible, se estirará a la izquierda y derecha tanto como sea posible.
      </p>
      <p class="text-justify">
        Estableciendo un valor para <code>width</code> en un elemento de bloque previene que este se extienda fuera de los límites del contenedor. Por tanto,
        se puede configurar los margenes en <code>auto</code> para centrar el elemento dentro de su contenedor. El elemento tomará el espacio especificado
        en <code>width</code> y el espacio restante se divide en dos partes iguales para los margenes derecho e izquierdo.
      </p>
      <div style="border:3px solid #2194ad; width:500px; margin: auto;">
        Este <code>&lt;div&gt;</code> tiene un <code>width</code> de 50 pixeles y el margen en <code>auto</code>.
      </div>
      <p class="text-justify">
        <b>Nota</b>: El problema con este <code>&lt;div&gt;</code> ocurre cuando la ventana del navegador es más pequeña que el elemento <code>width</code>.
        El navegador entonces agregará una barra de desplazamiento horizontal.
      </p>
      <div style="border:3px solid #2194ad; max-width:500px; margin: auto;">
        Este <code>&lt;div&gt;</code> tiene un <code>max-width</code> de 500 pixeles y el margen en <code>auto</code>.
      </div>
      <p class="text-justify">
        Este segundo <code>&lt;div&gt;</code> tiene el atributo <code>max-width: 500px;</code> que permite al navegador manejar este elemento para pantallas
        pequeñas.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. Diferencia entre <code>width</code> y <code>max-width</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      div.ex1 {
          width:500px;
          margin: auto;
          border: 3px solid #2194ad;
      }

      div.ex2 {
          max-width:500px;
          margin: auto;
          border: 3px solid #2194ad;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div class="ex1"&gt;Este div tiene width: 500px;&lt;/div&gt;
    &lt;br&gt;
    &lt;div class="ex2"&gt;Este div tiene max-width: 500px;&lt;/div&gt;
    &lt;p&gt;
      &lt;strong&gt;Tip:&lt;/strong&gt; Cambie el tamaño de la ventana del
        navegador a menos de 500 pixeles para ver la diferencia
        entre ambos elementos.
    &lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Propiedad <code>position</code></h3>
      <p class="text-justify">
        La propiedad <code>position</code> especifica el tipo de posicionamiento utilizado por un elemento. Existen cuatro diferentes valores para el atributo
        <code>position</code>:
      </p>
      <ul>
        <li>
          <p class="text-justify"><code>static</code></p>
        </li>
        <li>
          <p class="text-justify"><code>relative</code></p>
        </li>
        <li>
          <p class="text-justify"><code>fixed</code></p>
        </li>
        <li>
          <p class="text-justify"><code>absolute</code></p>
        </li>
      </ul>
      <p class="text-justify">
        Los elementos pueden ser posicionados utilizando las propiedades <code>top</code>, <code>bottom</code>, <code>left</code> y <code>right</code>. Sin embargo, estas
        propiedades no funcionarán a menos que la propiedad <code>position</code> sea establecida previamente. Adicionalmente, funcionan de forma diferente dependiendo
        del valor <code>position</code>.
      </p>

      <h3>position: static;</h3>
      <p class="text-justify">
        Los elementos en HTML tienen el valor de <code>position: static</code> por defecto. Los elementos con este valor no son afectados por las propiedades <code>top</code>,
        <code>bottom</code>, <code>left</code> y <code>right</code>.
      </p>
      <p class="text-justify">
        Un elemento con la propiedad <code>position: static;</code> no es posicionado de ninguna forma en particular, se posiciona de acuerdo al flujo normal de la página.
      </p>
      <div style="position: static; border: 3px solid #2194ad;">
        Este elemento <code>&lt;div&gt;</code> tiene <code>position: static;</code>
      </div>
      <br>
      <p class="text-justify">
        <b>Ejemplo 4</b>. <code>position: static;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      div.static {
          position: static;
          border: 3px solid #2194ad;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h2&gt;position: static;&lt;/h2&gt;
    &lt;p&gt;
      Un elemento con la propiedad position: static; no es posicionado de ninguna
      forma en particular, se posiciona de acuerdo al flujo normal de la página.
    &lt;/p&gt;
    &lt;div class="static"&gt;
      Este elemento div tiene position: static;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>position: relative;</h3>
      <p class="text-justify">
        Un elemento con <code>position: relative;</code> es posicionado relativo a su posición normal. Estableciendo las propiedades <code>top</code>, <code>bottom</code>,
        <code>left</code> y <code>right</code> de un elemento posicionado relativamente ocasionará que sea ajustado alejado de su posición normal. Otro contenido no será
        ajustado para ocupar el espacio que el elemento haya dejado a su izquierda.
      </p>
      <div style="position: relative; left: 30px; border: 3px solid #2194ad;">
        Este elemento &lt;div&gt; tiene position: relative;
      </div>
      <br>
      <p class="text-justify">
        <b>Ejemplo 5</b>. <code>position: relative;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      div.relative {
          position: relative;
          left: 30px;
          border: 3px solid #2194ad;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h2&gt;position: relative;&lt;/h2&gt;
    &lt;p&gt;
      Un elemento con position: relative; se posiciona de forma relativa a su posición normal:
    &lt;/p&gt;
    &lt;div class="relative"&gt;
      Este elemento div tiene position: relative;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>position: fixed;</h3>
      <p class="text-justify">
        Un elemento con <code>position: fixed;</code> se posiciona relativamente a la ventana, lo que significa que se mantendrá en la misma posición aún y si
        la página se desplaza. Las propiedades <code>top</code>, <code>bottom</code>, <code>left</code> y <code>right</code> se utilizan para posicionar
        el elemento.
      </p>
      <p class="text-justify">
        Un elemento fijo no deja espacio en la página donde normalmente estaría ubicado.
      </p>
      <p class="text-justify">
        <b>Ejemplo 6</b>. <code>position: fixed;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;style&gt;
      div.fixed {
          position: fixed;
          bottom: 0;
          right: 0;
          width: 300px;
          border: 3px solid #73AD21;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h2&gt;position: fixed;&lt;/h2&gt;
    &lt;p&gt;
      Un elemento con position: fixed; se posiciona relativamente a la ventana, lo que significa
      que se mantendrá en la misma posición aún y si la página se desplaza.
    &lt;/p&gt;
    &lt;div class="fixed"&gt;
      Este div tiene position: fixed;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>position: absolute;</h3>
      <p class="text-justify">
        Un elemento con position: absolute; se posiciona relativamente al punto más cercano a su antecesor, en lugar de posicionarlo relativamente a la ventana.
      </p>
      <p class="text-justify">
        <b>Ejemplo 6</b>. <code>position: absolute;</code>
      </p>
      <pre><code>
        &lt;!DOCTYPE html&gt;
        &lt;html&gt;
        &lt;head&gt;
          &lt;style&gt;
            div.relative {
                position: relative;
                width: 400px;
                height: 200px;
                border: 3px solid #73AD21;
            }

            div.absolute {
                position: absolute;
                top: 80px;
                right: 0;
                width: 200px;
                height: 100px;
                border: 3px solid #73AD21;
            }
          &lt;/style&gt;
        &lt;/head&gt;
        &lt;body&gt;
          &lt;h2&gt;position: absolute;&lt;/h2&gt;
          &lt;p&gt;
            An element with position: absolute; is positioned relative to the nearest positioned ancestor
            (instead of positioned relative to the viewport, like fixed):
          &lt;/p&gt;
          &lt;div class="relative"&gt;This div element has position: relative;
            &lt;div class="absolute"&gt;This div element has position: absolute;&lt;/div&gt;
          &lt;/div&gt;
        &lt;/body&gt;
        &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>


    </article>



  </section>
</body>
</html>
