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
        <h1 class="titulo-principal">HTML5</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        HTML, siglas de HyperText Markup Language, hace referencia al lenguaje de marcado para la elaboración de páginas web. Es un estándar que, en sus diferentes versiones, define
        una estructura básica y un código (denominado código HTML) para la definición de contenido de una página web, como texto, imágenes, etc. Es un estándar a cargo de la W3C,
        organización dedicada a la estandarización de casi todas las tecnologías ligadas a la web, sobre todo en lo referente a su escritura e interpretación.
      </p>
      <p class="text-justify">
        El lenguaje HTML basa su filosofía de desarrollo en la referenciación. Para añadir un elemento externo a la página (imagen, vídeo, script, etc.), este no se incrusta directamente
        en el código de la página, sino que se hace una referencia a la ubicación de dicho elemento mediante texto. De este modo, la página web contiene sólo texto mientras que recae en
        el navegador web (interpretador del código) la tarea de unir todos los elementos y visualizar la página final. Al ser un estándar, HTML busca ser un lenguaje que permita que cualquier
        página web escrita en una determinada versión, pueda ser interpretada de la misma forma (estándar) por cualquier navegadores web actualizado.
      </p>
      <p class="text-justify">
        Sin embargo, a lo largo de sus diferentes versiones, se han incorporado y suprimido características, con el fin de hacerlo más eficiente y facilitar el desarrollo de páginas web
        compatibles con distintos navegadores y plataformas (PC de escritorio, portátiles, teléfonos inteligentes, tablets, etc.). Sin embargo, para interpretar correctamente una nueva
        versión de HTML, los desarrolladores de navegadores web deben incorporar estos cambios y el usuario debe ser capaz de usar la nueva versión del navegador con los cambios incorporados.
        Usualmente los cambios son aplicados mediante parches de actualización automática (Firefox, Chrome) u ofreciendo una nueva versión del navegador con todos los cambios incorporados,
        en un sitio web de descarga oficial (Internet Explorer). Un navegador no actualizado no será capaz de interpretar correctamente una página web escrita en una versión de HTML superior
        a la que pueda interpretar, lo que obliga muchas veces a los desarrolladores a aplicar técnicas y cambios que permitan corregir problemas de visualización e incluso de interpretación
        de código HTML. Así mismo, las páginas escritas en una versión anterior de HTML deberían ser actualizadas o reescritas, lo que no siempre se cumple. Es por ello que ciertos navegadores
        aún mantienen la capacidad de interpretar páginas web de versiones HTML anteriores. Por estas razones, aún existen diferencias entre distintos navegadores y versiones al interpretar
        una misma página web.
      </p>
    </article>
    <article class="tema">
      <h2>Todo es una etiqueta</h2>
      <p class="text-justify">
        Las páginas HTML son en esencia archivos de texto sin formato con etiquetas añadidas que proporcionan información sobre cómo se estructura el documento. Las etiquetas van entre los
        símbolos ‘<’ y  ‘>’.  Las etiquetas determinan la forma en como el navegador tratará el texto contenido en ellas, de allí viene el nombre de lenguaje de marcado de texto.
      </p>
      <p class="text-justify">
        Todas las etiquetas a excepción algunas especiales, deben abrirse y cerrarse. Para abrir una etiqueta se utiliza <b>&lt;etiqueta&gt;</b> y para cerrar <b>&lt;/etiqueta&gt;</b>.
        Todo lo que se encuentre entre este par de elementos sufrirá los efectos de la etiqueta en cuestión.
      </p>
    </article>
    <article class="tema">
      <h2>La primer página</h2>
      <p class="text-justify">
        Hagamos ahora nuestra primera página en html, bastará con escribir lo siguiente:
      </p>

      <pre><code>
    &lt;!DOCTYPE html&gt;
    &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Mi primera página&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;p&gt;Hola Mundo!.&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
      </code></pre>

      <p class="text-justify">
        Todas las páginas tienen dos elementos principales: cabeza y cuerpo.  A continuación se  describen las etiquetas utilizadas en el ejemplo anterior.
      </p>
      <ul>
        <li><p class="text-justify"><b>&lt;head&gt;</b>. Gestiona información sobre el documento y otros datos que no se consideran parte del contenido real del documento.
          Esto incluye el título de la página, sus meta etiquetas, hojas de estilo y cualquier script. En resumen cualquier cosa sobre o que afecte al contenido de la propia
          página. La información del elemento head no puede verla el usuario, sólo ve la información del elemento <b>body</b>.</p></li>
        <li><p class="text-justify"><b>&lt;body&gt;</b>. Es el lugar donde se encuentra todo lo que el usuario verá en el navegador. Cualquier texto, enlace o imagen que
          quiera mostrar en el navegador se encuentra ahí.</p></li>
        <li><p class="text-justify"><b>&lt;html&gt;</b>. Indica al navegador que el texto contenido dentro de la etiqueta debe ser tratado como un documento HTML.</li>
        <li><p class="text-justify"><b>&lt;title&gt;</b>. Es el título de la página que aparecerá en la ventana o pestaña del navegador. También es la forma como se
          identificará la página si se guarda en los favoritos del navegador.</p></li>
        <li><p class="text-justify"><b>&lt;p&gt;</b>. Indica que el texto contenido en ella sea presentado como un párrafo.</p></li>
        <li><p class="text-justify"><b>&lt;DOCTYPE&gt;</b>. Es una parte adicional, aunque importante de la página Web que indica al navegador cómo presentar la página y
          qué lenguaje se ha utilizado para etiquetarla. Debe ir antes de la etiqueta <b>&lt;html&gt;</b> inicial. Si no se especifica el tipo de documento, el navegador
          asume que se trata de una versión básica de HTML, por lo que si la página contiene elementos de una versión reciente de HTML, XHTML o algún otro, el contenido
          no se mostrará correctamente.</p></li>
        <li><p class="text-justify"><b>namespace</b>. Un segundo atributo necesario para crear páginas Web HTML Strict válidas, se conoce tambień como una declaración XML
          <b>namespace</b>. El atributo xmls="http://www.w3.org/1999/xhtml es necesario para escribir páginas Web en XHTML. Añadido a la etiqueta de inicio &lt;html&gt;
          sirve para validar la página.</p></li>
        <li><p class="text-justify"><b>Codificación de caracteres</b>. Se añade <b>charset="type”</b> en la etiqueta meta para indicar el tipo de codificación de caracteres
          utilizado en los archivos html que leerá el navegador. El más adecuado para nuestra lengua es "<b>utf-8</b>".</p></li>
      </ul>
      </p>
      <p class="text-justify">
        En HTML5 el encabezado inicial &lt;!DOCTYPE html&gt; no lleva información adicional, en versiones anteriores se utilizaban más parámetros hacial el navegador.
        Esta convención la introdujo la W3C con el objetivo de simplificar el código, ahora los navegadores se encargan de detectar los parámetros que previamente
        se escribían de forma explícita.
      </p>
      <p class="text-justify">
        Otras etiquetas útiles.
        &lt;strong&gt;. Énfasis fuerte, presentado por defecto en negrita en los navegadores.
        &lt;em&gt;. Énfasis, presentado por defecto en cursiva.
        &lt;!--  --&gt;. Esta etiqueta permite escribir comentarios dentro del código HTML, por lo que el navegador ignorará todo lo que se encuentre dentro.
      </p>
      <p class="text-justify">
        Una regla importante es que si se anidan etiquetas, es decir que se abre una etiqueta dentro de otra, debe cerrarse primero la última que se ha
        abierto. Por ejemplo:
        <pre><code>
  &lt;p&gt;&lt;strong&gt;&lt;em&gt;Soy un párrafo, estoy fuertemente enfatizado y en cursiva.&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;
        </code></pre>
      </p>
      <p class="text-justify">
        Es importante cerrar en el orden correcto las etiquetas, aunque funcionalmente podríamos no notar la diferencia, conforme la página se hace más
        grande y agreguemos estilos en ella,  ocurrirá que la página se verá diferente en distintos navegadores o incluso que no se muestre en lo absoluto.
      </p>
      <pre><code>
  &lt;p&gt;&lt;strong&gt;&lt;em&gt;Soy un párrafo escrito por un programador flojo y descuidado.&lt;/strong&gt;&lt;/em&gt;&lt;/p&gt;
      </code></pre>
      <p class="text-justify">
        Como en todos los lenguajes, es importante que el programador agregue comentarios en su código. Los comentarios son útiles para el programador
        mismo principalmente, ya que por ejemplo podrían ayudar a recordar como se estructuró el documento, como nota para indicar cuando cambió el
        documento, como nota para un compañero que trabaje en la misma página o simplemente para ocultar partes de la misma página.
      </p>
      <h3>Ejemplo:</h3>
      <pre><code>
  &lt;h1&gt;Comentarios en acción&lt;/h1&gt;
  &lt;p&gt;Soy el primer párrafo, me muestro en el navegador. El 1er. encabezado se muestra también.&lt;/p&gt;
  &lt;!-- Soy un comentario, no aparezco en el navegador --&gt;
  &lt;p&gt;Soy el segundo párrafo, también me muestro en el navegador.&lt;/p&gt;
  &lt;!-- &lt;p&gt;Soy el tercer párrafo, me han ocultado.&lt;/p&gt; --&gt;
      </code></pre>
      <p class="text-justify"></p>
    </article>

    <article class="tema">
      <h2>Etiquetado Estructurado</h2>
      <p class="text-justify">
        Las etiquetas son una herramienta útil y poderosa, es importante realizar etiquetado con significado. En primer lugar nos centramos en la semántica.
        Antes incluso de abrir el editor de texto, observe el contenido con el que ha estado trabajando y separelo en las partes que lo componen. Asígnele
        una jerarquía y trate de sacar el significado de frases específicas. Una vez hecho esto, etiquete el documento en función de ello.
      </p>
      <h2>Encabezados</h2>
      <ul>
        <li>
          <p class="text-justify">
            <h1>&lt;h1&gt;Texto muy grande&lt;/h1&gt;</h1> sirve para colocar la frase que indica el título del contenido de una página web.
          </p>
        </li>
        <li>
          <p class="text-justify">
            <h2>&lt;h2&gt;Texto grande&lt;h2&gt;</h2> indica títulos de importancia para subsecciones del documento web actua.
          </p>
        </li>
        <li>
          <p class="text-justify">
            <h3>&lt;h3&gt;Texto algo más grande de lo normal&lt;h3&gt;</h3>
          </p>
        </li>
        <li>
          <p class="text-justify">
            <h4>&lt;h4&gt;Texto normal&lt;h4&gt;</h4>
          </p>
        </li>
        <li>
          <p class="text-justify">
            <h5>&lt;h5&gt;Texto pequeño&lt;h5&gt;</h5>
          </p>
        </li>
        <li>
          <p class="text-justify">
            <h6>&lt;h6&gt;Texto muy pequeño&lt;h6&gt;</h6>
          </p>
        </li>
      </ul>
      <p class="text-justify">
        Las etiquetas h3, h4, h5 y h6 nos permiten definir títulos de subapartados de un bloque encabezado con un h2.
      </p>
      <p class="text-justify">
        ¿Qué es más importante, una etiqueta &lt;h1&gt; o una &lt;h2&gt;?, ¿es una &lt;h3&gt; más importante que una &lt;h5&gt;?. La respuesta es sencilla, en HTML hay seis encabezados
        &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt; y &lt;h6&gt;. &lt;h1&gt; es el más importante y &lt;h6&gt; el menos.
      </p>
      <p class="text-justify">
        El contenido de la página debe estar organizado en este punto por importancia, no por como se ve el texto con los encabezados. El estilo se define posteriormente con CSS.
      </p>
      <p class="text-justify"></p>
    </article>
    <article class="tema">
      <h2>Texto Estructurado</h2>
      <p class="text-justify">
        La estructura del texto en un sitio es fundamental para que la información sea comprensible y usable por el usuario.
      </p>
    </article>

    <article class="tema">
      <h2>Listas</h2>
      <p class="text-justify">
        Las listas son semánticas: sugieren estructura o indican grupos de información, que es por lo que las utilizamos. Las listas proporcionan un medio para agrupar
        información y hacer más fácil de comprender los elementos desglosados. Las listas también nos proporcionan etiquetas con significado, a las que posteriormente
        podemos aplicar estilo con CSS.
      </p>
      <h3>Listas sin orden</h3>
      <p class="text-justify">
        Estructuramos listas sin ordenar utilizando dos elementos: <b>ul</b> y <b>li</b>. El elemento ul indica que agrupamos nuestros elementos en una lista sin ordenar,
        es decir cada elemento de la lista es de igual valor y la lista no sugiere ningún orden inherente. El elemento <b>li</b> se utiliza para cada elemento de la lista.
      </p>
        <h3>Ejemplo:</h3>
      <pre><code>
  &lt;h1&gt;Séptima Generación de las Consolas de Videojuegos&lt;/h1&gt;
  &lt;ul&gt;
    &lt;li&gt;PlayStation 3&lt;/li&gt;
    &lt;li&gt;Nintendo Wii&lt;/li&gt;
    &lt;li&gt;Xbox 360&lt;/li&gt;
  &lt;/ul&gt;
      </code></pre>
      <p class="text-justify">
        Los marcadores de elemento pueden cambiarse si se agrega <b>TYPE=tipo</b> a la etiqueta de apertura de la lista, sustituyendo tipo por alguno disponible. Los elementos
        disponibles son:
      </p>
      <ul>
        <li>
          <p class="textjustify">disc</p>
        </li>
        <li>
          <p class="textjustify">circle</p>
        </li>
        <li>
          <p class="textjustify">square</p>
        </li>
      </ul>
      <p class="text-justify">
        Por defecto en una lista sin orden se utiliza <b>disc</b>.
      </p>

      <h3>Listas ordenadas</h3>
      <p class="text-justify">
        Para las listas ordenadas se utilizan los elementos <b>ol</b> y <b>li</b>. El elemento <b>ol</b> indica que agrupamos nuestros elementos en una lista ordenada y cada
        elemento de la lista se agrega con <b>li</b>.
      </p>
        <h3>Ejemplo:</h3>
      <pre><code>
  &lt;h1&gt;Éxito en ventas de las Consolas de videojuegos de la Séptima Generación&lt;/h1&gt;
  &lt;ol&gt;
    &lt;li&gt;Nintendo Wii&lt;/li&gt;
    &lt;li&gt;Xbox 360&lt;/li&gt;
    &lt;li&gt;PlayStation 3&lt;/li&gt;
  &lt;/ol&gt;
      </code></pre>
      <p class="text-justify">
        Los marcadores de elemento pueden cambiarse si se agrega <b>TYPE=tipo</b> a la etiqueta de apertura de la lista, sustituyendo tipo por alguno disponible. Los elementos
        disponibles son:
      </p>
      <ul>
        <li>
          <p class="text-justify">TYPE=A: A, B, C, D, ...</p>
        </li>
        <li>
          <p class="text-justify">TYPE a: a, b, c, d, ...</p>
        </li>
        <li>
          <p class="text-justify">TYPE I: I, II, III, IV, ...</p>
        </li>
        <li>
          <p class="text-justify">TYPE i: i, ii, iii, iv, ...</p>
        </li>
      </ul>
      <p class="text-justify">
        Por defecto en una lista ordenada se utilizan números arábigos.
      </p>
      <h3>Listas Descriptivas</h3>
      <p class="text-justify">
        Para las listas descriptivas se utilizan los elementos <b>dl</b>, <b>dt</b> y <b>dd</b>. El elemento <b>dl</b> en conjunto con <b>dt</b> indica que agrupamos nuestros
        elementos en una lista descriptiva y cada elemento de la lista se agrega con <b>dd</b>.
      </p>
        <h3>Ejemplo:</h3>
      <pre><code>
  &lt;dl&gt;
    &lt;dt&gt;Coffee&lt;/dt&gt;
      &lt;dd&gt;- black hot drink&lt;/dd&gt;
    &lt;dt&gt;Milk&lt;/dt&gt;
      &lt;dd&gt;- white cold drink&lt;/dd&gt;
  &lt;/dl&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Formularios</h2>
      <p class="text-justify">
        Los formularios se utilizan para enviar datos al servidor. Un formulario puede contener campos de texto, checkbox, botones de selección, botones de acción entre
        otros. De igual forma puede contener listas de selección, área de texto, leyendas y algunos más.
      </p>
      <p class="text-justify">
        La sintáxis para crear un formulario en HTML es la siguiente:
      </p>
      <pre><code>
  &lt;form&gt;
    ...
    elementos de entrada
    ...
  &lt;/form&gt;
      </code></pre>
      <p class="text-justify">
        El elemento más importante es el de entrada <b>&lt;input&gt;</b>, que se utiliza para seleccionar información del usuario. El elemento puede variar de muchas formas,
        de acuerdo al atributo "<b>type</b>". Puede ser un campo de texto, chechbox, contraseña entre otros.
      </p>
      <ol>
        <li>
          <p class="text-justify">
            Campos de texto
          </p>
          <pre><code>
  &lt;form&gt;
    First name: &lt;input type="text" name="firstname"&gt;&lt;br&gt;
    Last name: &lt;input type="text" name="lastname"&gt;
  &lt;/form&gt;
          </code></pre>
          <p class="text-justify">
            Nota: El formulario no es visible por si mismo y el ancho por defecto de un campo de texto es de 20 caracteres.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Campo de contraseña
          </p>
          <pre><code>
  &lt;form&gt;
    Password: &lt;input type="password" name="pwd"&gt;
  &lt;/form&gt;
          </code></pre>
          <p class="text-justify">
            Nota: Los caracteres en el campo de contraseña se muestran como asteriscos.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Botones de selección
          </p>
          <p class="text-justify">
            <b>&lt;input type="radio"&gt;</b> define un selector tipo radio. Estos botones permiten al usuario seleccionar solamente una de un número finito de opciones.
          </p>
          <pre><code>
