<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Programación para Internet</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">
  <link rel="stylesheet" href="../css/iconos.css">
  <style>
    table > thead > tr > td {
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Aqui va la cabecera -->
    <div class="container-fluid cabecera" style="height:200px;">
      <div class="container">
        <h1 class="titulo-principal">Proyecto Final</h1>
        <p></p>
      </div>
    </div>

  <!-- Barra superior de navegación -->
  <?php include("menuSuperior.php"); ?>

  <section class="main container">

    <article class="tema">
      <h2>Lineamientos</h2>
      <p class="text-justify">
        El proyecto final consistirá en desarrollar una tienda en línea.
      </p>
      <p class="text-justify">
        La página deberá tener las siguientes características:
      </p>
      <ul>
        <li>
          <p class="text-justify">
            Deberá tener un catálogo de productos con una descripción y una foto responsiva por producto. Al menos 30 productos en stock. Los productos y toda la información
            acerca de ellos deberá estar almacenada en la base de datos y debe permitir añadir productos nuevos.
          </p>
        </li>
        <li>
          <p class="text-justify">
            Un menú de navegación superior o lateral izquierdo. El menú debe estar disponible en todas las páginas del sistema para que le permita al usuario navegar en las diferentes
            secciones del sitio.
          </p>
        </li>
        <li>
          <p class="text-justify">
            El sitio debe tener las siguientes secciones:
          </p>
          <ul>
            <li>
              <p class="text-justify">Catálogo de productos.</p>
            </li>
            <li>
              <p class="text-justify">Página de información del usuario.</p>
            </li>
            <li>
              <p class="text-justify">Creación de una nueva cuenta de usuario: Se debe pedir toda la información del usuario.</p>
            </li>
            <li>
              <p class="text-justify">Carrito de compras del usuario: Deberá mostrar los artículos que el usuario seleccionó del catálogo. Deberá permitir modificar su selección y
                finalizar la compra.</p>
            </li>
            <li>
              <p class="text-justify">Página del administrador: permite ver un reporte de los productos en inventario, agregar productos nuevos y modificar los existentes. Deberá
              mostrar el historial de compras.</p>
            </li>
            <li>
              <p class="text-justify">Información de contacto e información adicional acerca del sitio.</p>
            </li>
          </ul>
        </li>
        <li>
          <p class="text-justify">
            Un sistema de inicio de sesión validando correo electrónico y contraseña. Debe permanecer iniciada la sesión hasta que el usuario la finalice.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La página debe ser responsiva en todos sus elementos.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La página debe permitir al usuario elegir productos y agregarlos a su carrito de compras. Una vez que el usuario haya terminado de seleccionar sus artículos el
            sistema debe completar la venta del producto actualizando las tablas correspondientes en la base de datos: la cantidad de productos en almacen y el historial de compras.
          </p>
        </li>
        <li>
          <p class="text-justify">
            La base de datos debe tener al menos las siguientes tablas:
          </p>
          <ul>
            <li>
              <p class="text-justify">
                Productos
              </p>
              <ul>
                <li>
                  <p class="text-justify">ID Producto</p>
                </li>
                <li>
                  <p class="text-justify">Nombre</p>
                </li>
                <li>
                  <p class="text-justify">Descripción</p>
                </li>
                <li>
                  <p class="text-justify">Fotos</p>
                </li>
                <li>
                  <p class="text-justify">Precio</p>
                </li>
                <li>
                  <p class="text-justify">Cantidad en almacen</p>
                </li>
                <li>
                  <p class="text-justify">Fabricante</p>
                </li>
                <li>
                  <p class="text-justify">Origen</p>
                </li>
              </ul>
            </li>
            <li>
              <p class="text-justify">
                Usuarios
              </p>
              <ul>
                <li>
                  <p class="text-justify">ID usuario</p>
                </li>
                <li>
                  <p class="text-justify">Nombre del usuario</p>
                </li>
                <li>
                  <p class="text-justify">Correo electrónico</p>
                </li>
                <li>
                  <p class="text-justify">Contraseña</p>
                </li>
                <li>
                  <p class="text-justify">Fecha de Nacimiento</p>
                </li>
                <li>
                  <p class="text-justify">Número de tarjeta bancaria</p>
                </li>
                <li>
                  <p class="text-justify">Dirección Postal</p>
                </li>
              </ul>
            </li>
            <li>
              <p class="text-justify">
                Historial de compras de los usuarios.
              </p>
              <ul>
                <li>
                  <p class="text-justify">Usuario</p>
                </li>
                <li>
                  <p class="text-justify">Producto que ha comprado el usuario</p>
                </li>
              </ul>
            </li>
          </ul>
        </li>
      </ul>

      <p class="text-justify">El sistema deberá tener una estructura semejante de archivos de la siguiente forma:</p>
      <img src="img/files.png" alt="Estructura de Archivos" class="imgcenter img-responsive img-rounded">
      <p class="text-justify"></p>
      <p class="text-justify"></p>

      <h2>Evaluación</h2>
      <p class="text-justify">
        La evaluación del proyecto final será determinará mediante cada sección de la lista de cotejo.
        Cada rubro se evalúa de 0 a 5 puntos, dando un total máximo de 45 puntos. La calificación del proyecto se calcula dividiendo el número de
        puntos obtenidos por la rúbrica entre 4.5.
      </p>

      <h3>Lista de Cotejo</h3>
      <table class="table table-hover table-responsive table-striped table-bordered">
        <thead>
          <tr>
            <td>#</td>
            <td>Muy Bien (5)</td>
            <td>Bien (4)</td>
            <td>Regular (3)</td>
            <td>Mal (2)</td>
            <td>Muy mal (1)</td>
            <td>Nada (0)</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Catálogo de Productos</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Menú de Navegación</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Sesión de Usuario</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Carrito de Compras</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Página de Administración</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Sitio Responsivo</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Base de Datos</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Creación de Cuentas de Usuario</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td>Finalizar Compra</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>

      <h3>Forma de Evaluación</h3>
      <ul>
        <li>
          Catálogo de Productos:
          <ul>
            <li>¿Existen al menos 30 productos?</li>
            <li>¿Los productos son mostrados con detalle e imágen?</li>
          </ul>
        </li>
        <li>
          Menú de Navegación
          <ul>
            <li>¿Se encuentra en todas las páginas?</li>
            <li>¿Permite navegar las diferentes secciones de la página?</li>
          </ul>
        </li>
        <li>
          Sesión de usuario
          <ul>
            <li>¿Funciona?</li>
            <li>¿Se mantiene abierta?</li>
            <li>¿Se puede cerrar y abrir sin problemas?</li>
          </ul>
        </li>
        <li>
          Carrito de Compras
          <ul>
            <li>¿Permite agregar productos?</li>
            <li>¿Permite modificar productos en el carrito?</li>
            <li>¿Permite eliminar productos en el carrito?</li>
          </ul>
        </li>
        <li>
          Página de Administración
          <ul>
            <li>¿Existe?</li>
            <li>¿Permite modificar productos existentes?</li>
            <li>¿Permite agregar nuevos productos?</li>
            <li>¿Muestra el historial?</li>
          </ul>
        </li>
        <li>
          Sitio Responsivo
          <ul>
            <li>¿Todas las páginas y elementos son responsivos?</li>
          </ul>
        </li>
        <li>
          Base de Datos
          <ul>
            <li>¿Existe?</li>
            <li>¿Tiene las tablas y campos requeridos?</li>
            <li>¿El sistema permite realizar consultas y modificaciones?</li>
          </ul>
        </li>
        <li>
          Creación de Cuentas de Usuario
          <ul>
            <li>¿Se puede hacer una cuenta nueva desde la página?</li>
            <li>Una vez hecha, ¿se puede iniciar sesión?</li>
          </ul>
        </li>
        <li>
          Finalizar Compra
          <ul>
            <li>¿Se guarda la compra en el historial?</li>
            <li>¿Se actualiza el inventario de productos?</li>
            <li>¿Se borra el carrito de compras?</li>
          </ul>
        </li>
      </ul>
      <h2>Reporte Escrito</h2>
      <p class="text-justify">
        Adicional al proyecto, deberán entregar un documento escrito que deberá contener lo siguiente:
      </p>
      <ul>
        <li>Portada</li>
        <li>Introducción</li>
        <li>Objetivos</li>
        <li>Diagrama de la Base de Datos</li>
        <li>Código SQL (generado por MySQL Workbench (si es que lo utilizaron))</li>
        <li>Descripción de las principales páginas del proyecto</li>
        <li>Enlace hacia su repositorio Git</li>
        <li>Conclusiones</li>
      </ul>
      <p class="text-justify">
      </p>
      <p class="text-justify"></p>
      <p class="text-justify"></p>
    </article>

  </section>

  <!-- Scripts que se necesitan para el sitio -->
  <script src="../js/jquery.js" charset="utf-8"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
