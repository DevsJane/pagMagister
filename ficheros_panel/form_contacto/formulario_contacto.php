<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="stylecontacto.css">
  </head>
<body>
<nav class="navbar navbar-dark fixed-top" style="background-color: #364c59;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../../logos/logo-corp-diic-txtblanco.png"  width="150px"  height="50px">
        </a>
        <a class="navbar-brand" href="../../index.php">
          Inicio
        </a>

        <a class="navbar-brand" href="../../index.php" id="cerrar">
        <?php
          session_start();
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
            echo "<a  href='../../logout.php'>Cerrar sesión</a>";            
          } else {
            echo "<li class='px-2'><a  type='button' data-toggle='modal' data-target='#formularioLogin'>LOGIN</a></li>";
          }                
        ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="offcanvas offcanvas-end text-bg-dark" style="background-color: #364c59;" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <a class="navbar-brand" href="#">
                <img src="../../logos/logo-corp-diic-txtblanco.png"  width="150px" height="50px">
              </a>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/academicos/academicos.php">Académicos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Noticias y Eventos
                    </a>
                    <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item text-white" href="NoticiaImportante.php">Noticia Importante</a></li>
                        <li><a class="dropdown-item text-white" href="CalendarioDeEventos.php">Calendario de Eventos</a></li>
                        <li><a class="dropdown-item text-white" href="PanelNoticias.php">Tarjeta de Noticias</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/proyectos/proyectos.php">Proyectos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/publicaciones/publicaciones.php">Publicaciones</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/form_contacto/formulario_contacto.php">Form contacto</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/form_postulacion/formulario_postulacion.php">Form postulación</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/horario_clases/HorarioClases.php">Horario de clases</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../../ficheros_panel/investigaciones/investigaciones.php">Investigaciones</a>
                </li>
              </ul>            
            </div>
          </div>
        </div>
    </nav>
  <div class="container">
  <center>
    <h1 class ="mt-5">FORMULARIO DE CONTACTOS</h1>
  </center>
  <br>   
  <a href="nueva_contacto.php" class="m-3 btn btn-dark">Agregar</a>   
  </div>
    <center>
    <table class="table">
    <thead>
      <tr>
        <th scope="col">RUT</th>
        <th scope="col">NOMBRE</th>
        <th scope="col">FECHA DE NACIMINETO</th>
        <th scope="col">GENERO</th>       
        <th scope="col">CORREO</th> 
        <th scope="col"> TELEFONO</th>
        <th scope="col">DIRECCIÓN</th>
        <th scope="col">INSTITUCIÓN</th>
        <th colspan="2">ACCIÓN</th>
      </tr>
    </thead>
    <tbody>
    <?php
        include("../../conexion.php");
        $con = conectar();
        $sql = "SELECT * FROM  formulario_contacto";
        $resultado = $con->query($sql);
        while($fila = $resultado->fetch_assoc()) { ?>
    <tr>
      <th scope="row"><?php echo $fila['RUT']?></th>
      <td><?php echo $fila['NOMBRE']?></td>
      <td><?php echo $fila['FECHA_NAC']?></td>
      <td><?php echo $fila['GENERO']?></td>
      <td><?php echo $fila['CORREO']?></td>
      <td><?php echo $fila['TELEFONO']?></td>
      <td><?php echo $fila['DIRECCION']?></td>
      <td><?php echo $fila['INSTITUCION']?></td>


      <td>
        <a href="modificar_contacto.php?RUT=<?php echo $fila["RUT"]; ?>" class="btn btn-warning">EDITAR</a>
        <a href="eliminar_contacto.php?RUT=<?php echo $fila["RUT"]; ?>" class="btn btn-danger">ELIMINAR</a>        </td>
    </tr>
  </tbody>
  <?php } ?>
  </table>
        </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>