&lt;form&gt;
  &lt;input type="radio" name="sex" value="male"&gt;Male&lt;br&gt;
  &lt;input type="radio" name="sex" value="female"&gt;Female
&lt;/form&gt;
          </code></pre>
        </li>
        <li>
          <p class="text-justify">
            Checkbox
          </p>
          <p class="text-justify">
            <b>&lt;input type="checkbox"&gt;</b> define un selector tipo checkbox. Estos botones permiten al usuario seleccionar desde ninguno hasta todas las opciones de
            un número finito de opciones.
          </p>
          <pre><code>
  &lt;form&gt;
    &lt;input type="checkbox" name="vehicle" value="Bike"&gt;I have a bike&lt;br&gt;
    &lt;input type="checkbox" name="vehicle" value="Car"&gt;I have a car
  &lt;/form&gt;
          </code></pre>
        </li>
        <li>
          <p class="text-justify">
            Botón de acción
          </p>
          <p class="text-justify">
            <b>&lt;input type="submit"&gt;</b> define un botón de enviar.
          </p>
          <p class="text-justify">
            El botón <b>enviar</b> se utiliza pra enviar información a un servidor. Los datos se envian a una página especificada en el atributo <b>action</b>. El archivo
            definido en el atributo <b>action</b> tipicamente hace algo con los datos recibidos.
          </p>
          <pre><code>
  &lt;form name="input" action="html_form_action.asp" method="get"&gt;
    Username: &lt;input type="text" name="user"&gt;
    &lt;input type="submit" value="Submit"&gt;
  &lt;/form&gt;
          </code></pre>
        </li>
      </ol>
    </article>

    <article class="tema">
      <h2>Tablas</h2>
      <p class="text-justify">
        Las tablas se definen con la etiqueta <b>&lt;table&gt;</b>.
      </p>
      <p class="text-justify">
        Una tabla se divide en renglones mediante la etiqueta <b>&lt;tr&gt;</b>. Los renglones pueden dividirse a su vez en columnas con la etiqueta <b>&lt;td&gt;</b>.
        Un renglón puede dividirse en encabezados mediante la etiqueta <b>&lt;th&gt;</b>.
      </p>
      <p class="text-justify">
        Los elementos <b>&lt;td&gt;</b> son contenedores de datos en la tabla y pueden contener todo tipo de elementos HTML como texto, imágenes, listas, otras tablas, etc.
      </p>
      <p class="text-justify">
        El ancho de una tabla y formato en general puede definirse mediante CSS.
      </p>
        <h3>Ejemplo 1. Mi primera tabla.</h3>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Tabla&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;table&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 1&lt;/td&gt;
        &lt;td&gt;Elemento 2&lt;/td&gt;
        &lt;td&gt;Elemento 3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 4&lt;/td&gt;
        &lt;td&gt;Elemento 5&lt;/td&gt;
        &lt;td&gt;Elemento 6&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 7&lt;/td&gt;
        &lt;td&gt;Elemento 8&lt;/td&gt;
        &lt;td&gt;Elemento 9&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
  &lt;/body&gt;
  &lt;/html>
      </code></pre>
      <p class="text-justify">
        Este ejemplo genera una tabla sin estilo, el código HTML solo debe tener el contenido de las tablas cualquier característica de estilo se hace mediante CSS.
        Algunas propiedades para el estilo en tablas son las siguientes:
      </p>
      <ul>
        <li><b>border</b>. Añadir bordes a la tabla, definir ancho del borde y color.</li>
        <li><b>border-collapse</b>. Colapsar los bordes en una sola línea.</li>
        <li><b>padding</b>. Espacio que habrá entre las celdas y su contenido.</li>
      </ul>
        <h3>Ejemplo 2. Estilo en tablas.</h3>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Document&lt;/title&gt;
    &lt;style&gt;
      table,th,td {
        border:1px solid black;
        border-collapse: collapse;
        padding: 15px;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;table&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 1&lt;/td&gt;
        &lt;td&gt;Elemento 2&lt;/td&gt;
        &lt;td&gt;Elemento 3&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 4&lt;/td&gt;
        &lt;td&gt;Elemento 5&lt;/td&gt;
        &lt;td&gt;Elemento 6&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr&gt;
        &lt;td&gt;Elemento 7&lt;/td&gt;
        &lt;td&gt;Elemento 8&lt;/td&gt;
        &lt;td&gt;Elemento 9&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Si no se especifica el tamaño de la fuente, por defecto se establece <b>16px</b> para el texto normal, como párrafos (16px = 1em).
      </p>
      <p class="text-justify">
        Para evitar el problema de redimensionar con versiones antiguas de Internet Explorer, se recomienda utilizar <b>em</b> en lugar de pixles.
        La unidad de medida em es recomendada por la W3C.
      </p>
      <p class="text-justify">
        <b>em</b> es equivalente al tamaño actual del tamaño de letra. El tamaño por defecto de la letra en los navegadores es 16px. Por lo tanto el tamaño
        por defecto de <b>em</b> es <b>16px</b>.

      </p>
      <p class="text-justify">
        El tamaño puede ser calculado de pixels a <b>em</b> mediante la fórmula: em = pixels/16
      </p>
        <h3>Ejemplo 3. Tabla con más estilo.</h3>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;style&gt;
      /* Estilo en toda la tabla */
      #consolas {
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
        width: 100%;
        border-collapse: collapse;
        text-align: center;
      }
      #consolas td, #consolas th {
        font-size: 1em;
        border: 1px solid #98bf21;
        padding: 3px 7px 2px 7px;
      }
      #consolas th {
        font-size: 1.1em;
        text-align: center;
        padding-top: 5px;
        padding-bottom: 4px;
        background-color: #A7C942;
        color: #ffffff;
      }
      #consolas tr.renglon1 td {
        color: #000000;
        background-color: #EAF2D3;
      }
      #consolas tr.renglon2 td {
        color: #000000;
        background-color: white;
      }
    &lt;/style&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;table id="consolas"&gt;
      &lt;tr&gt;
        &lt;th&gt;Generación&lt;/th&gt;
        &lt;th&gt;Nintendo&lt;/th&gt;
        &lt;th&gt;SEGA&lt;/th&gt;
        &lt;th&gt;Sony&lt;/th&gt;
        &lt;th&gt;Microsoft&lt;/th&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon1"&gt;
        &lt;td&gt;3&lt;/td&gt;
        &lt;td&gt;NES&lt;/td&gt;
        &lt;td&gt;Master System&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon2"&gt;
        &lt;td&gt;4&lt;/td&gt;
        &lt;td&gt;Super NES&lt;/td&gt;
        &lt;td&gt;Genesis&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon1"&gt;
        &lt;td&gt;5&lt;/td&gt;
        &lt;td&gt;Nintendo 64&lt;/td&gt;
        &lt;td&gt;Saturn&lt;/td&gt;
        &lt;td&gt;Playstation&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon2"&gt;
        &lt;td&gt;6&lt;/td&gt;
        &lt;td&gt;Game Cube&lt;/td&gt;
        &lt;td&gt;Dreamcast&lt;/td&gt;
        &lt;td&gt;Playstation 2&lt;/td&gt;
        &lt;td&gt;XBOX&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon1"&gt;
        &lt;td&gt;7&lt;/td&gt;
        &lt;td&gt;Wii&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;Playstation 3&lt;/td&gt;
        &lt;td&gt;XBOX 360&lt;/td&gt;
      &lt;/tr&gt;
      &lt;tr class="renglon2"&gt;
        &lt;td&gt;8&lt;/td&gt;
        &lt;td&gt;WiiU&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
        &lt;td&gt;Playstation 4&lt;/td&gt;
        &lt;td&gt;XBOX One&lt;/td&gt;
      &lt;/tr&gt;
    &lt;/table&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Con todo lo anterior, podemos crear un esqueleto en HTML que pueda contener cualquier tipo de página. A partir de este esqueleto podemos construir un sitio
        solo llenando los espacios con la información que corresponda.
      </p>
    </article>

    <article class="tema">

      <h2>Enlaces HTML</h2>
      <p class="text-justify">
        Los enlaces se encuentran en casi todas las páginas Web, los enlaces permiten al usuario ir de una página a otra.
      </p>
      <p class="text-justify">
        Los enlaces en HTML son hipervinculos. Un hipervinculo es un texto o imágen donde puede darse un click para desplazarse a otro documento. En HTML los
        enlaces se definen con la etiqueta <code>&lt;a&gt;</code>.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  &lt;a href="url"&gt;Texto del Enlace&lt;/a&gt;
      </code></pre>
      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  &lt;a href="http://lab.anahuac.mx/~hselley/ppi/"&gt;PPI&lt;/a&gt;
      </code></pre>
      <p class="text-justify">
        El atributo <code>href</code> especifica la dirección destino del enlace. El <code>Texto del Enlace</code> es la parte visible.
      </p>
      <p class="text-justify">
        Los valores que puede tomar el atributo <code>href</code> son los siguientes:
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Valor</th>
            <th>Ejemplo</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>URL Absoluta</td>
            <td>http://ejemplo.com/</td>
          </tr>
          <tr>
            <td>URL Relativa</td>
            <td>href="index.html"</td>
          </tr>
          <tr>
            <td>Enlace Interno</td>
            <td>href="#inicio"</td>
          </tr>
          <tr>
            <td>Otros Protocolos</td>
            <td>http://, ftp://, mailto:, file:, etc.</td>
          </tr>
          <tr>
            <td>Un script</td>
            <td>href="javascript:alert('Hola mundo');"</td>
          </tr>
        </tbody>
      </table>

      <h2>Colores en los enlaces</h2>
      <p class="text-justify">
        Cuando el usuario pasa el cursor sobre un enlace, dos cosas normalmente pasan:
      </p>
      <ul>
        <li>
          <p class="text-justify">El cursor cambia de acuerdo al navegador y sistema operativo.</p>
        </li>
        <li>
          <p class="text-justify">El texto del enlace cambiará de color.</p>
        </li>
      </ul>
      <p class="text-justify">
        Por defecto, el color del texto de un enlace aparece de la siguiente forma:
      </p>
      <ul>
        <li>
          <p class="text-justify">Un enlace no visitado está subrayado y en azul.</p>
        </li>
        <li>
          <p class="text-justify">Un enlace visitado está subrayado y en purpura.</p>
        </li>
        <li>
          <p class="text-justify">Un enlace activo está subrayado y en rojo.</p>
        </li>
      </ul>
      <p class="text-justify">
        Se pueden cambiar los colores por defecto con CSS.
      </p>
      <pre><code>
  &lt;style&gt;
    a:link    {
      color:green;
      background-color:transparent;
      text-decoration:none;
    }
    a:visited {
      color:pink;
      background-color:transparent;
      text-decoration:none;
    }
    a:hover {
      color:red;
      background-color:transparent;
      text-decoration:underline;
    }
    a:active {
      color:yellow;
      background-color:transparent;
      text-decoration:underline;
    }
  &lt;/style&gt;
      </code></pre>

      <h2>El atributo <code>target</code> en los enlaces HTML</h2>
      <p class="text-justify">
        El atributo <code>target</code> especifica donde y como se abrirá el documento enlazado. Los valores posibles que puede tomar el atributo son los siguientes:
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Valor</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><code>_blank</code></td>
            <td>Abre el enlace en una nueva ventana o pestaña.</td>
          </tr>
          <tr>
            <td><code>_self</code></td>
            <td>Abre el enlace en el contenedor del enlace.</td>
          </tr>
          <tr>
            <td><code>_parent</code></td>
            <td>Abre el enlace en el contenedor padre.</td>
          </tr>
          <tr>
            <td><code>_top</code></td>
            <td>Abre el enlace en el cuerpo completo de la ventana.</td>
          </tr>
          <tr>
            <td><code>framename</code></td>
            <td>Abre el enlace en el contenedor especificado en el valor del atributo.</td>
          </tr>
        </tbody>
      </table>
      <h2>Imágenes como enlaces</h2>
      <p class="text-justify">
        En HTML es posible utulizar imágenes como enlaces, por ejemplo:
      </p>
      <pre><code>
  &lt;a href="pagina.html"&gt;
    &lt;img src="imagen.jpg" alt="Texto Alternativo"
       style="width:42px;height:42px;border:0"&gt;
  &lt;/a&gt;
      </code></pre>

      <h2>Enlaces Internos</h2>
      <p class="text-justify">
        Los enlaces internos se utilizan para que los lectores puedan ir a partes específicas de una página Web. Para crear un enlace interno basta con asignar un
        <code>id</code> a alguna etiqueta específica, luego añadir un enlace hacia ella. De esta forma, cuando el enlace es presionado la página se desplazará hacia
        la ubicación de la etiqueta con ese <code>id</code>.
      </p>
      <pre><code>
  &lt;h2 id="tips"&gt;Sección de Tips&lt;/h2&gt;
  &lt;a href="#tips"&gt;Visite la Sección de Tips Útiles&lt;/a&gt;
      </code></pre>
      <p class="text-justify">
        También es posible añadir un enalce interno de un documento enlazado.
      </p>
      <pre><code>
  &lt;a href="html_tips.html#tips"&gt;Tips&lt;/a&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Imágenes en HTML</h2>
      <p class="text-justify">
        En HTML las imágenes se definen con la etiqueta <code>&lt;img&gt;</code>. La etiqueta solo contiene atributos y no tiene una etiqueta de cerrado. El atributo
        <code>src</code> especifica la dirección (URL o local) de la imágen.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  &lt;img src="url" alt="texto_alternativo"&gt;
      </code></pre>
      <p class="text-justify">
        El atributo <code>alt</code> especifica un trexto alternativo a la imágen si esta no puede ser desplegada por alguna razón. Aunque este atributo no es
        necesario si es muy recomendable utilizarlo para que una página se valide correctamente.
      </p>
      <p class="text-justify">
        Adicionalmente, este atributo lo utilizan los lectores de pantalla para personas con alguna discapacidad visual.
      </p>

      <h2>Tamaño de las imágenes</h2>
      <p class="text-justify">
        Para especificar el tamaño en que será desplegada una imágen se puede hacer desde el atributo <code>style</code>. Dentro de este atributo se puede definir
        el ancho y alto (<code>width</code> y <code>heigth</code> respectivamente) con el cual la imágen será desplegada por el navegador. Los valores se especifican
        en pixeles.
      </p>
      <pre><code>
  &lt;img src="html5.gif" alt="HTML5 Icon" style="width:128px;height:128px;"&gt;
      </code></pre>
      <p class="text-justify">
        También pueden utilizarse los atributos <code>width</code> y <code>heigth</code> directamente en la etiqueta <code>&lt;img&gt;</code>.
      </p>
      <pre><code>
  &lt;img src="html5.gif" alt="HTML5 Icon" width="128" height="128"&gt;
      </code></pre>
      <p class="text-justify">
        Aunque ambos metodos para establecer el tamaño de la imágen son válidos para el estándar HTML5, se recomienda utilizar el atributo <code>style</code>. Esto
        debido a que de esta forma se evita que alguna hoja de estilos externa o interna cambie el tamaño de la imágen (técnicamente estamos usando un estilo en línea).
      </p>
      <p class="text-justify"></p>
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
      <h2>Esqueleto de una página en HTML5</h2>
      <p class="text-justify">
        Con todo lo anterior, podemos crear un esqueleto en HTML que pueda contener cualquier tipo de página. A partir de este esqueleto podemos construir un sitio
        solo llenando los espacios con la información que corresponda.
      </p>
        <h3>Ejemplo 4. Esqueleto de una página en HTML 5</h3>
      <p class="text-justify">
        <h4>HTML</h4>
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Esqueleto de una página&lt;/title&gt;
    &lt;link rel="stylesheet" type="text/css" href="css/estiloMacho.css"&gt;
    &lt;script type="text/javascript" src="js/script.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div id="contenedor"&gt;
    &lt;!-- Dividir la página en varias secciones --&gt;
    &lt;div id='top'&gt;
      &lt;!-- Logotipo superior --&gt;
      &lt;div id='topLogo'&gt;
        &lt;a href='http://www.w3.org/'&gt;
        &lt;img src='src/HTML5_Logo_512.png' alt='google.com' height='64' style='border:0;'&gt;
        &lt;/a&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id='topnav'&gt;
      &lt;!-- Navegación superior --&gt;
      &lt;div&gt;
        &lt;a class='topnav' href='home.html'&gt;HOME&lt;/a&gt;
        &lt;a class='topnav' href='Lugar1.html'&gt;Lugar 1&lt;/a&gt;
        &lt;a class='topnav' href='Lugar2.html'&gt;Lugar 2&lt;/a&gt;
        &lt;a class='topnav' href='Lugar3.html'&gt;Lugar 3&lt;/a&gt;
        &lt;a class='topnav' href='Mas.html'&gt;Más...&lt;/a&gt;
        &lt;div class='topNavRight'&gt;
          &lt;a class='topnav' href='Ejemplos.html'&gt; EJEMPLOS&lt;/a&gt;|
          &lt;a class='topnav' href='foro.html'&gt; FORO&lt;/a&gt;|
          &lt;a class='topnav' href='acerca.html'&gt; ACERCA DE&lt;/a&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="cabecera"&gt;
      &lt;!-- Cabecera del sitio --&gt;
      &lt;h1&gt;Cabecera del sitio&lt;/h1&gt;
    &lt;/div&gt;
    &lt;div id="menu"&gt;
      &lt;!-- Menú del costado izquierdo --&gt;
      &lt;h4&gt;Índice del contenido de la página&lt;/h4&gt;
      &lt;ul&gt;
          &lt;li&gt;&lt;a href="#cabecera"&gt;Inicio&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#seccion1"&gt;Sección 1&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#seccion2"&gt;Sección 2&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#seccion3"&gt;Sección 3&lt;/a&gt;&lt;/li&gt;
          &lt;li&gt;&lt;a href="#seccion4"&gt;Sección 4&lt;/a&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
    &lt;div id="contenido"&gt;
      &lt;div id="principal"&gt;
        &lt;!-- Contenido principal de la página --&gt;
        &lt;h2&gt;Acá va el contenido principal de la página.&lt;/h2&gt;

        &lt;!-- Sección 1 del Contenido --&gt;
        &lt;h3 id="seccion1"&gt;Sección 1&lt;/h3&gt;
        &lt;p&gt;Contenido Seccion 1&lt;/p&gt;

        &lt;!-- Sección 2 del Contenido --&gt;
        &lt;h3 id="seccion2"&gt;Sección 2&lt;/h3&gt;
        &lt;p&gt;Contenido Seccion 2&lt;/p&gt;

        &lt;hr&gt;
      &lt;/div&gt;

      &lt;div id="secundario"&gt;
        &lt;!-- Contenido secundario de la página --&gt;
        &lt;h2&gt;Contenido secundario.&lt;/h2&gt;
        &lt;p&gt;Aquí pueden ir enlaces o imágenes complementarias a la información principal.&lt;/p&gt;
        &lt;p&gt;Esta sección es opcional, depende del diseño que se elija.&lt;/p&gt;
        &lt;p&gt;Google ofrece una gran variedad de fuentes para los desarrolladores Web en &lt;a href="https://www.google.com/fonts#"&gt;Google Fonts&lt;/a&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="pie"&gt;
      &lt;!-- Pié de página --&gt;
      Aquí van enlaces externos o internos para navegar el sitio.&lt;br&gt;
    &lt;/div&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
  </code></pre>

    <h4>CSS</h4>
  <pre><code>
  html {
    overflow-y:scroll;
  }
  body {
    font-family: sans-serif;
    font-size:0.8125em;
    color:#404040;
    background-color:#F6F4F0;
    margin:0px;
  }
  body,p,h1,h2,h3,h4,table,td,th,ul,ol,textarea,input {
    font-family: verdana,helvetica,arial,sans-serif;
  }
  h1,h2,h3,h4,h5,h6 {
    background-color:transparent;
    color:#000000;
  }
  h1 {
    font-size:28px;
    margin-top:0px;
    font-weight:normal;
  }
  h2 {
    font-size:22px;
    margin-top:10px;
    margin-bottom:10px;
    font-weight:normal;
  }
  h3 {
    font-size:17px;
    font-weight:normal;
  }

  h4 {
    font-size:12px;
  }
  h5 {
    font-size:11px;
  }
  h6 {
    font-size:10px;
  }
  #menu {
    position: fixed;
    float: left;
    width: 10%;
    height: 500px;
  }
  #topnav {
    height:25px;
    background-color:#d3d3d3;
  }
  .topNavRight {
    float:right;
    word-spacing:0;
  }
  a:link{
    color: blue;
  }
  a:hover{
    color: red;
  }
  #cabecera {
    width: 100%;
    margin:auto;
    height:10%;
    text-align: center;
  }
  #contenido {
    float: right;
    width: 90%;
    height: 100%;
  }
  #contenido #principal {
    background-color: #F4F4F4;
    float: left;
    width: 80%;
    height: 90%;
  }
  #contenido #secundario {
    float: left;
    width: 20%;
    height: 90%;
    font-style: bold;
    border-style: none;
    text-align: center;
  }
  #pie {
    clear: both;
    font-style: italic;
    text-align: center;
    height: 10%;
  }
      </code></pre>
    </article>

    <article class="tema">
      <h2>Multimedia</h2>
      <p class="text-justify">
        Multimedia en la Web es el sonido, musica, videos, peliculas y animaciones.
      </p>
      <p class="text-justify">
        Los contenidos multimedia se almacenan en archivos cuya extensión nos dice el tipo de contenido multimedia.
      </p>

      <h2>Video</h2>
      <p class="text-justify">
        Antes de HTML5 no existía un estandar para los videos para las páginas en Internet, los vídeos solo se reproducen con un plugin. La etiqueta en HTML5 <code>video</code>
        permite añadir un video en una página web.
      </p>
      <p class="text-justify">
        HTML5 solamente soporta de forma nativa video en los formatos siguientes formatos:
      </p>
      <ul>
        <li>
          <p class="text-justify">MP4</p>
        </li>
        <li>
          <p class="text-justify">WebM</p>
        </li>
        <li>
          <p class="text-justify">Ogg</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Videos en HTML5
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Video&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;video&gt;
      &lt;source src="sw3.mp4" type="video/mp4"&gt;
      Su navegador no soporta el elemento de audio.
    &lt;/video&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Existen más <a href="http://www.w3schools.com/tags/tag_video.asp">atributos opcionales</a> de la etiqueta video.
      </p>

      <h2>Audio</h2>
      <p class="text-justify">
        Al igual que con el video, antes de HTML5 no existía un estandar para reproducir audio para las páginas en Internet, los archivos de audio solo se reproducen con un
        plugin. La etiqueta en HTML5 <code>audio</code> permite añadir un audio en una página web.
      </p>
      <p class="text-justify">
        HTML5 solamente soporta de forma nativa audio en los formatos siguientes formatos:
      </p>
      <ul>
        <li>
          <p class="text-justify">MP3</p>
        </li>
        <li>
          <p class="text-justify">WAV</p>
        </li>
        <li>
          <p class="text-justify">Ogg</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 6</b>. Audio en HTML5
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Audio&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;audio&gt;
      &lt;source src="QJ.mp3" type="audio/mpeg"&gt;
      Su navegador no soporta el elemento de audio.
    &lt;/audio&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>

      <h2>Plugins</h2>
      <p class="text-justify">
        El propósito de los plugins en HTML5 es extender la funcionalidad de los navegadores en HTML. Los plugins también son conocidos como applets Java.
        Los plugins pueden ser añadidos en las páginas web con las etiquetas <code>&lt;object&gt;</code> o <code>&lt;embed&gt;</code>.
      </p>
      <p class="text-justify">
        Los plugins pueden ser utilizados para muchos propósitos como desplegar mapas, buscar virus, verificar su identidad en la banca electrónica, etc.
      </p>
      <p class="text-justify">
        La etiqueta <code>&lt;object&gt;</code> es soportada por todos los navegadores, define un objeto incrustado en un documento HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 7</b>. Incrustar objetos a una página con la etiqueta <code>&lt;object&gt;</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo de Plugins&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Ejemplo de Plugins&lt;/h1&gt;
    &lt;h2&gt;SWF&lt;/h2&gt;
    &lt;object data="src/inicio.swf" type=""&gt;&lt;/object&gt;

    &lt;h2&gt;Imágenes&lt;/h2&gt;
    &lt;object data="src/cap.png" type=""&gt;&lt;/object&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        La etiqueta <code>&lt;embed&gt;</code> es soportado por la mayoría de los navegadores. Esta etiqueta también permite incrustar objetos dentro de los documentos
        HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 8</b>. Incrustar objetos a una página con la etiqueta <code>&lt;embed&gt;</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo de Plugins&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Ejemplo de Plugins&lt;/h1&gt;
    &lt;h2&gt;SWF&lt;/h2&gt;
    &lt;embed src="src/inicio.swf"&gt;

    &lt;h2&gt;Imágenes&lt;/h2&gt;
    &lt;embed src="src/cap.png"&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>YouTube</h2>
      <p class="text-justify">
        HTML5 permite la reproducción de videos de forma nativa sin la necesidad de algún plugin adicional, sin embargo solo soporta algunos formatos de videos. Es posible
        convertir los videos, pero requiere software especial para conversión y tiempo para llevarla a cabo. La forma más sencilla de reproducir videos en HTML es a través de
        YouTube.
      </p>
      <p class="text-justify">
        Actualmente YouTube proporciona el código HTML necesario para incrustar un video, este se encuentra en la sección <code>compartir</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 9</b>. Incrustar un video de YouTube a una página HTML.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo de Video&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Ejemplo de Video incrustado desde YouTube&lt;/h1&gt;
    &lt;iframe width="420" height="315" src="https://www.youtube.com/embed/z9Uz1icjwrM"
      frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        La etiqueta <code>&lt;iframe&gt;</code> tiene los siguientes parámetros.
      </p>
      <ul>
        <li><h3>autohide</h3>
          <ul>
            <li>
              <p class="text-justify">
                <b>Valor 0</b>: Los controles del reproductor son visibles.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 1</b>: Los controles del reproductor se ocultan cuando se reproduce el video.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 2 (por defecto)</b>: Si el reproductor tiene relación de aspecto <code>16:9</code> o <code>4:3</code> toma el valor de <code>1</code>, cualquier otro caso
                toma el valor de <code>0</code>.
              </p>
            </li>
          </ul>
        </li>
        <li><h3>autoplay</h3>
          <ul>
            <li>
              <p class="text-justify">
                <b>Valor 0 (por defecto)</b>: El video no se reproduce automáticamente cuando el reproductor sea cargado.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 1</b>: El video se reproducirá automáticamente cuando el reproductor sea cargado.
              </p>
            </li>
          </ul>
        </li>
        <li><h3>controls</h3>
          <ul>
            <li>
              <p class="text-justify">
                <b>Valor 0</b>: Los controles del reproductor son ocultados. El video se carga inmediatamente.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 1 (por defecto)</b>: Los controles del reproductor son visibles. El video se carga inmediatamente.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 2</b>: Los controles del reproductor son visibles pero el video no se carga inmediatamente.
              </p>
            </li>
          </ul>
        </li>
        <li><h3>loop</h3>
          <ul>
            <li>
              <p class="text-justify">
                <b>Valor 0 (por defecto)</b>: El video se reproduce una sola vez.
              </p>
            </li>
            <li>
              <p class="text-justify">
                <b>Valor 1</b>: El video se reproducirá indefinidamente.
              </p>
            </li>
          </ul>
        </li>
        <li><h3>playlist</h3>
          <ul>
            <li>
              <p class="text-justify">
                Una lista de videos separados por coma.
              </p>
            </li>
          </ul>
        </li>
      </ul>
    </article>

    <article class="tema">
      <h2>Geolocalización en HTML5</h2>
      <p class="text-justify" id="demo">
        La API de geolocalización en HTML se utiliza para determinar la localización de un usuario.
      </p>
      <p><button onclick="getLocation()">Probar</button></p>
      <div id="mapholder"></div>

      <h3>Utilizando Geolocalización en HTML</h3>
      <p class="text-justify">
        El método <code>getCurrentPosition()</code> es utilizado para obtener la posición del usuario.
      </p>
      <p class="text-justify">
        <b>Ejemplo 10</b>. Obtener las coordenadas del usuario.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Geolocalización&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Presione el botón para obtener su ubicación.&lt;/p&gt;
    &lt;button onclick="getLocation()"&gt;Presionar&lt;/button&gt;
    &lt;p id="demo"&gt;&lt;/p&gt;
    &lt;script&gt;
      var x = document.getElementById("demo");

      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition);
          } else {
              x.innerHTML = "Su navegador no soporta la geolocalización.";
          }
      }
      function showPosition(position) {
          x.innerHTML = "Latitud: " + position.coords.latitude +
          "&lt;br&gt;Longitud: " + position.coords.longitude;
      }
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Este ejemplo funciona de la siguiente forma:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            El <code>if</code> verifica si el navegador soporta la geolocalización.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Si el navegador soporta la geolocalización se ejecuta el método <code>getCurrentPosition()</code>, si no se despliega un mensaje de error.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Si el método <code>getCurrentPosition()</code> se ejecuta correctamente se devuelve un objeto tipo coordenada a la función que se especificó como parámetro.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La función <code>showPosition()</code> devuelve la Latitud y Longitud.
          </p>
        </li>
      </ul>

      <h3>Manejo de Errores</h3>
      <p class="text-justify">
        El método <code>getCurrentPosition()</code> tiene un segundo parámetro que se utiliza para manejar posibles errores al obtener la geolocalización del usuario.
        Los posibles errores son los siguientes:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            PERMISSION_DENIED
          </p>
        </li>
        <li>
          <p class="text-justify">
            POSITION_UNAVAILABLE
          </p>
        </li>
        <li>
          <p class="text-justify">
            TIMEOUT
          </p>
        </li>
        <li>
          <p class="text-justify">
            UNKNOWN_ERROR
          </p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Manejo de errores en la geolocalización.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Geolocalización&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Presione el botón para obtener su ubicación.&lt;/p&gt;
    &lt;button onclick="getLocation()"&gt;Presionar&lt;/button&gt;
    &lt;p id="demo"&gt;&lt;/p&gt;

    &lt;script&gt;
      var x = document.getElementById("demo");

      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition, showError);
          } else {
              x.innerHTML = "Su navegador no soporta la geolocalización.";
          }
      }
      function showPosition(position) {
          x.innerHTML = "Latitude: " + position.coords.latitude +
          "&lt;br&gt;Longitude: " + position.coords.longitude;
      }
      function showError(error) {
          switch(error.code) {
              case error.PERMISSION_DENIED:
                  x.innerHTML = "El usuario declinó la petición de Geolocalización."
                  break;
              case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "La información de geolocalización no está disponible."
                  break;
              case error.TIMEOUT:
                  x.innerHTML = "La petición del usuario rebasó el tiempo de espera."
                  break;
              case error.UNKNOWN_ERROR:
                  x.innerHTML = "Error desconocido."
                  break;
          }
      }
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h3>Desplegar el resultado en un mapa</h3>
      <p class="text-justify">
        Para desplegar el resultado en un mapa, se necesita accesar a un servicio de mapas, como puede ser Google Maps.
      </p>
      <p class="text-justify">
        <b id="ejemplo12">Ejemplo 12</b>. Mostrar la ubicación del usuario en Google Maps (una imágen estática).
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Geolocalización&lt;/title&gt;
    &lt;script&gt;
      var x = document.getElementById("demo");

      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition, showError);
          } else {
              x.innerHTML = "Su navegador no soporta geolocalización.";
          }
      }

      function showPosition(position) {
          var latlon = position.coords.latitude + "," + position.coords.longitude;

          var img_url = "http://maps.googleapis.com/maps/api/staticmap?center="
          +latlon+"&zoom=14&size=400x300&sensor=false";
          document.getElementById("mapholder").innerHTML = "&lt;img src='"+img_url+"'&gt;";
      }

      function showError(error) {
          switch(error.code) {
              case error.PERMISSION_DENIED:
                  x.innerHTML = "El usuario declinó la petición de Geolocalización."
                  break;
              case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "La información de geolocalización no está disponible."
                  break;
              case error.TIMEOUT:
                  x.innerHTML = "La petición del usuario rebasó el tiempo de espera."
                  break;
              case error.UNKNOWN_ERROR:
                  x.innerHTML = "Error desconocido."
                  break;
          }
      }
    &lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p id="demo"&gt;Presione el botón para obtener su ubicación.&lt;/p&gt;
    &lt;button onclick="getLocation()"&gt;Presionar&lt;/button&gt;
    &lt;div id="mapholder"&gt;&lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        En este ejemplo se hace una petición a la API de Google Maps, pasandole como parámetro las coorenadas obtenidas, y la API devuelve una imágen del mapa correspondiente
        a las coordenadas. La petición se hace mediante: <code>http://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false</code>. Observe
        que la variable <code>latlon</code> contiene las coordenadas obtenidas.
      </p>

      <h3>Desplegar el resultado en un objeto mapa.</h3>
      <p class="text-justify">
        <b>Ejemplo 13</b>. Mostrar la ubicación del usuario en un objeto de Google Maps.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
  &lt;head&gt;
    &lt;title&gt;Geolocalización&lt;/title&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;script src="http://maps.google.com/maps/api/js?sensor=false"&gt;&lt;/script&gt;
    &lt;script&gt;
      var x = document.getElementById("demo");
      function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(showPosition, showError);
          } else {
              x.innerHTML = "Su navegador no soporta geolocalización.";
          }
      }

      function showPosition(position) {
          lat = position.coords.latitude;
          lon = position.coords.longitude;
          latlon = new google.maps.LatLng(lat, lon)
          mapholder = document.getElementById('mapholder')
          mapholder.style.height = '250px';
          mapholder.style.width = '500px';

          var myOptions = {
              center:latlon,zoom:14,
              mapTypeId:google.maps.MapTypeId.ROADMAP,
              mapTypeControl:false,
              navigationControlOptions: {
                style:google.maps.NavigationControlStyle.SMALL
              }
          }

          var map = new google.maps.Map(document.getElementById("mapholder"), myOptions);
          var marker = new google.maps.Marker({
            position:latlon,
            map:map,
            title:"¡Aquí esta!"
          });
      }

      function showError(error) {
          switch(error.code) {
              case error.PERMISSION_DENIED:
                  x.innerHTML = "El usuario declinó la petición de Geolocalización."
                  break;
              case error.POSITION_UNAVAILABLE:
                  x.innerHTML = "La información de geolocalización no está disponible."
                  break;
              case error.TIMEOUT:
                  x.innerHTML = "La petición del usuario rebasó el tiempo de espera."
                  break;
              case error.UNKNOWN_ERROR:
                  x.innerHTML = "Error desconocido."
                  break;
          }
      }
    &lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p id="demo"&gt;Presione el botón para obtener su ubicación.&lt;/p&gt;
    &lt;button onclick="getLocation()"&gt;Presionar&lt;/button&gt;
    &lt;div id="mapholder"&gt;&lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Si desea más información acerca de la API de Google Maps puede consultarla <a target="_blank" href="http://www.w3schools.com/googleAPI/google_maps_basic.asp">aquí</a>.
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

  </section>


  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <script>
    var x=document.getElementById("demo");
    function getLocation()
      {
      if (navigator.geolocation)
        {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
      else{x.innerHTML="Geolocation is not supported by this browser.";}
      }

    function showPosition(position)
      {
      lat=position.coords.latitude;
      lon=position.coords.longitude;
      latlon=new google.maps.LatLng(lat, lon)
      mapholder=document.getElementById('mapholder')
      mapholder.style.height='250px';
      mapholder.style.width='100%';

      var myOptions={
      center:latlon,zoom:14,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      mapTypeControl:false,
      navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
      };
      var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
      var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
      }

    function showError(error)
      {
      switch(error.code)
        {
        case error.PERMISSION_DENIED:
          x.innerHTML="User denied the request for Geolocation."
          break;
        case error.POSITION_UNAVAILABLE:
          x.innerHTML="Location information is unavailable."
          break;
        case error.TIMEOUT:
          x.innerHTML="The request to get user location timed out."
          break;
        case error.UNKNOWN_ERROR:
          x.innerHTML="An unknown error occurred."
          break;
        }
      }
  </script>
</body>
</html>
