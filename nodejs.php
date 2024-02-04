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
        <h1 class="titulo-principal">Node.js</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
      Ideado como un entorno de ejecución de JavaScript orientado a eventos asíncronos, Node.js está 
      diseñado para crear aplicaciones network escalables. En el siguiente ejemplo de <code>"hola mundo"</code>, 
      pueden atenderse muchas conexiones simultáneamente. Por cada conexión, se activa la devolución de 
      llamada o <i>callback</i>, pero si no hay trabajo que hacer, Node.js se dormirá.
      </p>
      <pre><code>
    const http = require('http');

    const hostname = '127.0.0.1';
    const port = 3000;

    const server = http.createServer((req, res) =&gt; {
    res.statusCode = 200;
    res.setHeader('Content-Type', 'text/plain');
    res.end('Hola Mundo');
    });

    server.listen(port, hostname, () =&gt; {
    console.log(`El servidor se está ejecutando en http://${hostname}:${port}/`);
    });      
      </code></pre>
      <p class="text-justify">
      </p>
      <p class="text-justify">
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

  </section>
</body>
</html>
