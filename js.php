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
        <h1 class="titulo-principal">JavaScript</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        JavaScript es el lenguaje de programación de HTML y la Web. JavaScript es fácil de aprender y es el lenguaje de programación más popular en el mundo.
      </p>
      <p class="text-justify">
        JavaScript es un lenguaje de programación que se utiliza principalmente para crear páginas web dinámicas. Una página web dinámica es aquella que
        incorpora efectos como texto que aparece y desaparece, animaciones, acciones que se activan al pulsar botones y ventanas con mensajes de aviso al
        usuario.
      </p>
      <p class="text-justify">
        Técnicamente, JavaScript es un lenguaje de programación interpretado, por lo que no es necesario compilar los programas para ejecutarlos. En otras
        palabras, los programas escritos con JavaScript se pueden probar directamente en cualquier navegador sin necesidad de procesos intermedios.
      </p>
      <p class="text-justify">
        La integración de JavaScript y HTML/XHTML es muy flexible, ya que existen al menos tres formas para incluir código JavaScript en las páginas web.
      </p>
    </article>

    <article class="tema">
      <h2>Incluir JavaScript en el mismo documento</h2>
      <p class="text-justify">
        El código JavaScript se encierra entre etiquetas <code>&lt;script&gt;</code> y se incluye en cualquier parte del documento. Aunque es correcto incluir
        cualquier bloque de código en cualquier zona de la página, se recomienda definir el código JavaScript dentro de la cabecera del documento (dentro de
        la etiqueta <code>&lt;head&gt;</code>).
      </p>
      <p class="text-justify">
        <b>Ejemplo 1</b>. JavaScript dentro del documento HTML: <code>&lt;head&gt;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;meta charset="utf8"&gt;
      &lt;title&gt;Mi primer proyecto&lt;/title&gt;
      &lt;script type="text/javascript"&gt;
        alert("Un mensaje de prueba");
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Encabezado&lt;/h1&gt;
      &lt;p&gt;Un párrafo de texto.&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 2</b>. JavaScript dentro del documento HTML: <code>&lt;body&gt;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Document&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;p&gt;Con JavaScript podemos mopdificar directamente HTML&lt;/p&gt;
    &lt;script&gt;
      document.write("&lt;h1&gt;This is a heading&lt;/h1&gt;");
      document.write("&lt;p&gt;This is a paragraph&lt;/p&gt;");
    &lt;/script&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <h2>Definir JavaScript en un archivo externo</h2>
      <p class="text-justify">
        Las instrucciones JavaScript se pueden incluir en un archivo externo de tipo JavaScript que los documentos XHTML enlazan mediante la etiqueta <code>&lt;script&gt;</code>.
        Se pueden crear todos los archivos JavaScript que sean necesarios y cada documento XHTML puede enlazar tantos archivos JavaScript como necesite.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. JavaScript en un archivo externo: <code>codigo.js</code>.
      </p>
      <h3>Archivo HTML: <code>ejemplo2.html</code></h3>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Document&lt;/title&gt;
    &lt;script type="text/javascript" src="js/codigo.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;JS en un archivo externo&lt;/h1&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <h3>Archivo JavaScript: <code>codigo.js</code></h3>
      <pre><code>
  alert("Un mensaje de prueba");
      </code></pre>

      <h3>Incluir JavaScript en encabezado</h3>
      <p class="text-justify">
        Este último método es el menos utilizado, ya que consiste en incluir trozos de JavaScript dentro del head de la página:
      </p>
      <pre><code>
  &lt;p onclick="alert('Un mensaje de prueba')"&gt;Un párrafo de texto.&lt;/p&gt;
      </code></pre>
      <p class="text-justify">
        Existe la etiqueta &lt;noscript&gt; que nos permite mostrar un mensaje cuando Javascript está desactivado.
      </p>
  <pre><code>
  &lt;noscript&gt;Esta página requiere JavaScript y está desactivado&lt;/noscript&gt;
  </code></pre>

      <p class="text-justify">
        <b>Ejemplo 4</b>. Función JavaScript en <code>&lt;head&gt;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Fecha del Sistema&lt;/title&gt;
      &lt;script&gt;
        function miFuncion() {
          document.getElementById("demo").innerHTML = Date();
        }
      &lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Mi primer JavaScript&lt;/h1&gt;
      &lt;p&gt;Presione el botón para obtener la fecha del sistema.&lt;/p&gt;
      &lt;p id="demo"&gt;&lt;/p&gt;
      &lt;button type="button" onclick="miFuncion()"&gt;Presione&lt;/button&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Función JavaScript en <code>&lt;body&gt;</code>
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Fecha del Sistema&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Mi primer JavaScript&lt;/h1&gt;
      &lt;p&gt;Presione el botón para obtener la fecha del sistema.&lt;/p&gt;
      &lt;p id="demo"&gt;&lt;/p&gt;
      &lt;button type="button" onclick="miFuncion()"&gt;Presione&lt;/button&gt;
      &lt;script&gt;
        function miFuncion() {
          document.getElementById("demo").innerHTML = Date();
        }
      &lt;/script&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>

      <p class="text-justify">
        <b>Ejemplo 6</b>. Función en archivo JavaScript externo.
      </p>
      <p class="text-justify">
        Archivo HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Fecha del Sistema&lt;/title&gt;
    &lt;script src="script.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Mi primer JavaScript&lt;/h1&gt;
      &lt;p&gt;Presione el botón para obtener la fecha del sistema.&lt;/p&gt;
      &lt;p id="demo"&gt;&lt;/p&gt;
      &lt;button type="button" onclick="miFuncion()"&gt;Presione&lt;/button&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Archivo JavaScript:
      </p>
      <pre><code>
  function myFunction() {
    alert("Archivo JS externo!");
    document.getElementById("demo").innerHTML = Date();
  }
      </code></pre>
      <p class="text-justify">
        JavaScript puede reaccionar a eventos que ocurran en el navegador.
      </p>
      <p class="text-justify">
        <b>Ejemplo 7</b>. Cambiar el contenido del documento.
      </p>
      <p class="text-justify"></p>
        Archivo HTML:
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;h1&gt;Cambiar contenido HTML&lt;/h1&gt;
      &lt;p id="demo"&gt;JavaScript puede cambiar el contenido HTML.&lt;/p&gt;
      &lt;script type="text/javascript" src="js/codigo.js"&gt;&lt;/script&gt;
      &lt;button type="button" onclick="myFunction()"&gt;Presioname!&lt;/button&gt;
    &lt;/body&gt;
&lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Archivo JS:
      </p>
      <pre><code>
  function myFunction() {
    x=document.getElementById("demo");  // Buscar elemento
    x.innerHTML="Nuevo Contenido";    // Cambiar contenido
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 8</b>. Cambiar imágenes en HTML
      </p>
      <p class="text-justify">
        Archivo HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;html lang="es"&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Document&lt;/title&gt;
      &lt;script type="text/javascript" src="js/codigo.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
  &lt;body&gt;
      &lt;img id="miImagen" onclick="cambiarImagen()" src="src/pic_bulboff.gif" width="100" height="180"&gt;
      &lt;p&gt;Presione para encender o apagar.&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Archivo JavaScript:
      </p>
      <pre><code>
  function cambiarImagen() {
    element=document.getElementById('miImagen')
    if (element.src.match("bulbon")) {
      element.src="src/pic_bulboff.gif";
    }
    else {
      element.src="src/pic_bulbon.gif";
    }
  }
      </code></pre>

      <h2>Comentarios en JavaScript</h2>
      <p class="text-justify">
        Los comentarios en JavaScript pueden hacerse por línea o por un bloque de código.
      </p>
      <ul>
        <li>
          <p class="text-justify">Todos los caracteres que se encuentren después de <code>//</code> hasta el final de la línea serán ignorados.</p>
        </li>
        <li>
          <p class="text-justify">Todo el código que se esté entre <code>/*</code> y <code>*/</code> será ignorado, aunque la apertura y la clausura se encuentren
          en líneas diferentes.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 9</b>. Comentario por línea
      </p>
      <pre><code>
  // Escribir a un header:
  document.getElementById("miH1").innerHTML="Bienvenido";

  // Escribir en un párrafo:
  document.getElementById("miP").innerHTML="Éste es mi primer párrafo.";
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 10</b>. Comentario en bloque
      </p>
      <pre><code>
  /*
      El código siguiente escribirá un texto al encabezado y a un párrafo,
      y será el inicio de la página
  */

  document.getElementById("miH1").innerHTML="Bienvenido";
  document.getElementById("miP").innerHTML="Éste es mi primer párrafo.";
      </code></pre>

      <h2>Variables</h2>
      <p class="text-justify">
        Las variables en JS son contenedores de información por lo que no se declaran ni tienen tipo de dato. Para indicar que se utilizará una variable
        se debe utilizar la palabra clave <code>var</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Variables en JS
      </p>
      <pre><code>
  var iva = 16                              // Variable tipo entero
  var total = 234.65                        // Variable tipo flotante
  var letra = ‘c’                           // Variable tipo caracter
  var mensaje = "Bienvenido al sitio Web"   // Variable tipo cadena
  var pregunta = true                       // Variable tipo booleano
  var dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado", "Domingo"];
  var diaSeleccionado = dias[0];            // Lunes
  var otroDia = dias[5];                    // Sábado
      </code></pre>

      <h2>Operadores Matemáticos</h2>
      <p class="text-justify">
        JavaScript tiene las operaciones matemáticas básicas que se encuentran en cualquier lenguaje de programación.
      </p>
      <pre><code>
  var numero1 =10;
  var numero2 = 5;

  resultado = numero1 + numero2;       // suma
  resultado = numero1 - numero2;       // resta
  resultado = numero1 * numero2;       // multiplicación
  resultado = numero1 / numero2;       // división
  resultado = numero1 % numero2;       // residuo
      </code></pre>

      <h2>Funciones</h2>
      <p class="text-justify">
        Para utilizar funciones en JavaScript se debe declarar la función con la palabra clave <code>function</code>. En su declaración se debe especificar si la
        función recibe argumentos y en el contenido de la función se debe especificar si la función devuelve un resultado con la palabra clave <code>return</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 12</b>. Calculo de impuesto. Utilización de variables y funciones con JavaScript
      </p>
      <p class="text-justify">
        Archivo HTML:
      </p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Calcula Precio&lt;/title&gt;
      &lt;script type="text/javascript" src="script/precio.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Calcular los precios&lt;/h1&gt;
      &lt;p&gt;Calculamos el precio total de $210 y 13%&lt;/p&gt;
      &lt;button type="button" onclick="calculaPrecioTotal(210,13)"&gt;
        Calcular
      &lt;/button&gt;
      &lt;p id="resultado"&gt;&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Archivo JS
      </p>
      <pre><code>
  function calculaPrecioTotal(precio, porcentajeImpuestos) {
    var gastosEnvio = 10;
    var precioConImpuestos = (1 + porcentajeImpuestos/100) * precio;
    var precioTotal = precioConImpuestos + gastosEnvio;
    document.getElementById("resultado").innerHTML = precioTotal;
  }
      </code></pre>

      <h2>Estructuras de control de flujo</h2>
      <h3>If</h3>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  if(condición) {
    ...
  }
      </code></pre>
      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  var w = 3;
  if(w >= 2) {
    alert("3 es mayor a 2");
  }
      </code></pre>

      <h3>If - Else</h3>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  if(condición) {
    ...
  }
  else {
    ...
  }
      </code></pre>
      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  var edad = 18;
  if(edad >= 18) {
    alert("Eres mayor de edad");
  }
  else {
    alert("¡Aún no puedes comprar cerveza!");
  }
      </code></pre>

      <h3>Switch</h3>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  switch(n) {
  case 1:
    Bloque 1
    break;
  case 2:
    Bloque 2
    break;
  default:
    Código a ser ejecutado si n es diferente a 1 y 2
  }
      </code></pre>

      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  var d=new Date();
  theDay=d.getDay();

  switch (theDay) {
  case 5:
    document.write("Viernes");
    break;
  case 6:
    document.write("Sabado");
    break;
  case 0:
    document.write("Domingo");
    break;
  default:
    document.write("Trabajar");
  }
      </code></pre>

      <h3>For</h3>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  for(condición inicial; condición final; incremento) {
    Instrucciones
    ...
  }
      </code></pre>
      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  var i=0;
  for (i=0;i<=15;i++) {
    document.write("El numero es  " + i);
    document.write("&lt;br&gt;");
  }
      </code></pre>

      <h3>While</h3>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  while(condición de paro) {
    Instrucciones
    ...
  }
      </code></pre>
      <p class="text-justify">
        Ejemplo:
      </p>
      <pre><code>
  i=1;
  while (i<=8) {
    document.write("i es " + i);
    document.write("&lt;br&gt;");
    i++;
  }
      </code></pre>
    </article>
    <article class="tema">
      <h2>Objetos</h2>
      <p class="text-justify">
        Casi todo en JS puede ser un objeto: cadenas, funciones, arreglos, fechas, etc. En JS los objetos son datos, con propiedades y métodos.
      </p>
      <p class="text-justify">
        <b>Ejemplo</b>: Crear un objeto del usuario.
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;body&gt;
      &lt;script&gt;
        var person=new Object();

        person.firstname="John";
        person.lastname="Doe";
        person.age=50;
        person.eyecolor="blue";

        document.write(person.firstname + " is " + person.age + " years old.");
      &lt;/script&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        Para acceder a una propiedad del objeto se debe hacer referencia al nombre del objeto y al nombre del método dentro del mismo.
      </p>
      <pre><code>
  nombreObjeto.nombrePropiedad
      </code></pre>
      <p class="text-justify">
        Tal y como en Java, los tipos de datos son instancias de objetos que heredan métodos útiles. Por ejemplo:
      </p>
      <pre><code>
  var message="Hello world!";
  var x=message.toUpperCase();
  var y=message.length;
      </code></pre>

      <h2>Formularios de HTML y JavaScript</h2>
      <p class="text-justify">
        <b>Ejemplo 13.</b> Cálculo del factorial de un número ingresado a través de un formulario.
      </p>
      <pre><code>
      &lt!DOCTYPE html&gt
&lthtml lang="en"&gt
&lthead&gt
    &ltmeta charset="UTF-8"&gt
    &ltmeta http-equiv="X-UA-Compatible" content="IE=edge"&gt
    &ltmeta name="viewport" content="width=device-width, initial-scale=1.0"&gt
    &lttitle&gtFactorial Cíclico&lt/title&gt
    &ltscript&gt
        function borrar() {
            document.getElementById("resultado").innerHTML = ""
            console.log("Borrado")
        }

        function factorial() {
            valor = document.getElementById("numero").value
            var x = parseInt(valor)
            console.log("Llamamos a la función cíclica")
            factorialC(x)
            console.log(x)
        }

        function factorialC(x) {
            var f = 1
            for(i=1; i&lt=x; i++) {
                f*=i
                console.log(f)
            }
            salida = x + "! = " + f
            document.getElementById("resultado").innerHTML = salida
        }
    &lt/script&gt
&lt/head&gt
&ltbody&gt
    &lth1&gtFactorial Cíclico&lt/h1&gt
    &ltp&gtIngrese un número entero positivo.&lt/p&gt
    &ltform action=""&gt
        &ltinput type="number" min="0" id="numero"&gt
    &lt/form&gt
    &ltbutton onclick="factorial()"&gtCalcular&lt/button&gt
    &ltbutton onclick="borrar()"&gtBorrar&lt/button&gt
    &ltp id="resultado"&gt&lt/p&gt
&lt/body&gt
&lt/html&gt
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 14.</b> Cálculo de la serie de ULAM, ingresando un número desde un formulario.
      </p>
      <pre><code>
      &lt!DOCTYPE html&gt
&lthtml lang="en"&gt
&lthead&gt
    &ltmeta charset="UTF-8"&gt
    &ltmeta http-equiv="X-UA-Compatible" content="IE=edge"&gt
    &ltmeta name="viewport" content="width=device-width, initial-scale=1.0"&gt
    &lttitle&gtULAM&lt/title&gt
    &ltscript&gt
        function ulam() {
            var y = ""
            // Borrar el contenido del párrafo
            document.getElementById("serie").innerHTML = y

            x = document.getElementById("numero").value
            console.log(x)
            var valor = parseInt(x)
        
            while(valor != 1) {
                if(valor % 2 == 0)
                    valor /= 2
                else
                    valor = 3*valor + 1
                console.log(valor)

                y = y + "&ltbr&gt" + valor
                document.getElementById("serie").innerHTML = y
            }            
        }

        function borrar() {
            // Borrar el contenido del párrafo
            document.getElementById("serie").innerHTML = ""
        }
    &lt/script&gt
&lt/head&gt
&ltbody&gt
    &lth1&gtSerie de ULAM&lt/h1&gt
    &ltp&gtIngrese un número entero positivo.&lt/p&gt
    &ltform action=""&gt
        &ltinput type="number" min="1" id="numero"&gt
    &lt/form&gt
    &ltbutton onclick="ulam()"&gtCalcular&lt/button&gt
    &ltbutton onclick="borrar()"&gtBorrar&lt/button&gt
    &lth3&gtResultado de la serie&lt/h3&gt
    &ltp id="serie"&gtasd&lt/p&gt
&lt/body&gt
&lt/html&gt
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 15.</b> Serie de Fibonacci. Obtener la <i>n</i>-ésima cifra de la serie obteniendo el número <i>n</i>  
        desde un formulario.
      </p>
      <pre><code>
      &lt!DOCTYPE html&gt
&lthtml lang="en"&gt
&lthead&gt
    &ltmeta charset="UTF-8"&gt
    &ltmeta http-equiv="X-UA-Compatible" content="IE=edge"&gt
    &ltmeta name="viewport" content="width=device-width, initial-scale=1.0"&gt
    &lttitle&gtFibonacci Cíclico&lt/title&gt
&lt/head&gt
&ltbody&gt
    &lth1&gtSerie de Fibonacci (versión cíclica)&lt/h1&gt
    &ltp&gtIngrese un número positivo, será la cantidad de cifras de la serie.&lt/p&gt
    &ltform action=""&gt
        &ltinput type="number" min="0" id="numero"&gt
    &lt/form&gt
    &ltbutton onclick="fib()"&gtCalcular&lt/button&gt
    &ltp id="salida"&gt&lt/p&gt
    &ltscript&gt
        function fib() {
            valor = document.getElementById("numero").value
            x = parseInt(valor)
            console.log(x)

            f0=0
            f1=1

            salida = ""

            for(i=0; i&lt=x; i++) {
                f=f0+f1
                f0 = f1
                f1 = f
                console.log(f)
                salida = salida + "&ltbr&gt" + f
            }
            document.getElementById("salida").innerHTML = salida
        }
    &lt/script&gt
&lt/body&gt
&lt/html&gt
      </code></pre>

      <p class="text-justify">
        <b>Ejemplo 16</b>. Uso de formularios y JavaScript
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Document&lt;/title&gt;
      &lt;script type="text/javascript" src="script.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Ingrese sus datos:&lt;/h1&gt;
      &lt;form&gt;
      First name: &lt;input type="text" name="firstname" id="nombre"&gt;&lt;br&gt;
      Last name: &lt;input type="text" name="lastname" id="apellido"&gt;&lt;br&gt;
      Password: &lt;input type="password" name="pwd" id="passwd"&gt;&lt;br&gt;
      &lt;input type="radio" name="sex" id="macho"&gt;Male&lt;br&gt;
      &lt;input type="radio" name="sex" id="hembra"&gt;Female&lt;br&gt;
      &lt;/form&gt;&lt;br&gt;
      &lt;button type="button" onclick="hola()"&gt;Enviar&lt;/button&gt;
      &lt;p id="resultado"&gt;&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JavaScript:
      </p>
      <pre><code>
  function hola() {
    x = document.getElementById("nombre").value;
    x = x + ", " + document.getElementById("apellido").value;

    if (document.getElementById("macho").checked) {
      x = x + ", macho";
    } else if (document.getElementById("hembra").checked) {
      x = x + ", hembra";
    };

    x = x + ", tu contraseña es: " + document.getElementById("passwd").value;
    document.getElementById("resultado").innerHTML = x;
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 17</b>. Formularios y tablas dinámicas.
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!doctype html&gt;
  &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Mi sistema&lt;/title&gt;
      &lt;link rel="stylesheet" type="text/css" href="css/tablasFormulario.css"&gt;
      &lt;script type="text/javascript" src="script/tablas.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Registro de Videojuegos&lt;/h1&gt;
      &lt;form&gt;
        Nombre: &lt;input type="text" id="nombre"&gt;&lt;br&gt;
        Publisher: &lt;input type="text" id="pub"&gt;&lt;br&gt;
        &lt;h2&gt;Consola:&lt;/h2&gt;
        &lt;input type="checkbox" id="360"&gt;XBOX 360&lt;br&gt;
        &lt;input type="checkbox" id="ps3"&gt;PS3&lt;br&gt;
        &lt;input type="checkbox" id="wii"&gt;Wii&lt;br&gt;&lt;br&gt;
        &lt;input type="radio" name="estado" id="nuevo"&gt;Nuevo&lt;br&gt;
        &lt;input type="radio" name="estado" id="usado"&gt;Usado&lt;br&gt;
        &lt;h2&gt;Fecha adquisición:&lt;/h2&gt;
        &lt;input type="date" id="fecha"&gt;
        &lt;h2&gt;Portada&lt;/h2&gt;
          &lt;input type="file" id="portada"&gt;
      &lt;/form&gt;
      &lt;button type="button" onclick="registrar()"&gt;Registrar&lt;/button&gt;
      &lt;table id="consolas"&gt;&lt;/table&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        CSS:
      </p>
      <pre><code>
  body {
    background: #d4a9a9;
    margin: 50px auto 50px auto;
    width: 700px;
  }
  h1 {
    color: gray;
    border: 1px solid white;
    font-family: Helvetica;
    padding: 10px;
    margin-bottom: 50px;
    text-shadow: 2px 2px 5px rgba(0,0,0,0.8);
    box-shadow: 5px 5px 7px rgba(0,0,0,0.8);
  }
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
      </code></pre>
      <p class="text-justify">
        JS:
      </p>
      <pre><code>
        var registro = "&lt;tr&gt;&lt;th&gt;Nombre del Juego&lt;/th&gt;&lt;th&gt;Publisher&lt;/th&gt;&lt;th&gt;Consola&lt;/th&gt;
          &lt;th&gt;Estado&lt;/th&gt;&lt;th&gt;Fecha adquisición&lt;/th&gt;&lt;th&gt;Portada&lt;/th&gt;&lt;/tr&gt;";
        var estilo=0;

        function registrar() {
          /* Validación de que todos los campos del formulario han sido llenados */
          if (document.getElementById("nombre").value == false) {
            alert("Nombre vacío. Debes llenar todos los campos");
          } else if (document.getElementById("pub").value == false) {
            alert("Publisher vacío. Debes llenar todos los campos");
          } else {
            /* Si todos los campos han sido llenados se prosigue con el registro */
            /* Incio de un nuevo renglón en la tabla */
            /* Asignación de estilo independiente a los renglones */
            if (estilo%2 == 0) {
              registro = registro + "&lt;tr class=\"renglon1\"&gt;";
            } else {
              registro = registro + "&lt;tr class=\"renglon2\"&gt;";
            }
            /* Nombre del juego */
            x = document.getElementById("nombre").value;
            registro = registro + "&lt;td&gt;" + x + "&lt;/td&gt;";

            /* Publisher del juego */
            x = document.getElementById("pub").value;
            registro = registro + "&lt;td&gt;" + x + "&lt;/td&gt;";

            /* Finalización del renglón de la tabla */
            registro = registro + "&lt;/tr&gt;";
            document.getElementById("consolas").innerHTML = registro;

            /* Limpiar los campos */
            document.getElementById("nombre").value = "";
            document.getElementById("pub").value = "";
            document.getElementById("360").checked = false;
            document.getElementById("ps3").checked = false;
            document.getElementById("wii").checked = false;
            document.getElementById("nuevo").checked = false;
            document.getElementById("usado").checked = false;
            document.getElementById("fecha").value = false;
            document.getElementById("portada").value = null;

            /* Se alterna el estilo de los renglones */
            estilo = estilo + 1;
          }
        }
      </code></pre>
      <p class="text-justify">
        <b>Ejercicio 17. </b> Extracción de valores de input <code>radio</code>.
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
    &lt;!DOCTYPE html&gt;
    &lt;html lang="es"&gt;
    &lt;head&gt;
      &lt;meta charset="UTF-8"&gt;
      &lt;title&gt;Formulario&lt;/title&gt;
      &lt;script type="text/javascript" src="extraer.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;h1&gt;Formulario tipo Radio&lt;/h1&gt;
      &lt;p&gt;Extracción de valor del imput tipo radio&lt;/p&gt;
      &lt;h2&gt;Elija su genero:&lt;/h2&gt;
      &lt;form action=""&gt;
        &lt;label for="mas"&gt;Masculino:&lt;/label&gt;
        &lt;input type="radio" name="genero" value="Masculino" id="mas"&gt; &lt;br&gt;
        &lt;label for="fem"&gt;Femenino:&lt;/label&gt; 
        &lt;input type="radio" name="genero" value="Femenino" id="fem"&gt; &lt;br&gt;
        &lt;label for="lgbti"&gt;LGBTI:&lt;/label&gt;
        &lt;input type="radio" name="genero" value="LGBTI" id="lgbti"&gt; &lt;br&gt;
        &lt;label for="none"&gt;Ninguno:&lt;/label&gt;
        &lt;input type="radio" name="genero" value="Ninguno" id="none"&gt; &lt;br&gt;
        &lt;label for="otro"&gt;Otro: &lt;/label&gt;
        &lt;input type="radio" name="genero" value="Otro" id="otro"&gt; &lt;br&gt;
      &lt;/form&gt;
      &lt;button onclick="extraccion()"&gt;Seleccionar&lt;/button&gt;
      &lt;p id="resultado"&gt;&lt;/p&gt;
    &lt;/body&gt;
    &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS
      </p>
      <p class="text-justify">
        La primer forma de extraer el valor del selector elegido. 
        El método clásico y manual de extracción.
      </p>
      <pre><code>
    function extraccion() {

    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Primer método: clásico
    for(i=0; i&lt;g.length; i++) {
      if(g[i].checked) {
        genero = g[i].value;
        console.log(genero);
        cad = "&lt;p&gt;Su genero es " + genero + "&lt;/p&gt;";
      }
    }
        
    if(genero!=null)
        y.innerHTML = cad;
    else
        y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;"; 
    }
      </code></pre>
      <p class="text-justify">
        La segunda forma de extraer el valor del selector elegido. Una
        mejora al método clásico.
      </p>
      <pre><code>
    function extraccion() {

    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Segundo método: mejora del clásico
    x = document.querySelector('input[name=genero]:checked');
    if(x != null) {
        genero = x.value;
        console.log(genero) 
        cad = "&lt;p&gt;" + genero + "&lt;/p&gt;";
    }
        
    if(genero!=null)
        y.innerHTML = cad;
    else
        y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;"; 
    }
      </code></pre>
      <p class="text-justify">
        La tercer forma de extraer el valor del selector elegido.
        Una forma más práctica.
      </p>
      <pre><code>
    function extraccion() {

    var g = document.getElementsByName("genero");
    var y = document.getElementById("resultado");
    var cad = "";
    var genero;

    // Tercer método
    z = document.querySelector('input[name=genero]:checked');
    if(z!=null) {
      genero = z.value;
      console.log(genero);
      cad = "&lt;p&gt;Su genero es " + genero + "&lt;/p&gt;";
    }

    if(genero!=null)
        y.innerHTML = cad;
    else
        y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;"; 

    }              
      </code></pre>
      <p class="text-juatify">
        <b>Ejemplo 18.</b> Extracción de valores input <code>checkbox</code>.
      </p>
      <p class="text-juatify">HTML</p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html lang="es"&gt;
  &lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
    &lt;title&gt;Checkbox&lt;/title&gt;
    &lt;script type="text/javascript" src="extraerCheckbox.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;h1&gt;Medio transporte&lt;/h1&gt;
    &lt;p&gt;Seleccione su medio de transporte predilecto.&lt;/p&gt;
    &lt;form action=""&gt;
      &lt;input type="checkbox" name="transporte" value="Automovil" id="auto"&gt;
      &lt;label for="auto"&gt;Automóvil&lt;/label&gt; 
      &lt;br&gt;
      &lt;input type="checkbox" name="transporte" value="Motocicleta" id="moto"&gt;
      &lt;label for="moto"&gt;Motocicleta&lt;/label&gt;
      &lt;br&gt;
      &lt;input type="checkbox" name="transporte" value="Bicicleta" id="bici"&gt;
      &lt;label for="bici"&gt;Bicicleta&lt;/label&gt;
      &lt;br&gt;
      &lt;input type="checkbox" name="transporte" value="Transporte Público" id="trans"&gt;
      &lt;label for="trans"&gt;Transporte Público&lt;/label&gt;
      &lt;br&gt;
      &lt;input type="checkbox" name="transporte" value="Otro" id="otro"&gt;
      &lt;label for="otro"&gt;Otro&lt;/label&gt;
    &lt;/form&gt;
    &lt;button onclick="proceso()"&gt;Enviar&lt;/button&gt;
    &lt;p id="resultado"&gt;&lt;/p&gt;
  &lt;/body&gt;
  &lt;/html&gt;      
      </code></pre>
      <p class="text-justify">
        La primer forma de extraer el valor del selector elegido. 
        El método clásico y manual de extracción.
      </p>
      <pre><code>
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Primer método: clásico
    for(i=0; i&lt;x.length; i++) {
      if(x[i].checked) {
        transporte = x[i].value;
        console.log(transporte);
        cad = cad + "&lt;p&gt;" + transporte + "&lt;/p&gt;";
      }
    }

    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;";
  }
      </code></pre>
      <p class="text-justify">
        La segunda forma de extraer el valor del selector elegido. Una
        mejora al método clásico.
      </p>
      <pre><code>
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Segundo método: mejora del clásico
    for(i of x) {
      if(i.checked) {
        transporte = i.value;
        console.log(transporte);
        cad = cad + "&lt;p&gt;" + transporte + "&lt;/p&gt;";
      }
    }
    
    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;";
  }        
      </code></pre>
      <p class="text-justify">
        La tercer forma de extraer el valor del selector elegido.
        Una forma más práctica.
      </p>
      <pre><code>
  function proceso() {
    x = document.getElementsByName("transporte");
    y = document.getElementById("resultado");
    var cad = "";
    var transporte;

    // Tercer método
    z = document.querySelectorAll('input[name=transporte]:checked');
    for(var v of z) {
      transporte = v.value;
      console.log(transporte);
      cad = cad + "&lt;p&gt;" + transporte + "&lt;/p&gt;";
    }
    
    if(transporte!=null)
      y.innerHTML = cad;
    else 
      y.innerHTML = "&lt;p&gt;Seleccione una opción&lt;/p&gt;";
  }        
      </code></pre>

      <h2>Manejo de Errores: Throw - Try - Catch</h2>
      <p class="text-justify">
        Cuando se ejecuta código JavaScript pueden ocurrir diferentes tipos de errores:
      </p>
      <ul>
        <li>
          <p class="text-justify">errores de dedo del programador,</p>
        </li>
        <li>
          <p class="text-justify">palabras clave mal escritas o no existentes en el navegador,</p>
        </li>
        <li>
          <p class="text-justify">ingreso de datos incorrectos, por el usuario o alguna entidad de software</p>
        </li>
        <li>
          <p class="text-justify">errores imprevistos</p>
        </li>
      </ul>
      <p class="text-justify">
        Cuando ocurre un error, normalmente JavaScript se detiene y genera un mensaje de error. El término técnico de esta situación es: JavaScript arroja un error.
      </p>
      <p class="text-justify">
        El parámetro <code>try</code> permite definir un bloque de código y verificar errores mientras se ejecuta.
      </p>
      <p class="text-justify">
        El parámetro <code>catch</code> permite definir la acción que se llevará a cabo si ocurre un error en el bloque de código definido en <code>try</code>.
      </p>
      <p class="text-justify">
        En JavaScript los parámetros <code>try</code> y <code>catch</code> se escriben en pares.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  try {
    // Líneas de código a verificar
  }
  catch(err) {
    // Manejo de errores en las líneas anteriores
  }
      </code></pre>

      <p class="text-justify">
        <b>Ejemplo 19</b>. Try - Catch
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;script type="text/javascript" src="script/error.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;input type="button" value="View message" onclick="message()" /&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS:
      </p>
      <pre><code>
  var txt="";
  function message() {
    try {
      alret("Welcome guest!");
    }
    catch(err) {
      txt="La página tiene un error\n\n";
      txt+="Descripción del Error: " + err.message + "\n\n";
      alert(txt);
    }
  }
      </code></pre>
      <p class="text-justify">
        El parámetro <code>throw</code> permite crear definir errores al programador, la forma correcta es crear o <b>lanzar una excepción</b>.
      </p>
      <p class="text-justify">
        Si se utiliza en conjunto con <code>try-catch</code> se puede controlar el flujo del programa y generar mensajes de error personalizados.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  throw excepción
      </code></pre>
      <p class="text-justify">
        La excepción puede ser una cadena, numero, booleano u objeto.
      </p>
      <p class="text-justify">
        <b>Ejemplo 20</b>. Verificar el valor ingresado por el usuario.
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
            &lt;meta charset="utf-8"&gt;
            &lt;script type="text/javascript" src="js/error.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
            &lt;h1&gt;JavaScript&lt;/h1&gt;
            &lt;p&gt;Introduzca un número entre 5 y 10:&lt;/p&gt;
            &lt;input id="numero" type="text"&gt;
            &lt;button type="button" onclick="funcion()"&gt;Ingresar&lt;/button&gt;
            &lt;p id="mensaje"&gt;&lt;/p&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS:
      </p>
      <pre><code>
  function funcion() {
    var y=document.getElementById("mensaje");
    y.innerHTML = "";
    try {
      var x=document.getElementById("numero").value;
      if(x=="")    throw "Campo vacío";
      if(isNaN(x)) throw "No es un número";
      if(x>10)     throw "Número mayor";
      if(x<5)      throw "Número menor";
    }
    catch(err) {
      y.innerHTML="Error Capa 8: " + err + ".";
    }
    if (x>=5 && x<=10) {
      y.innerHTML="¡Bravo!, no era tan difícil, ¿o si?";
    }
  }
      </code></pre>
      <p class="text-justify">
        JavaScript puede ser utilizado para validar formularios HTML antes de ser enviados al servidor. Lo típico que se verifica con JS antes de ser enviado puede ser:
      </p>
      <ul>
        <li>
          <p class="text-justify">Campos vacíos</p>
        </li>
        <li>
          <p class="text-justify">Direcciones válidas de correo</p>
        </li>
        <li>
          <p class="text-justify">Fechas válidas</p>
        </li>
        <li>
          <p class="text-justify">Texto en campos numéricos o viceversa.</p>
        </li>
      </ul>
      <p class="text-justify">
        <b>Ejemplo 21</b>. Validar campos de texto.
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Validación formularios&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script type="text/javascript" src="js/validarFormulario.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;form name="miFormulario" action="index.html" onsubmit="return validarFormulario()"
        method="post"&gt;
        Nombre: &lt;input type="text" name="nombre"&gt;
        &lt;input type="submit" value="Submit"&gt;
      &lt;/form&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS:
      </p>
      <pre><code>
  function validarFormulario() {
    var x = document.forms["miFormulario"]["nombre"].value;
    if (x == null || x == "") {
      alert("Debe llenar el campo nombre");
      return false;
    } else {
      alert("Todo bien")
      return true;
    };
  }
      </code></pre>
      <p class="text-justify">
        <b>Ejemplo 22</b>. Validación de dirección de correo electrónico
      </p>
      <p class="text-justify">
        HTML:
      </p>
      <pre><code>
  &lt;!DOCTYPE html&gt;
  &lt;html&gt;
    &lt;head&gt;
      &lt;title&gt;Sistema de Registro&lt;/title&gt;
      &lt;meta charset="utf-8"&gt;
      &lt;script type="text/javascript" src="js/validarMail.js"&gt;&lt;/script&gt;
    &lt;/head&gt;
    &lt;body&gt;
      &lt;form name="miFormulario" action="index.html" onsubmit="return validarMail();" method="post"&gt;
        Email: &lt;input type="text" name="email"&gt;
        &lt;input type="submit" value="Ingresar correo"&gt;
      &lt;/form&gt;
    &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        JS:
      </p>
      <pre><code>
  function validarMail() {
    var x=document.forms["miFormulario"]["email"].value;
    var posArroba=x.indexOf("@");
    var posPunto=x.lastIndexOf(".");

    if (posArroba < 1 || posPunto < posArroba+2 || posPunto+2 >= x.length) {
      alert("Dirección con capacidades diferentes");
      return false;
    }
    else {
      alert("Todo bien");
      return true;
    }
  }
      </code></pre>

    </article>



  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
