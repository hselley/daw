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
        <h1 class="titulo-principal">MySQL</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Introducción</h2>
      <p class="text-justify">
        <a href="http://www.mysql.com/">MySQL</a> es un sistema de gestión de bases de datos relacional, multihilo y multiusuario. Es la base de datos de código abierto más popular del mundo.
        En conjunto con PHP se puede conectar a múltiples bases de datos siendo a su vez el sistema de bases de datos más utilizado con PHP.
      </p>
      <p class="text-justify">
        MySQL es:
      </p>
      <ul>
        <li>
          <p class="text-justify">Un sistema de base de datos utilizado en la Web</p>
        </li>
        <li>
          <p class="text-justify">Un sistema de base de datos que corre en el servidor</p>
        </li>
        <li>
          <p class="text-justify">Es ideal para pequeñas y grandes aplicaciones</p>
        </li>
        <li>
          <p class="text-justify">Es muy rápido, confiable y fácil de utilizar</p>
        </li>
        <li>
          <p class="text-justify">Soporta SQL estándar</p>
        </li>
        <li>
          <p class="text-justify">Es abierto para descargarse y utilizarse</p>
        </li>
        <li>
          <p class="text-justify">Es desarrollado, distribuido y soportado por Oracle</p>
        </li>
        <li>
          <p class="text-justify">Fue nombrado como la hija del co-fundaor Monty Widenius: My</p>
        </li>
      </ul>
      <p class="text-justify">
        Los datos en SQL son almacenados en tablas, una tabla es un conjunto de datos relacionados y consiste de columnas y renglones. Las bases de datos son útiles para almacenar
        información en categorías.
      </p>
    </article>

    <article class="tema">
      <h2>Queries</h2>
      <p class="text-justify">
        Un query es una solicitud o pregunta al manejador de la base de datos. Por medio de un query es posible buscar información específica dentro de la base de datos. Por ejemplo:
      </p>
      <pre><code>
  SELECT Apellido FROM Empleados
      </code></pre>
      <p class="text-justify">
        Este query selecciona todos los registros en la columna "Apellido" de la tabla "Empleados".
      </p>
    </article>

    <article class="tema">
      <h2>Un hecho sobre MySQL</h2>
      <p class="text-justify">
        Una gran cosa acerca de MySQL es que puede ser utilizada para soportar aplicaciones de bases de datos  embebidas, esto podría ocurrir porque muchas personas creen que MySQL
        solamente funciona para manejar pequeños y medianos sistemas cuando la realidad es que grandes empresas como Friendster, Yahoo, Facebook y Google la utilizan.
      </p>
    </article>

    <article class="tema">
      <h2>Conectar a una base de datos MySQL con PHP</h2>
      <p class="text-justify">
        Se deberá utilizar la función PHP <code>mysqli_connect()</code> para abrir una conexión al servidor MySQL.
      </p>
      <p class="text-justify">
        <b>Sintaxis:</b>
      </p>
      <pre><code>
  mysql_connect(host, username, password, dbname);
      </code></pre>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Parámetro</th>
            <th>Regla</th>
            <th>Descripción</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>host</td>
            <td>Opcional</td>
            <td>Nombre del host o IP</td>
          </tr>
          <tr>
            <td>username</td>
            <td>Opcional</td>
            <td>El nombre de usuario de MySQL</td>
          </tr>
          <tr>
            <td>password</td>
            <td>Opcional</td>
            <td>La contraseña de acceso</td>
          </tr>
          <tr>
            <td>bdname</td>
            <td>Opcional</td>
            <td>La base de datos por defecto a utilizar</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">
        Existen más parámetros en la función pero los mostrados son los más importantes para la conexión. Para más información acerca de la función, véase la documentación oficial
        de PHP <a href="http://php.net/manual/en/function.mysql-connect.php">aquí</a>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 1</b>. El siguiente código realiza una conexión a una base de datos utilizando la variable de conexión <code>$con</code>.
      </p>
      <pre><code>
  &lt;?php
    // Crear una conexión
    $con = mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
  ?&gt;
      </code></pre>
      <p class="text-justify">
        La conexión a una base de datos se cierra automáticamente cuando finaliza un script, pero si se desea cerrar la conexión antes se puede utilizar la <code>función mysqli_close()</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 2</b>. Cerrando una conexión con una base de datos.
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_close($con);
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Crear una Base de Datos</h2>
      <p class="text-justify">
        La sentencia <code>CREATE DATABASE</code> se utiliza para crear una base de datos en MySQL, debe agregarse esta sentencia a la función <code>mysqli_query()</code> para
        ejecutar el comando.
      </p>
      <p class="text-justify">
        <b>Ejemplo 3</b>. El siguiente ejemplo crea una base de datos llamada <code>my_db</code>.
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create database
    $sql="CREATE DATABASE my_db";
      if (mysqli_query($con,$sql)) {
    echo "Database my_db created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($con);
    }
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Crear una Tabla</h2>
      <p class="text-justify">
        La sentencia CREATE TABLE crea una tabla en una base de datos, basta con agregar ésta sentencia en la función <code>mysqli_query()</code> para ejecutar el comando.
      </p>
      <p class="text-justify">
        <b>Ejemplo 4</b>. El siguiente ejemplo crea una tabla llamada <code>Personas</code> con tres columnas: <code>Nombre</code>, <code>Apellido</code> y <code>edad</code>.
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Create table
    $sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT);";

    // Execute query
    if (mysqli_query($con,$sql)) {
      echo "Table persons created successfully";
    } else {
      echo "Error creating table: " . mysqli_error($con);
    }
  ?&gt;
      </code></pre>
      <p class="text-justify">
        Cuando se crean campos tipo CHAR se debe especificar manualmente el tamaño máximo del campo.
      </p>
      <p class="text-justify">
        Los tipos de dato especifican lo que el campo en la columna dada contendrá. Para más información acerca de los tipos de datos disponibles en MySQL puede
        <a href="http://www.w3schools.com/sql/sql_datatypes.asp">consultarlo aquí</a>.
      </p>
    </article>

    <article class="tema">
      <h2>Llaves primarias y campos de Auto Incremento</h2>
      <p class="text-justify">
        Cada tabla en una base de datos debería tener un campo llave. La llave primaria es utilizada para identificar los renglones en la tabla. Cada llave primaria debe ser única
        en la tabla, más aún, la llave primaria no puede ser nula dado que el gestor de la base necesita éste valor para localizar un registro.
      </p>
      <p class="text-justify">
        El siguiente ejemplo establece el campo <code>PID</code> como la llave primaria de la tabla. La llave es comúnmente un número de identificación, y es comúnmente utilizado con el
        parámetro <code>AUTO_INCREMENT</code>. Éste parámetro incrementa automáticamente el valor del campo en 1 cada vez que se agrega un registro. Para asegurar que la llave primaria no
        puede dejarse nula, debe agregarse el parámetro <code>NOT NULL</code> en el campo.
      </p>
      <pre><code>
  $sql = "CREATE TABLE Persons (
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    FirstName CHAR(15),
    LastName CHAR(15),
    Age INT
  );";
      </code></pre>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

    <article class="tema">
      <h2>Insertar datos en una Tabla</h2>
      <p class="text-justify">
        La sentencia <code>INSERT INTO</code> se utiliza para añadir registros en una tabla de una base de datos. Es posible utilizarla de dos formas: la primera no especifica el nombre de la
        columna donde el dato será insertado solamente los valores
      </p>
      <pre><code>
  INSERT INTO table_name
  VALUES (value1, value2, value3,...)
      </code></pre>
      <p class="text-justify">
        y la segunda forma especifica el nombre y el valor que será insertado
      </p>
      <pre><code>
  INSERT INTO table_name (column1, column2, column3,...)
  VALUES (value1, value2, value3,...)
      </code></pre>
      <p class="text-justify">
        Anteriormente en un ejemplo se creó una tabla llamada <code>Personas</code> con tres columnas: <code>Nombre</code>, <code>Apellido</code> y <code>Edad</code>. Utilizaremos la misma
        tabla para añadir registros.
      </p>
      <p class="text-justify">
        <b>Ejemplo 5</b>. Añadir dos registros a la tabla <code>Personas</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
      VALUES ('Peter', 'Griffin',35);");

    mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age)
      VALUES ('Glenn', 'Quagmire',33);");

    mysqli_close($con);
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Insertar datos a una base de datos desde un Formulario</h2>
      <p class="text-justify">
        A continuación haremos un formulario en HTML que agrega nuevos registros en la tabla <code>Personas</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 6</b>. Agregar registros a una base de datos desde un formulario HTML
      </p>
      <p class="text-justify">
        HTML
      </p>
      <pre><code>
  &lt;html&gt;
  &lt;body&gt;
    &lt;form action="insert.php" method="post"&gt;
      Firstname: &lt;input type="text" name="firstname"&gt;
      Lastname: &lt;input type="text" name="lastname"&gt;
      Age: &lt;input type="text" name="age"&gt;
      &lt;input type="submit"&gt;
    &lt;/form&gt;
  &lt;/body&gt;
  &lt;/html&gt;
      </code></pre>
      <p class="text-justify">
        PHP: insert.php
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // escape variables for security
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $sql="INSERT INTO Persons (FirstName, LastName, Age)
      VALUES ('$firstname', '$lastname', '$age');";

    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    echo "1 record added";

    mysqli_close($con);
  ?&gt;
      </code></pre>
      <p class="text-justify">
        En el ejemplo anterior, cuando el usuario presiona el botón <code>Submit</code>, los datos son enviados al script <code>insert.php</code>. El script se conecta a la base de
        datos y recibe los valores del formulario a través de la variable <code>$_POST</code>. Posteriormente la función <code>mysqli_query()</code> ejecuta la sentencia <code>INSERT INTO</code>
        y agrega un nuevo registro a la tabla <code>Personas</code>.
      </p>
    </article>

    <article class="tema">
      <h2>Seleccionar datos en una tabla de una base de datos</h2>
      <p class="text-justify">
        La sentencia <code>SELECT</code> se utiliza para seleccionar datos en una base. Para hacer que PHP ejecute la sentencia debemos utilizar nuevamente la función <code>mysqli_query()</code>.
        Ésta función es utilizada para enviar un query a la conexión con la base de datos MySQL.
      </p>
      <p class="text-justify">
        <b>Ejemplo 7</b>. Selecciona todos los datos almacenados en la tabla <code>Personas</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM Persons;");
    while($row = mysqli_fetch_array($result)) {
      echo $row['FirstName'] . " " . $row['LastName'];
      echo "&lt;br&gt;";
    }

    mysqli_close($con);
  ?&gt;
      </code></pre>
      <p class="text-justify">
        Este ejemplo almacena los datos devueltos por la función <code>mysqli_query()</code> en la variable <code>$result</code>. Posteriormente se utiliza la función <code>mysql_fetch_array()</code>
        para devolver el primer renglón como un arreglo de todos los registros obtenidos. Cada llamada a la función <code>mysqli_fetch_array()</code> devuelve el siguiente renglón del conjunto
        de datos. Para imprimir el valor de cada renglón se utiliza la variable <code>$row ($row[‘FirstName’]</code> y <code>$row[‘LastName’])</code>.
      </p>
    </article>

    <article class="tema">
      <h2>Desplegar los resultados en una tabla</h2>
      <p class="text-justify">
        El siguiente ejemplo despliega el resultado del query anterior y lo despliega en una tabla HTML.
      </p>
      <p class="text-justify">
        <b>Ejemplo 8</b>. Desplegar el contenido de una base de datos en una tabla HTML
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM Persons;");
    echo "&lt;table border='1'&gt;
    &lt;tr&gt;
    &lt;th&gt;Firstname&lt;/th&gt;
    &lt;th&gt;Lastname&lt;/th&gt;
    &lt;/tr&gt;";

    while($row = mysqli_fetch_array($result)) {
      echo "&lt;tr&gt;";
      echo "&lt;td&gt;" . $row['FirstName'] . "&lt;/td&gt;";
      echo "&lt;td&gt;" . $row['LastName'] . "&lt;/td&gt;";
      echo "&lt;/tr&gt;";
    }

    echo "&lt;/table&gt;";

    mysqli_close($con);
  ?&gt;
      </code></pre>
      <p class="text-justify">
        La salida del código anterior será similar a esto:
      </p>
      <table border="1">
        <tr>
          <th>Firstname</th>
          <th>Lastname</th>
        </tr>
        <tr>
          <td>Glenn</td>
          <td>Quagmire</td>
        </tr>
        <tr>
          <td>Peter</td>
          <td>Griffin</td>
        </tr>
      </table>
    </article>

    <article class="tema">
      <h2>El filtro WHERE</h2>
      <p class="text-justify">
        Este filtro sirve para extraer sólo los registros que cumplan con cierto criterio específico.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  SELECT column_name(s) FROM table_name WHERE column_name operator value
      </code></pre>
      <p class="text-justify">
        Al igual que en los casos anteriores, se utiliza la función <code>mysqli_query()</code>. Esta función envía el query a la conexión con la base de datos.
      </p>
      <p class="text-justify">
        <b>Ejemplo 9</b>. Filtrar resultados con <code>WHERE</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM Persons WHERE FirstName='Peter';");
    while($row = mysqli_fetch_array($result)) {
      echo $row['FirstName'] . " " . $row['LastName'];
      echo "&lt;br&gt;";
    }
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Ordenar resultados con <code>ORDER BY</code></h2>
      <p class="text-justify">
        La instrucción <code>ORDER BY</code> se utiliza para ordenar un conjunto de datos, lo hace en orden ascendente por defecto. Si se desea que los resultados se ordenen en forma
        decreciente se puede utilizar el parámetro <code>DESC</code>.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  SELECT column_name(s) FROM table_name ORDER BY column_name(s) ASC|DESC
      </code></pre>
      <p class="text-justify">
        El siguiente ejemplo selecciona todos los datos almacenados en la tabla <code>Personas</code> y los ordena por la columna <code>Age</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 10</b>. Ordenar resultados con <code>ORDER BY</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT * FROM Persons ORDER BY age;");
    while($row = mysqli_fetch_array($result)) {
      echo $row['FirstName'];
      echo " " . $row['LastName'];
      echo " " . $row['Age'];
      echo "&lt;br&gt;";
    }

    mysqli_close($con);
  ?&gt;
      </code></pre>
      <p class="text-justify">
        Es posible ordenar los resultados por más de una columna. Cuando se ordenan por más de una columna, la segunda es utilizada solamente si los valores de la primera son iguales:
      </p>
      <pre><code>
  SELECT column_name(s) FROM table_name ORDER BY column1, column2
      </code></pre>
    </article>

    <article class="tema">
      <h2>Cambiar datos en una Base de Datos</h2>
      <p class="text-justify">
        La sentencia <code>UPDATE</code> se utiliza para cambiar el contenido de un registro en una tabla.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  UPDATE table_name SET column1=value, column2=value2,...
  WHERE some_column=some_value
      </code></pre>
      <p class="text-justify">
        Nótese la posición de la sentencia <code>WHERE</code> en la sintaxis de <code>UPDATE</code>, la instrucción <code>WHERE</code> especifica en cual(es) registro(s) será(n) actualizado(s).
        Para que este query se ejecute a través de PHP habrá que utilizar la función <code>mysqli_query()</code> en la conexión con la base MySQL.
      </p>
      <p class="text-justify">
        La tabla de ejemplo que hemos creado anteriormente es la siguiente:
      </p>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Peter</td>
            <td>Grifin</td>
            <td>35</td>
          </tr>
          <tr>
            <td>Glenn</td>
            <td>Quagmire</td>
            <td>33</td>
          </tr>
        </tbody>
      </table>
      <p class="text-justify">
        El código del ejemplo a continuación actualizará datos de la tabla.
      </p>
      <p class="text-justify">
        <b>Ejemplo 11</b>. Cambiando el contenido de un registro con <code>UPDATE</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con,"UPDATE Persons SET Age=36
      WHERE FirstName='Peter' AND LastName='Griffin';");
    mysqli_close($con);
  ?&gt;
      </code></pre>
    </article>

    <article class="tema">
      <h2>Borrar datos de una Base de Datos</h2>
      <p class="text-justify">
        La sentencia <code>DELETE FROM</code> se utiliza para borrar registros de una tabla en una base de datos.
      </p>
      <p class="text-justify">
        Sintaxis:
      </p>
      <pre><code>
  DELETE FROM table_name WHERE some_column = some_value
      </code></pre>
      <p class="text-justify">
        Nótese que la palabra clave <code>WHERE</code> es parte de la sintaxis de <code>DELETE</code>, y sirve para especificar que registro o registros serán borrados. Si se omite la
        palabra clave <code>WHERE</code>, todos los registros de la tabla serán borrados.
      </p>
      <p class="text-justify">
        El siguiente ejemplo se borran todos los registros en la tabla <code>Persons</code> cuyo primer nombre sea <code>Griffin</code>.
      </p>
      <p class="text-justify">
        <b>Ejemplo 12</b>. Borrar registros de una tabla con <code>DELETE</code>
      </p>
      <pre><code>
  &lt;?php
    $con=mysqli_connect("example.com","peter","abc123","my_db");

    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    mysqli_query($con,"DELETE FROM Persons WHERE LastName='Griffin';");
    mysqli_close($con);
  ?&gt;
      </code></pre>
    </article>

  </section>
</body>
</html>
