<?php 
include ("VariablesCalendario.php");

include_once("../../conexion.php");
$con = conectar();

$sql="SELECT * FROM calendario_eventos";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <title>Calendario de Eventos Magister UDA</title>
</head>
<body>

    <!-- Modal -->
    <div class="modal fade" id="CalendarioDeEventos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <div class="mx-auto my-auto">
        <div class="row mx-auto my-auto">
            <div class="col"><!--Calendario-->
                <div class="my-5">
                    <h3>Calendario de Eventos</h3>
                </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">Domingo</th>
                        <th scope="col">Lunes</th>
                        <th scope="col">Martes</th>
                        <th scope="col">Miércoles</th>
                        <th scope="col">Jueves</th>
                        <th scope="col">Viernes</th>
                        <th scope="col">Sábado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td class="p-5"></td>
                        <td class="p-5"></td>
                        <td class="p-2">1<br><br><?php echo $titulos_1?></td>
                        <td class="p-2">2<br><br><?php echo $titulos_2?></td>
                        <td class="p-2">3<br><br><?php echo $titulos_3?></td>
                        <td class="p-2">4<br><br><?php echo $titulos_4?></td>
                        <td class="p-2">5<br><br><?php echo $titulos_5?></td>
                        </tr>
                        <tr class="p-5">
                        <td class="p-2">6<br><br><?php echo $titulos_6?></td>
                        <td class="p-2">7<br><br><?php echo $titulos_7?></td>
                        <td class="p-2">8<br><br><?php echo $titulos_8?></td>
                        <td class="p-2">9<br><br><?php echo $titulos_9?></td>
                        <td class="p-2">10<br><br><?php echo $titulos_10?></td>
                        <td class="p-2">11<br><br><?php echo $titulos_11?></td>
                        <td class="p-2">12<br><br><?php echo $titulos_12?></td>
                        </tr>
                        <tr>
                        <td class="p-2">13<br><br><?php echo $titulos_13?></td>
                        <td class="p-2">14<br><br><?php echo $titulos_14?></td>
                        <td class="p-2">15<br><br><?php echo $titulos_15?></td>
                        <td class="p-2">16<br><br><?php echo $titulos_16?></td>
                        <td class="p-2">17<br><br><?php echo $titulos_17?></td>
                        <td class="p-2">18<br><br><?php echo $titulos_18?></td>
                        <td class="p-2">19<br><br><?php echo $titulos_19?></td>
                        </tr>
                        <tr>
                        <td class="p-2">20<br><br><?php echo $titulos_20?></td>
                        <td class="p-2">21<br><br><?php echo $titulos_21?></td>
                        <td class="p-2">22<br><br><?php echo $titulos_22?></td>
                        <td class="p-2">23<br><br><?php echo $titulos_23?></td>
                        <td class="p-2">24<br><br><?php echo $titulos_24?></td>
                        <td class="p-2">25<br><br><?php echo $titulos_25?></td>
                        <td class="p-2">26<br><br><?php echo $titulos_26?></td>
                        </tr>
                        <tr class="p-5">
                        <td class="p-2">27<br><br><?php echo $titulos_27?></td>
                        <td class="p-2">28<br><br><?php echo $titulos_28?></td>
                        <td class="p-2">29<br><br><?php echo $titulos_29?></td>
                        <td class="p-2">30<br><br><?php echo $titulos_30?></td>
                        <td class="p-2">31<br><br><?php echo $titulos_31?></td>
                        <td class="p-5"></td>
                        <td class="p-5"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarEvento">
    Agregar Evento
    </button>

    <!-- Modal -->
    <div class="modal fade" id="AgregarEvento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="AgregarEvento.php" method="POST" autocomplete="off">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="titulo" placeholder="Titulo del Evento" required>
                    <label for="floatingInput">Titulo del Evento</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px" required></textarea>
                    <label for="floatingTextarea2">Descripcion del Evento</label>
                </div>
                <div class="row g-2 mb-3">
                    <div class="col-md">
                        <div class="form-floating">
                        <label for="fechaHora">Fecha y Hora de Inicio:</label><br>
                        <input type="datetime-local" id="fechaHora" name="fechainicio" name="FechaInicial" required><br>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <label for="fechaHora">Fecha y Hora de Fin:</label><br>
                            <input type="datetime-local" id="fechaHora" name="fechafin" required><br>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="ubicacion" placeholder="Ubicacion del Evento" required>
                    <label for="floatingInput">Ubicacion del Evento</label>
                </div>
                <div class="form-floating">
                    <select class="form-select" id="floatingSelectDisabled" name="tipo" aria-label="Floating label disabled select example" required>
                        <option selected>Open this select menu</option>
                        <option value="Conferencia">Conferencia</option>
                        <option value="Seminario">Seminario</option>
                        <option value="Taller">Taller</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <label for="floatingSelectDisabled">Tipo de Evento</label>
                </div>
    
        </div>
                <div class="modal-footer">
                    <input type="submit">
                </div>
            </form>
        </div>
    </div>
    </div>

    <!-- Crear la tabla con Bootstrap -->
    <table class="table table-bordered">
    <!-- Crear las cabeceras de la tabla -->
    <thead>
        <tr>
        <th scope="col">ID_EVENTO</th>
        <th scope="col">TITULO</th>
        <th scope="col">DESCRIPCION</th>
        <th scope="col">FECHA INICIO</th>
        <th scope="col">FECHA FIN</th>
        <th scope="col">UBICACION</th>
        <th scope="col">TIPO EVENTO</th>
        <th scope="col">Editar</th>
        <th scope="col">Eliminar</th>
        </tr>
    </thead>

    <!-- Rellenar la tabla con los datos -->
    <tbody>
        <?php
            $sql="SELECT * FROM calendario_eventos";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query)){
        ?>
        
        <tr>
        <td><?php echo $row['ID_EVENTO']; ?></td>
        <td><?php echo $row['TITULO']; ?></td>
        <td><?php echo $row['DESCRIPCION']; ?></td>
        <td><?php echo $row['FECHA_INICIO']; ?></td>
        <td><?php echo $row['FECHA_FIN']; ?></td>
        <td><?php echo $row['UBICACION']; ?></td>
        <td><?php echo $row['TIPO_EVENTO']; ?></td>
        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModificarEvento<?php echo $row['ID_EVENTO']; ?>">Modificar</button></td>
        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#EliminarEvento<?php echo $row['ID_EVENTO']; ?>">Eliminar</button></td>
        </tr>
        <!-- Modal Modificar-->
        <div class="modal fade" id="ModificarEvento<?php echo $row['ID_EVENTO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="ModificarEvento.php" method="POST" autocomplete="off">
                    <div class="form-floating mb-3">
                        <input type="hidden" id="floatingInput" name="idevento" value="<?php echo $row['ID_EVENTO']; ?>">
                        <input type="text" class="form-control" id="floatingInput" name="titulo" value="<?php echo $row['TITULO']; ?>" placeholder="Titulo del Evento" required>
                        <label for="floatingInput">Titulo del Evento</label>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="descripcion" style="height: 100px" required><?php echo $row['DESCRIPCION']; ?></textarea>
                        <label for="floatingTextarea2">Descripcion del Evento</label>
                    </div>
                    <div class="row g-2 mb-3">
                        <div class="col-md">
                            <div class="form-floating">
                            <label for="fechaHora">Fecha y Hora de Inicio:</label><br>
                            <input type="datetime-local" id="fechaHora" name="fechainicio" value="<?php echo $row['FECHA_INICIO']; ?>" required><br>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <label for="fechaHora">Fecha y Hora de Fin:</label><br>
                                <input type="datetime-local" id="fechaHora" name="fechafin" value="<?php echo $row['FECHA_FIN']; ?>" required><br>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" name="ubicacion" value="<?php echo $row['UBICACION']; ?>" placeholder="Ubicacion del Evento" required>
                        <label for="floatingInput">Ubicacion del Evento</label>
                    </div>
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelectDisabled" name="tipo" aria-label="Floating label disabled select example" required>
                            <option selected>Open this select menu</option>
                            <option value="Conferencia" <?php if($row['TIPO_EVENTO'] == 'Conferencia') echo 'selected'; ?>>Conferencia</option>
                            <option value="Seminario" <?php if($row['TIPO_EVENTO'] == 'Seminario') echo 'selected'; ?>>Seminario</option>
                            <option value="Taller" <?php if($row['TIPO_EVENTO'] == 'Taller') echo 'selected'; ?>>Taller</option>
                            <option value="Otro" <?php if($row['TIPO_EVENTO'] == 'Otro') echo 'selected'; ?>>Otro</option>
                        </select>
                        <label for="floatingSelectDisabled">Tipo de Evento</label>
                    </div>
        
            </div>
                    <div class="modal-footer">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </div>
        </div>
        <!-- Modal Eliminar -->
        <div class="modal fade" id="EliminarEvento<?php echo $row['ID_EVENTO']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Estas seguro que deseas eliminar el evento ID <?php echo $row['ID_EVENTO']; ?>?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                <a href="EliminarEvento.php?id=<?php echo $row['ID_EVENTO'] ?>" class="btn btn-danger">Eliminar</a>
            </div>
            </div>
        </div>
        </div>
        <?php } ?>
    </tbody>
    </table>
    
</body>
</html>