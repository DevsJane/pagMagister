<?php
include("../../conexion.php");
$con = conectar();

$RUT = $_POST["RUT"];
$NOMBRE= $_POST["NOMBRE"];
$FECHA_NAC = $_POST["FECHA_NAC"];
$GENERO = $_POST["GENERO"];
$CORREO = $_POST["CORREO"];
$TELEFONO = $_POST["TELEFONO"];
$DIRECCION = $_POST["DIRECCION"];
$INSTITUCION = $_POST["INSTITUCION"];
$GRADO= $_POST["GRADO"];
$ANO_GRADUACION= $_POST["ANO_GRADUACION"];
$CAMPO_ESTUDIO= $_POST["CAMPO_ESTUDIO"];

$sql = "INSERT INTO formulario_postulacion (RUT, NOMBRE, FECHA_NAC, GENERO, CORREO, TELEFONO, DIRECCION, INSTITUCION, GRADO, ANO_GRADUACION, CAMPO_ESTUDIO) 
VALUES ('$RUT', '$NOMBRE', '$FECHA_NAC', '$GENERO', '$CORREO', '$TELEFONO', '$DIRECCION', '$INSTITUCION', '$GRADO', '$ANO_GRADUACION', '$CAMPO_ESTUDIO')";

$resultado = $con->query($sql);

if ($resultado) {
    header("Location: formulario_postulacion.php");
} else {
    echo "NO SE LOGRARON INSERTAR LOS DATOS";
}
?>
