<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Desarrollo de Aplicaciones Web</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
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
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">AngularJS</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema" id="intro">
      <h2>Introducción</h2>
      <p class="text-justify">
        <a href="https://angularjs.org/" target="_blank">AngularJS</a> es una extensión de HTML con nuevos atributos, es ideal para aplicaciones de una sola página (SPA's).
      </p>
      <p class="text-justify">
        HTML es fantástico para documentos estáticos, pero no lo es para documentos cuyo contenido es dinámico en aplicaciones Web. AngularJS
        permite extender el vocabulario de HTML para el desarrollo de una aplicación Web, el resultado es un ambiente extraordinariamente expresivo,
        leíble y fácil de desarrollar.
      </p>
      <p class="text-justify">
        AngularJS es <a href="https://www.codeschool.com/screencasts/angularjs-part-1" target="_blank">fácil de aprender</a>.
      </p>
      <p class="text-justify">
        Si se utiliza JavaScript para desarrollar un sitio dinámico, AngularJS es una buena opción.
      </p>
      <ul>
        <li>
          <p class="text-justify">AngularJS ayuda a organizar el código JavaScript</p>
        </li>
        <li>
          <p class="text-justify">AngularJS ayuda a crear sitios "<i><b>responsivos</b></i>".</p>
        </li>
        <li>
          <p class="text-justify">AngularJS funciona muy bien en conjunto con jQuery</p>
        </li>
        <li>
          <p class="text-justify">AngularJS es fácil de probar.</p>
        </li>
        <li>
          <p class="text-justify">AngularJS utiliza el modelo vista-controlador.</p>
        </li>      
      </ul>
    </article>

    <article class="tema">
      <h2>Agregar AngularJS</h2>
      <p class="text-justify">
        AngularJS es una JavaScript framework, es una biblioteca escrita en JavaScript. Es distribuido como un archivo JavaScript y puede ser añadido
        a una página con la etiqueta <code>script</code>.
      </p>
      <pre><code>
  &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
      </code></pre>
      <p class="text-justify">
        AngularJS extiende HTML con directivas <code>ng</code>. La directiva <code>ng-app</code> define una aplicación AngularJS, la directiva <code>ng-model</code>
        une los valores de controles HTML a los datos de una aplicación. La directiva <code>ng-bind</code> une los datos de una aplicación a la vista de HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 1.</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
    &lt;body&gt;
      &lt;div ng-app=""&gt;
        &lt;p&gt;Ingrese algo en la caja:&lt;/p&gt;
        &lt;p&gt;Algo: &lt;input type="text" ng-model="nombre"&gt;&lt;/p&gt;
        &lt;p ng-bind="nombre"&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        AngularJS inicia automáticamente cuando la página se termina de cargar. La directiva <code>ng-app</code> le dice a AngularJS que el elemento <code>&lt;div&gt;</code>
        es el dueño de la aplicación AngularJS. La directiva <code>ng-model</code> une los valores del campo de entrada a la variable de la aplicación <code>nombre</code>.
        La directiva ng-bind une el <b>innerHTML</b> del elemento <code>&lt;p&gt;</code> a la variable de la aplicación <code>nombre</code>.
      </p>
      <p class="text-justify">
        Como pudo ver, las directivas AngularJS son atributos HTML con el prefijo <code>ng</code>. La directiva <code>ng-init</code> inicializa las variables de la aplicación.
      </p>
      <p class="text-justify">
        <b>Nota:</b> Aunque es común ubicar los scripts al final de <code>&lt;body&gt;</code>, se recomienda cargar la biblioteca de AngularJS ya sea en <code>&lt;head&gt;</code>
        o bien al inicio de <code>&lt;body&gt;</code>. Esto es debido a que las llamadas a <code>angular.module</code> solo pueden ser compiladas posteriormente a que la biblioteca
        haya sido cargada.
      </p>
      <p class="text-justify">
        <b>Ejemplo 2.</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
    &lt;body&gt;
      &lt;div ng-app="" ng-init="nombre='Juan'"&gt;
        &lt;p&gt;El nombre es &lt;span ng-bind="nombre"&gt;&lt;/span&gt;&lt;/p&gt;
      &lt;/div&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Expresiones AngularJS</h2>
      <p class="text-justify">
        AngularJS une datos y HTML utilizando <i><b>expresiones</b></i>.
      </p>
      <p class="text-justify">
        Las expresiones de AngularJS se escriben entre llaves dobles: <code>{{ <i>expresion</i> }}</code>, sin embargo también pueden ser escritas dentro de una
        directiva <code>ng-bind="expresion"</code>.
      </p>
      <p class="text-justify">
        AngularJS procesará la expresión y devolverá el resultado exactamente donde la expresión fue escrita. Dichas expresiones, tal como en JavaScript, pueden
        contener caracteres, operadores y variables. Por ejemplo: <code>{{ 5 + 5 }}</code> o <code>{{ nombre + " " + apellido }}</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. Expresiones AngularJS
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 3&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div ng-app=""&gt;
      &lt;p&gt;He aprendido a sumar: {{ 5 + 5 }}&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Naturalmente si se quita el atributo <code>ng-app=""</code> del <code>&lt;div&gt;</code> contenedor de la aplicación, no se realizará la operación matemática y simplemente
        se imprime la expresión como texto.
      </p>
      <p class="text-justify">
        Es importante mencionar que el atributo <code>ng-app=""</code> puede colocarse en otras etiquetas HTML, y no necesariamente en un <code>&lt;div&gt;</code>. En los ejemplos se
        utiliza un <code>&lt;div&gt;</code> como un contenedor de la aplicación.
      </p>
      <p class="text-justify">
        <b>Ejemplo 4</b>. Cambiar atributos CSS
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 4&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;AngularJS procesa la expresión y devuelve el resultado.&lt;/p&gt;
    &lt;p&gt;El color de fondo del parrafo será cualquiera que se escriba en la caja de texto.&lt;/p&gt;
    &lt;div ng-app="" ng-init="colorFondo='white'; colorTexto='black'"&gt;
      &lt;p&gt;Color del texto: &lt;input ng-model="colorTexto"&gt;&lt;/p&gt;
      &lt;p&gt;Color del fondo: &lt;input ng-model="colorFondo"&gt;&lt;/p&gt;
      &lt;h1 style="text-align:center; color:{{colorTexto}}; background-color:{{colorFondo}}"&gt;
        Mis colores son dinámicos gracias a AngularJS.
      &lt;/h1&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Los números en AngularJS son como los números en JavaScript.
      </p>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Operaciones aritméticas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 5&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Calculadora&lt;/h1&gt;
    &lt;div ng-app="" ng-init="x=1; y=5"&gt;
      &lt;p&gt;x = &lt;input type="number" ng-model="x"&gt;&lt;/p&gt;
      &lt;p&gt;y = &lt;input type="number" ng-model="y"&gt;&lt;/p&gt;
      &lt;p&gt;x + y = {{ x + y }}&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 6</b>. Manejo de cadenas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 6&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Registro&lt;/h1&gt;
    &lt;div ng-app="" ng-init="nombre='Juan'; apellido='Perez'"&gt;
      &lt;p&gt;Nombres = &lt;input ng-model="nombre"&gt;&lt;/p&gt;
      &lt;p&gt;Apellidos = &lt;input ng-model="apellido"&gt;&lt;/p&gt;
      &lt;p&gt;Su nombre es: {{ nombre + " " + apellido }}&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 7.</b> Objetos
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 7&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Registro&lt;/h1&gt;
    &lt;div ng-app="" ng-init="persona={nombre:'Juan', apellido:'Perez', edad:'18'}"&gt;
      &lt;p&gt;Nombre: &lt;input ng-model="persona.nombre"&gt;&lt;/p&gt;
      &lt;p&gt;Apellido: &lt;input ng-model="persona.apellido"&gt;&lt;/p&gt;
      &lt;p&gt;Edad: &lt;input type="number" ng-model="persona.edad"&gt;&lt;/p&gt;
      &lt;p&gt;Su nombre es {{ persona.nombre + " " + persona.apellido }} y tiene {{ persona.edad }} años.&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 8.</b> Arreglos
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 8&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Registro&lt;/h1&gt;
    &lt;div ng-app="" ng-init="puntos=[1,10,56,20]"&gt;
      &lt;p&gt;El tercer valor en el arreglo es {{ puntos[2] }}&lt;/p&gt;
    &lt;/div&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Tal como JavaScript, AngularJS puede contener expresiones con caracteres, operadores y variables.
      </p>
      <p class="text-justify">
        A diferencia de las expresiones JavaScript, las expresiones AngularJS se pueden escribir dentro de HTML.
      </p>
      <p class="text-justify">
        Las expresiones de AngularJS no contienen condicionales, ciclos y excepciones.
      </p>
      <p class="text-justify">
        Las expresiones de AngularJS soportan filtros, mientras que las expresiones de JavaScript no.
      </p>
    </article>

    <!-- Módulos -->
    <article class="tema">
      <h2>Módulos en AngularJS</h2>
      <p class="text-justify">
        Los módulos en AngularJS definen una aplicación. Los módulos son contenedores de diferentes partes de una aplicación. El modulo es el contenedor de los controles de la aplicación.
      </p>

      <h3>Sintaxis</h3>
      <p class="text-justify">
        Un modulo se crea utilizando la función <code>angular.module</code>.
      </p>
      <pre><code>
  &lt;div ng-app="miApp"&gt;...&lt;/div&gt;
  &lt;script&gt;
    var app = angular.module("miApp", []);
  &lt;/script&gt;
      </code></pre>
      <p class="text-justify">
        El parámetro <code>miApp</code> se refiere a un elemento HTML en el cual la aplicación se ejecutará. Dicha aplicación en AngularJS puede contener contoles, directivas y filtros entre otros.
      </p>
      <p class="text-justify">
        <b>Nota</b>: El parámetro <code>[]</code> en la declaración del modulo se utiliza para definir módulos dependientes. Si no se incluye el parámetro <code>[]</code>, no se crea un nuevo modulo,
        en realidad se recupera uno ya existente.
      </p>
      <h2>Módulos y Controladores en Archivos Externos</h2>
      <p class="text-justify">
        En las aplicacipnes AngularJS es común colocar los módulos y controladores en archivos externos de JavaScript. La razón de esto es para conseguir un código más limpio y fácil de leer.
      </p>
      <p class="text-justify">
        En el siguiente ejemplo, <code>myApp.js</code> contiene la definición de un modulo y el archivo <code>myCtrl.js</code> contiene el controllador.
      </p>
      <p class="text-justify">
        <b>Ejemplo 9.</b> Modulo y Controladores en archivos externos
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 9&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Modulo y Controlador Externos&lt;/h1&gt;
    &lt;div ng-app="myApp" ng-controller="myCtrl"&gt;
      {{ firstName + " " + lastName }}
    &lt;/div&gt;

    &lt;script src="myApp.js"&gt;&lt;/script&gt;
    &lt;script src="myCtrl.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
    </article>

    <!-- Directivas -->
    <article class="tema" id="directivas">
      <h2>Directivas</h2>

      <p class="text-justify">
        AngularJS tiene un conjunto de directivas las cuales pueden utilizarse para añadir funcionalidad a una aplicación. Si desea ver una referencia completa de ellas, puede
        consultarlas <a href="http://www.w3schools.com/angular/angular_ref_directives.asp" target="_blank">aquí</a>.
      </p>
      <p class="text-justify">
        Adicionalmente, se puede utilizar <code>angular.module</code> para añadir directivas a una aplicación.
      </p>
      <p class="text-justify">
        Las directivas en AngularJS son extensiones de atributos HTML que tienen el prefijo <code>ng-</code>.
      </p>
      <ul>
        <li>
          <p class="text-justify">La directiva <code>ng-app</code> inicializa una aplicación AngularJS. Esta directiva le dice a 
          AngularJS el elemento al que le pertenece la aplicación.</p>
        </li>
        <li>
          <p class="text-justify">La directiva <code>ng-init</code> inicializa los datos de la aplicación.</p>
        </li>
        <li>
          <p class="text-justify">La directiva <code>ng-model</code> une los valores de los controles HTML (input, select, textarea, etc.) a los datos de la aplicación.</p>
        </li>
      </ul>

      <p class="text-justify">
        <b>Ejemplo 10.</b> Directivas
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Ejemplo 10&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Directiva&lt;/h1&gt;

    &lt;div ng-app="" ng-init="nombre='Juan'"&gt;
      &lt;p&gt;Ingrese algo:&lt;/p&gt;
      &lt;p&gt;Nombre: &lt;input type="text" ng-model="nombre"&gt;&lt;/p&gt;
      &lt;p&gt;Usted escribió: {{ nombre }}&lt;/p&gt;
    &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>

      <h2>Enlace de Datos</h2>
      <p class="text-justify">
        La expresión <code>{{ nombre }}</code> en el ejemplo, es una expresión de enlace de datos de AngularJS. El enlace de datos permite unir expresiones de AngularJS con datos de AngularJS.
        <code>{{ nombre }}</code> está unida con <code>ng-model="nombre"</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Dos campos de texto enlazados con directivas <code>ng-model</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;

      &lt;div data-ng-app="" data-ng-init="cantidad=1;precio=5"&gt;

      &lt;h2&gt;Calculadora de costo&lt;/h2&gt;

      Cantidad: &lt;input type="number" ng-model="cantidad"&gt; &lt;br&gt;
      Precio: &lt;input type="number" ng-model="precio"&gt;
      &lt;p&gt;
        *Se agregará el IVA correspondiente.
      &lt;/p&gt;
      &lt;p&gt;Subtotal: $ {{ cantidad * precio }}&lt;/p&gt;
      &lt;p&gt;&lt;b&gt;Total:&lt;/b&gt; $ {{ (cantidad * precio)*1.16 }}&lt;/p&gt;

      &lt;/div&gt;

    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>Repetir Elementos HTML</h2>
      <p class="text-justify">
        La directiva <code>ng-repeat</code> permite repetir un elemento HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 12</b>. Repetir elementos HTML.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 12&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div ng-app="" ng-init="nombres=['Juan','Pedro','Pablo', 'Luis']"&gt;
      &lt;p&gt;Repitiendo elementos HTML con &lt;code&gt;ng-repeat&lt;/code&gt;:&lt;/p&gt;
      &lt;ul&gt;
        &lt;li ng-repeat="x in nombres"&gt;
          {{ x }}
        &lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        La directiva ng-repeat clona los elementos HTML para cada elemento en el arreglo. También puede utilizarse en un arreglo de objetos.
      </p>
      <p class="text-justify">
        <b>Ejemplo 13</b>. Repetir elementos HTML en un arreglo de objetos.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 13&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div ng-app="" ng-init="names=[
      {name:'Jani',country:'Norway'},
      {name:'Hege',country:'Sweden'},
      {name:'Kai',country:'Denmark'}]"&gt;
      &lt;p&gt;Repetiendo elementos HTML con un arreglo de objetos:&lt;/p&gt;
      &lt;ul&gt;
        &lt;li ng-repeat="x in names"&gt;
        {{ x.name + ', ' + x.country }}&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>Directiva ng-app</h2>
      <p class="text-justify">
        La directiva <code>ng-app</code> define el elemento raíz de una aplicación AngularJS. Esta directiva inicializará automáticamente la aplicación cuando la página haya sido cargada.
      </p>

      <h2>Directiva ng-init</h2>
      <p class="text-justify">
        La directiva ng-init define valores iniciales para la aplicación AngularJS. Normalmente no se utiliza esta directiva, en su lugar es mejor utilizar un controlador o modulo para la
        misma función.
      </p>

      <h2>Directiva ng-model</h2>
      <p class="text-justify">
        La directiva <code>ng-model</code> enlaza los valores de los controles HTML (input, select, textarea, etc.) a los datos de la aplicación. La directiva <code>ng-model</code> puede además:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Proveer validación de contenido para los datos de una aplicación (números, email, valores requeridos, etc.).
          </p>
        </li>
        <li>
          <p class="text-justify">
            Indicar un estado para los datos de una aplicación (inválido, error, etc.).
          </p>
        </li>
        <li>
          <p class="text-justify">
            Proveer de clases CSS para elementos HTML.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Unir elementos HTML a formularios HTML.
          </p>
        </li>
      </ul>

      <h2>Crear nuevas directivas</h2>
      <p class="text-justify">
        Adicionalmente a las directivas existentes en AngularJS, el usuario puede crear sus directivas. Las nuevas directivas pueden crearse utilizando la función <code>.directive</code>.
      </p>
      <p class="text-justify">
        Para invocar una nueva directiva se puede utilizar:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Nombre de elemeto HTML
          </p>
        </li>
        <li>
          <p class="text-justify">
            Atributo
          </p>
        </li>
        <li>
          <p class="text-justify">
            Clase
          </p>
        </li>
        <li>
          <p class="text-justify">
            Comentario
          </p>
        </li>
      </ul>
      <p class="text-justify">
        Los nombres de las directivas deben escribir con la primer letra en mayúscula (excepto la primer palabra), <code>miPrimerDirectiva</code>, y al invocarla se deben separadar con
        <code>-</code> y utilizar solo minúsculas, <code>mi-primer-directiva</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 14</b>. Crear nueva directiva, invocar por <b>nombre de elemento HTML</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 14&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body ng-app="myApp"&gt;

    &lt;mi-primer-directiva&gt;&lt;/mi-primer-directiva&gt;

    &lt;script&gt;
      var app = angular.module("myApp", []);
      app.directive("miPrimerDirectiva", function() {
          return {
              template : "&lt;h1&gt;¡Fui concebido dentro de una directiva!&lt;/h1&gt;"
          };
      });
    &lt;/script&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 15</b>. Crear nueva directiva, invocar por <b>atributo</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 15&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body ng-app="myApp"&gt;

    &lt;div mi-primer-directiva&gt;&lt;/div&gt;

    &lt;script&gt;
      var app = angular.module("myApp", []);
      app.directive("miPrimerDirectiva", function() {
          return {
              template : "&lt;h1&gt;¡Fui concebido dentro de una directiva!&lt;/h1&gt;"
          };
      });
    &lt;/script&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 16</b>. Crear nueva directiva, invocar por <b>clase</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 16&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body ng-app="myApp"&gt;

    &lt;div class="mi-primer-directiva"&gt;&lt;/div&gt;

    &lt;script&gt;
      var app = angular.module("myApp", []);
      app.directive("miPrimerDirectiva", function() {
          return {
              restrict: "C",
              template : "&lt;h1&gt;!Fui concebido dentro de una directiva!&lt;/h1&gt;"
          };
      });
    &lt;/script&gt;

    &lt;p&gt;&lt;b&gt;Nota: &lt;/b&gt;Se debe agregar el valor "C" en la propiedad de restrict
      para que sea posible invocarlo por el nombre de la clase.&lt;/p&gt;

  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Nota</b>: Se debe agregar el valor "C" en la propiedad de restrict para que sea posible invocarlo por el nombre de la clase.
      </p>
      <p class="text-justify">
        <b>Ejemplo 17</b>. Crear nueva directiva, invocar por <b>comentario</b>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 17&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body ng-app="myApp"&gt;

    &lt;!-- directive: mi-primer-directiva --&gt;

    &lt;script&gt;
      var app = angular.module("myApp", []);
      app.directive("miPrimerDirectiva", function() {
          return {
              restrict: "M",
              replace: true,
              template : "&lt;h1&gt;!Fui concebido dentro de una directiva!&lt;/h1&gt;"
          };
      });
    &lt;/script&gt;

    &lt;p&gt;&lt;b&gt;Nota: &lt;/b&gt; Se agrega la propiedad &lt;b&gt;replace&lt;/b&gt;para que el comentario
      sea reemplazado y visible.&lt;/p&gt;
    &lt;p&gt;&lt;b&gt;Nota: &lt;/b&gt; Se debe añadir el valor "M" a la propiedad &lt;b&gt;restrict&lt;/b&gt;
      para que poder invocar la directiva desde un comentario.&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Nota: </b> Se agrega la propiedad <b>replace</b>para que el comentario sea reemplazado y visible.
      </p>
      <p class="text-justify">
        <b>Nota: </b> Se debe añadir el valor "M" a la propiedad <b>restrict</b> para que poder invocar la directiva 
        desde un comentario.
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>


    <article class="tema" id="controladores">
      <h2>Controladores</h2>
      <p class="text-justify">
          Las aplicaciones AngularJS se manipulan con controladores. La directiva <code>ng-controller</code> define el controlador de la aplicación.
      </p>
      <p class="text-justify">
        Para añadir un controlador a la aplicación y referir al controlador se utiliza la directiva <code>ng-controller</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 18</b>. Modulo y controlador
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 18&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Controlador&lt;/h1&gt;
    &lt;div ng-app="miApp" ng-controller="miControl"&gt;
      {{ nombre + apellido }}
    &lt;/div&gt;
    &lt;script&gt;
      var app = angular.module("miApp", []);
      app.controller("miControl", function($scope) {
        $scope.nombre = "Juan";
        $scope.apellido = "Perez";
      });
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        La aplicación AngularJS se define como <code>ng-app="miApp"</code>. La aplicación corre dentro de <code>&lt;div&gt;</code>. El atributo <code>ng-controller="miControl"</code> es una directiva
        AngularJS que define un controlador, es una función JavaScript.
      </p>
      <p class="text-justify">
        AngularJS invocará el controlador mediante el objeto <code>$scope</code>.
        <!-- en AngularJS <code>$scope</code> es la aplicación objeto (el dueño de las variables de la aplicación y las funciones). -->
        El <code>$scope</code> es el nexo que une HTML (vista) con JavaScript (controlador), es un objeto con los métodos y propiedades
        a su disposición, además es accesible por la vista y por el controlador.
      </p>
      <p class="text-justify">
        El controlador crea dos propiedades (variables) en el <code>scope</code> (<b>nombre</b> y <b>apellido</b>).
      </p>
      <p class="text-justify">
        La directiva <code>ng-model</code> une los campos de entrada de las propiedades del controlador (<b>nombre</b> y <b>apellido</b>).
      </p>

      <h2>Métodos controladores</h2>
      <p class="text-justify">
        En el ejemplo anterior se mostró un objeto controlador con dos propiedades. Un controlador puede tener métodos (variables y funciones).
      </p>
      <p class="text-justify">
        <b>Ejemplo 19.</b> Métodos en controladores
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 19&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div ng-app="miApp" ng-controller="personaCtrl"&gt;
      Nombre: &lt;input type="text" ng-model="nombre"&gt;&lt;br&gt;
      Apellido: &lt;input type="text" ng-model="apellido"&gt;&lt;br&gt;
      &lt;br&gt;
      Nombre Completo: {{nombreCompleto()}}
    &lt;/div&gt;

    &lt;script&gt;
      var app = angular.module('miApp', []);
      app.controller('personaCtrl', function($scope) {
          $scope.nombre = "Juan";
          $scope.apellido = "Pérez";
          $scope.nombreCompleto = function() {
              return $scope.nombre + " " + $scope.apellido;
          };
      });
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>Controladores en archivos externos</h2>
      <p class="text-justify">
        En aplicaciones extensas, es común almacenar los controladores en archivos externos. El manejo es similar al código JavaScript, por lo que solo es necesario copiar el código
        contenido en la etiqueta <code>&lt;script&gt;</code> en un archivo externo llamado por ejemplo <code>personaCtrl.js</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 20.</b> Controlador en un archivo externo
      </p>
      <p class="text-justify">
        <b>HTML</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 20&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;div ng-app="miApp" ng-controller="personaCtrl"&gt;
      Nombre: &lt;input type="text" ng-model="nombre"&gt;&lt;br&gt;
      Apellido: &lt;input type="text" ng-model="apellido"&gt;&lt;br&gt;
      &lt;br&gt;
      Nombre Completo: {{nombreCompleto()}}
    &lt;/div&gt;

    &lt;script src="personaCtrl.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>AngularJS</b>
      </p>
      <pre><code>
  var app = angular.module('miApp', []);
  app.controller('personaCtrl', function($scope) {
      $scope.nombre = "Juan";
      $scope.apellido = "Pérez";
      $scope.nombreCompleto = function() {
          return $scope.nombre + " " + $scope.apellido;
      };
  });
      </code></pre>
      <p class="text-justify">
        Para el siguiente ejemplo se creará un nuevo archivo controlador y se utilizará en la aplicación.
      </p>
      <p class="text-justify">
        <b>Ejemplo 21</b>. Otro controlador en archivo externo
      </p>
      <p class="text-justify">
        <b>HTML</b>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="utf-8"&gt;
    &lt;title&gt;Ejemplo 21&lt;/title&gt;
    &lt;script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div ng-app="miApp" ng-controller="controladorNombres"&gt;
     &lt;ul&gt;
       &lt;li ng-repeat="x in nombres"&gt;
         {{ x.nombre + ', ' + x.pais }}
       &lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
   &lt;script src="controladorNombres.js"&gt;&lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>AngularJS</b>
      </p>
      <pre><code>
  angular.module('miApp', []).controller('controladorNombres', function($scope) {
     $scope.nombres = [
         {nombre:'Jani',pais:'Norway'},
         {nombre:'Hege',pais:'Sweden'},
         {nombre:'Kai',pais:'Denmark'}
     ];
  });
      </code></pre>
    </article>

    <article class="tema">
      <h2>Select</h2>
      <p class="text-justify">
        AngularJS permite crear listas desplegables a partir de los elementos de un arreglo u objeto. Existen dos directivas
        para ello: <code>n-options</code> y <code>ng-repeat</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 22</b>. Lista desplegable con directiva <code>ng-options</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;

      &lt;div ng-app="myApp" ng-controller="myCtrl"&gt;

        &lt;p&gt;Seleccione una opción&lt;/p&gt;
        &lt;select ng-model="selectedName" ng-options="x for x in names"&gt;
        &lt;/select&gt;

      &lt;/div&gt;

      &lt;script&gt;
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.names = ["Juan", "Pedro", "Carlos"];
        });
      &lt;/script&gt;

      &lt;p&gt;Este ejemplo muestra como llenar una lista utilizando la directiva ng-options.&lt;/p&gt;

    &lt;/body&gt;
  &lt;/html&gt;        
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 23</b>. Lista desplegable con directiva <code>ng-repeat</code>.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;

      &lt;div ng-app="myApp" ng-controller="myCtrl"&gt;

        &lt;p&gt;Seleccione una opción&lt;/p&gt;
        &lt;select&gt;
          &lt;option ng-repeat="x in names"&gt;{{x}}&lt;/option&gt;
        &lt;/select&gt;

      &lt;/div&gt;

      &lt;script&gt;
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.names = ["Juan", "Pedro", "Carlos"];
        });
      &lt;/script&gt;

      &lt;p&gt;Este ejemplo muestra como llenar una lista utilizando la directiva ng-options.&lt;/p&gt;

    &lt;/body&gt;
  &lt;/html&gt;        
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 24</b>. Selección de un objeto a través de una lista desplegable.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;

      &lt;div ng-app="myApp" ng-controller="myCtrl"&gt;

        &lt;p&gt;Seleccione una opción:&lt;/p&gt;

        &lt;select ng-model="selectedCar" ng-options="x for (x, y) in cars"&gt;
        &lt;/select&gt;

        &lt;h1&gt;Usted seleccionó: {{selectedCar.brand}}&lt;/h1&gt;
        &lt;h2&gt;Modelo: {{selectedCar.model}}&lt;/h2&gt;
        &lt;h3&gt;Color: {{selectedCar.color}}&lt;/h3&gt;

        &lt;p&gt;Note que el valor seleccionado corresponde a un objeto.&lt;/p&gt;
      &lt;/div&gt;

      &lt;script&gt;
        var app = angular.module('myApp', []);
        app.controller('myCtrl', function($scope) {
            $scope.cars = {
                opcion1 : {brand : "Ford", model : "Mustang", color : "rojo"},
                opcion2 : {brand : "Fiat", model : "500", color : "blanco"},
                opcion3 : {brand : "Volvo", model : "XC90", color : "negro"}
            }
        });
      &lt;/script&gt;

    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>
    <article class="tema">
      <h2>SQL + Tablas</h2>
      <p class="text-justify">
        Se ha visto que la directiva <code>ng-repeat</code> es idónea para desplegar tablas, además se combinará su 
        funcionalidad con la función <code>$http.get</code> que hace una solicitud al servidor.
      </p>
      <p class="text-justify">
        <b>Ejemplo 25</b>. Desplegando la salida de un query en una tabla HTML.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"&gt;&lt;/script&gt;
    &lt;body&gt;

      &lt;div ng-app="myApp" ng-controller="customersCtrl"&gt; 

        &lt;table&gt;
          &lt;tr ng-repeat="x in names"&gt;
            &lt;td&gt;{{ x.Name }}&lt;/td&gt;
            &lt;td&gt;{{ x.Country }}&lt;/td&gt;
          &lt;/tr&gt;
        &lt;/table&gt;

      &lt;/div&gt;

      &lt;script&gt;
        var app = angular.module('myApp', []);
        app.controller('customersCtrl', function($scope, $http) {
            $http.get("customers_mysql.php")
            .then(function (response) {$scope.names = response.data.records;});
        });
      &lt;/script&gt;

    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Observe que la función <code>$http.get</code> hace una solicitud al servidor, el cuál devuelve la respuesta del archivo 
        <code>customers_mysql.php</code>. En este ejemplo, ese archivo hace una consulta a la base de datos del servidor.
      </p>
    </article>
  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
