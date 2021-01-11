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
        <h1 class="titulo-principal">Git</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Git</h2>
      <img src="img/git-black.gif" alt="Git" class="imgcenter img-rounded img-responsive" width="200px">
      <p class="text-justify">
        <a href="https://git-scm.com/" target="_blank">Git</a> es un sistema de control de versiones de software libre diseñado para manejar desde proyectos pequeños hasta
        muy grandes con rapidez y eficiencia.
      </p>
      <p class="text-justify">
        Git es <a href="https://git-scm.com/documentation" target="_blank">facil de aprender</a> y es liviano con rápido desempeño.
        <a href="https://git-scm.com/about/small-and-fast" target="_blank">Supera a software similares</a> como Subversion, CVS, Perforce y ClearCase gracias a características
        como manejo de ramas locales, areas de "staging" y múltiples flujos de trabajo.
      </p>
      <p class="text-justify">
        Git realiza un control de versiones del código, esto quiere decir que almacena el código escrito en todas sus veriones haciendo un registro de los cambios realizados,
        cuando y quien los hizo. Es posible además volver a un estado anterior del código. Git realiza un registro de los cambios en el código y almacena un <code>snapshot</code>
        del código pudiendo regresar a una versión previa con facilidad.
      </p>
      <p class="text-justify">
        Aquí puede descargar la versión de Git que corresponda para su sistema:
      </p>
      <ul>
        <li><a href="http://lab.anahuac.mx/~hselley/Git-2.12.2.2-64-bit.exe" target="_blank">Windows</a></li>
        <li><a href="http://lab.anahuac.mx/~hselley/git-2.10.1-intel-universal-mavericks.dmg" target="_blank">macOS</a></li>
      </ul>
    </article>

    <article class="tema">
      <h2>Mini Tutorial Git</h2>
      <h3>Estados de Git</h3>
      <p class="text-justify">
        Git tiene tres estados para el código:
      </p>
      <ol>
        <li>
          <p class="text-justify"><b>Working Directory</b>: El directorio de trabajo, lugar donde se encuentra el código que estamos escribiendo.</p>
        </li>
        <li>
          <p class="text-justify"><b>Staging Area</b>: Archivos de código listos para ser llevados al repositorio.</p>
        </li>
        <li>
          <p class="text-justify"><b>Respository</b>: Archivos dentro del repositorio.</p>
        </li>
      </ol>

      <h3>Configuración inicial de Git</h3>
      <p class="text-justify">
        <a href="https://git-scm.com/" target="_blank">Git</a> está disponible para instalar en Windows, Linux y macOS. Descarge e instale la versión que
        corresponda para su sistema operativo.
      </p>
      <p class="text-justify">
        Una vez instalado, puede acceder a Git a través de la terminal en Linux y macOS o bien a través de GitBash en Windows.
      </p>
      <p class="text-justify">
        Recién instalado Git, es necesario configurar el nombre y correo del usuario. El siguiente comando asignará el nombre de usuario, este nombre es el
        que quedará registrado en cada commit que se haga en el repositorio.
      </p>
      <pre><code>
  $ git config --global user.name "Juan Perez"
      </code></pre>
      <p class="text-justify">
        Si ejecuta el comando sin argumentos, mostrará el nombre que se encuentra configurado actualmente:
      </p>
      <pre><code>
  $ git config --global user.name
      </code></pre>
      <p class="text-justify">
        Para registrar el correo del usuario el proceso es similar, el comando es el siguiente:
      </p>
      <pre><code>
  $ git config --global user.email "juan.perez@correo.com"
      </code></pre>
      <p class="text-justify">
        Si ejecuta el comando sin argumentos, mostrará el correo que se encuentra configurado actualmente:
      </p>
      <pre><code>
  $ git config --global user.email
      </code></pre>
      <p class="text-justify">
        La terminal/WindowsBash puede mostrar los resultados de Git en colores, esto facilita su lectura. Para habilitar esta característica basta con ejecutar
        el comando:
      </p>
      <pre><code>
  $ git config --global color.ui true
      </code></pre>
      <p class="text-justify">
        Para ver la configuración actual de Git, ejecute el siguiente comando:
      </p>
      <pre><code>
  $ git config --global --list
      </code></pre>
      <pre><code>
  $ cat .gitconfig
      </code></pre>

      <h3>Comenzando con Git</h3>
      <p class="text-justify">
        El comando <code>git help</code> muestra información del manual de git para algún comando específico.
      </p>
      <pre><code>
  $ git help <em>comando</em>
      </code></pre>
      <p class="text-justify">
        El comando <code>git init</code> inicializa el proyecto. Indica a Git que este es el "Working Directory", que este directorio tiene el código que habrá
        de guardarse en el repositorio. Debe usar este comando cada que comienza un proyecto nuevo.
      </p>
      <pre><code>
  $ git init
      </code></pre>
      <p class="text-justify">
        El comando <code>git stauts</code> muestra el estado actual del repositorio.
      </p>
      <pre><code>
  $ git status
      </code></pre>

      <h3>Añadir archivos al Staging Area</h3>
      <p class="text-justify">
        Para añadir archivos al Staging Area se usa el comando git add. Puede agregarse un archivo o varios a la vez.
      </p>
      <p class="text-justify">
        El siguiente comando añade el archivo file.txt al staging:
      </p>
      <pre><code>
  $ git add file.txt
      </code></pre>
      <p class="text-justify">
        El siguiente comando añade todos los archivos en el directorio actual:
      </p>
      <pre><code>
  $ git add -A
      </code></pre>

      <h3>Añadir archivos al Repository</h3>
      <p class="text-justify">
        Para añadir archivos al Repository se utiliza el comando <code>git commit</code>. Este comando permite agregar un mensaje, el cual nos permite
        especificar el cambio que hemos realizado en el código. Este mensaje es para nosotros mismos como desarrolladores, ya que en un futuro que
        consultemos los cambios, podremos saber con precisión que cambio fue realizado en esa etapa del desarrollo del código. Por esa razón se recomienda
        que el mensaje sea claro y conciso.
      </p>
      <pre><code>
  $ git commit -m "Mensaje claro y conciso que describe el cambio en el código"
      </code></pre>
      <p class="text-justify">

      </p>
      <p class="text-justify">
        Una vez que se haga algún cambio en el código o se agreguen archivos, haga un <code>git status</code> y este indicará que el código en el <em>Working Directory</em>
        difiere del que se encientra en el <em>Repository</em>. Este será el momento para hacer un <code>git add</code> para los archivos modificados y un
        <code>git commit</code> nuevamente.
      </p>
      <p class="text-justify">
        Es posible utilizar el comando <code>git commit</code> sin más argumentos. Esto llevará los cambios del Staging Area al Repository, pero dado que no se especificó un
        mensaje, se abrirá el editor por defecto en el sistema (<code>vi</code> en los sistemas *NIX) para escribir el mensaje correspondiente para el <em>commit</em>.
      </p>

      <h3>Bitácora de Cambios</h3>
      <p class="text-justify">
        Uno de las grandes ventajas de utiliar Git es que guarda un registro de los cambios y un <code>snapshot</code> del código en el momento del <code>commit</code>.
        Para ver el registro se utiliza el comando <code>git log</code>.
      </p>
      <pre><code>
  $ git log
      </code></pre>

      <h3>Ver estados anteriores del código</h3>
      <p class="text justify">
        El comando <code>git checkout</code> permite ver una versión específica del código para la ocurrencia de un <em>commit</em> específico. Se dice que este comando
        permite "<em>viajar en el tiempo</em>" del código. Este comando requiere de un identificador SHA (Secure Hash Algorithm) del <em>commit</em>, el cual podemos ver
        en la bitácora. Por ejemplo:
      </p>
      <pre><code>
  $ git checkout [&ltcommit&gt]
      </code></pre>
      <p class="text justify">
        Este comando llevará el código al estado en el que se encontraba al momento de haber hecho el coommit correspondiente al ID. De esta forma podremos examinar el
        código en ese momento y llevar a cabo cualquier acción que deseemos con el.
      </p>
      <p class="text justify">
        Si desearamos viajar nuevamente a otro estado anterior del código podríamos hacerlo  con <code>git chechout ID</code>, de acuerdo al ID específico a donde quisieramos
        ir. Por otro lado, si quisieramos regresar al último commit realizado (antes del primer <code>git checkout</code>), basta con escribir:
      </p>
      <pre><code>
  $ git checkout master
      </code></pre>

      <h3>Regresar a estados anteriores del código.</h3>
      <p class="text justify">
        Una de las funcionalidades de Git es que permite ver y regresar a estados anteriores del código. Esto es útil por si algún commit tuviera un error peligroso o
        cambios no deseados. Utilice esta instrucción con precaución.
      </p>
      <p class="text justify">
        Existen cinco tipos de <code>reset</code>: <code>soft</code>, <code>mixed</code>, <code>hard</code>, <code>merge</code> y <code>keep</code>. A continuación se
        describne los más comunes:
      </p>
      <ol>
        <li>
          <b>soft:</b> Mantiene los cambios de nuestros archivos intacto, simplemente es para que Git tenga presente que está en otro <em>commit</em>.
        </li>
        <li>
          <b>mixed:</b> Mantiene nuestros archivos, pero limpia el index de git de las cambios realizadas.
        </li>
        <li>
          <b>hard:</b> Elimina todo los cambios que tenemos en nuestros archivos para dejarlo exactamente igual que en el repositorio.
        </li>
      </ol>
    </article>

    <article class="tema">
      <h2>GitHub</h2>
      <img src="img/github.png" alt="GitHub" class="imgcenter img-rounded img-responsive" width="200px">
      <p class="text-justify">
        <a href="https://github.com/" target="_blank">GitHub</a> es una plataforma de desarrollo colaborativo para alojar proyectos utilizando el sistema de control
        de versiones Git. Utiliza el framework Ruby on Rails por GitHub, Inc. (anteriormente conocida como Logical Awesome).
      </p>
      <p class="text-justify">
        GitHub es una plataforma de desarrollo inspirada en su forma de trabajo. Usted puede almacenar y revisar código, administrar proyectos
        y construir software desde código abierto hasta empresarial junto a millones de desarrolladores.
      </p>
      <p class="text-justify">
        Desde enero de 2010, opera bajo el nombre de GitHub, Inc. El código se almacena de forma pública, aunque también se puede hacer de forma privada,
        creando una cuenta de pago.
      </p>
      <p class="text-justify">
        GitHub es un sitio que crea una comunidad de desarrolladores, se puede decir que es la red social de los desarrolladores.
      </p>
    </article>

    <article class="tema">
      <h2>MiniTutorial Git + GitHub</h2>

      <h3>Clonar un repositorio</h3>
      <p class="text justify">
        Si deseamos descargar todos los archivos de código de un proyecto que se encuentra en GitHub, podemos hacer una copia a través del comando:
      </p>
      <pre><code>
  $ git clone <em>URL</em>
      </code></pre>
      <p class="text justify">Este comando es útil si nos interesa obtener el código y no necesariamente hacer contribuciones.</p>

      <h3>Manipular repositorios remotos</h3>
      <p class="text justify">
        Para vincular un proyecto de código local a un repositorio remoto en GitHub se utiliza el comando <em>git remote</em>.
      </p>
      <pre><code>
  $ git remote add origin <em>URL_Repo</em>
      </code></pre>
      <p class="text justify">
        Este comando establecerá un vinculo entre el código del repositorio local <em>origin</em> con el repositorio remoto que se encuentra en GitHub a
        través de <em>URL_Repo</em>.
      </p>
      <p class="text justify">
        El siguiente comando mostrará si existe un vinculo entre el repositorio local y uno remoto:
      </p>
      <pre><code>
  $ git remote -v
      </code></pre>
      <p class="text justify">
        El siguiente comando permite eliminar el vinculo que exista entre el repositorio local y remoto:
      </p>
      <pre><code>
  $ git remote remove origin
      </code></pre>
      <p class="text-justify">
        Se puede comprobar el efecto de estas operaciones con el comando <code>git remote -v</code>.
      </p>
      <p class="text-justify">
        El comando <code>git push</code> permite subir el código que se encuentra en el repositorio local al repositorio remoto en GitHub.
      </p>
      <pre><code>
  $ git push origin master
      </code></pre>
      <p class="text-justify">
        El comando solicitará el <em>username</em> y <em>password</em> de la cuenta de GitHib donde se encuentra el repositorio remoto.
      </p>
      <p class="text-justify">
        El comando <code>git push origin master</code> puede ejecutarse cada vez que se hagan cambios en el código, de manera que los repositorios local y
        remoto se encuentren en sincronía.
      </p>
      <p class="text-justify">
        Tenga en cuenta que este comando sincroniza la rama <em>master</em> del repositorio local con el repositorio remoto en GitHub.
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
