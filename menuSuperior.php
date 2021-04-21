<?php
  include("urlListaCalificaciones.php");
 ?>
 <!-- Barra superior de navegación -->
 <nav class="navbar navbar-inverse navbar-static-top" role="navigation" data-spy="affix" data-offset-top="197">
   <div class="container">
     <div class="navbar-header" id="logo">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
         <span class="sr-only">Desplegar / Ocultar Menú</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a href="index.php" class="navbar-brand">DAW</a>
     </div>
     <!-- Inicia Menú-->
     <div class="collapse navbar-collapse" id="navegacion-fm">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="index.php">Inicio</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
             Contenido <span class="caret"></span>
           </a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="usabilidad.php">Usabilidad</a></li>
             <li><a href="html.php">HTML</a></li>
             <li><a href="css.php">CSS</a></li>
             <li><a href="js.php">JavaScript</a></li>
             <li><a href="php.php">PHP</a></li>
             <li><a href="mysql.php">MySQL</a></li>
             <li><a href="bootstrap.php">BootStrap</a></li>
             <li><a href="git.php">Git</a></li>
             <li><a href="jQuery.php">jQuery</a></li>
             <li><a href="angularjs.php">Angular JS</a></li>
             <li><a href="ajax.php">AJAX</a></li>
             <li><a href="json.php">jSON</a></li>
           </ul>
         </li>
         <li><a href="contenidoAdicional.php">Contenido Adicional</a></li>
         <li><a href="ejemplosAdicionales.php">Ejemplos Adicionales</a></li>
         <li class="dropdown">
           <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
             Más <span class="caret"></span>
           </a>
           <ul class="dropdown-menu" role="menu">
             <li><a href="<?php echo $url; ?>" target="_blank">Lista de Calificaciones</a></li>
             <li><a href="practicas.php">Prácticas</a></li>
             <li><a href="proyectos.php">Proyectos Finales</a></li>
             <li><a href="link.php">Enlaces de Interés</a></li>
             <li><a href="about.php">Acerca De ...</a></li>
           </ul>
         </li>
       </ul>
     </div>
   </div>
 </nav>
