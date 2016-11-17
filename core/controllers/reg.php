<?php 

$link = mysqli_connect("localhost", "root", "") or die("<h2> No se encuentra el servidor </h2>");
$db = mysqli_select_db($link, "tis") or die("<h2>Error de conexion</h2>");

$nombre = $_POST['nombres'];
$apePat = $_POST['ape-pat'];
$apeMat = $_POST['ape-mat'];
$ci = $_POST['form-control'];
$ciud = $_POST['ciudad'];
$fecNac = $_POST['fec-nac'];
$sex = $_POST['sexo'];
$telefono = $_POST['tel'];
$celular = $_POST['cel'];
$direccion = $_POST['dir'];
$correo = $_POST['email'];
$titulos = $_POST['titulo'];
$dedica = $_POST['dedicacion'];

$req = (strlen($nombre)*strlen($apePat)*strlen($apeMat)*strlen($fecNac)*strlen($sex)*strlen($telefono)*strlen($celular)*strlen($direccion)*strlen($correo)*strlen($titulos)*strlen($dedica)) or die("No se han lleando los datos correctamente.");


// mysql_query("INSERT INTO USUARIO VALUES ('','$ci','$nombre','$apePat','$apeMat','$titulos','$dedica')", $link) or die("<h2>Error</h2>");
// echo '
//             <h2>Registro complet</h2>
// ';
$result = mysqli_query($link, "INSERT INTO DOCENTE VALUES ('','$ci','$nombre','$apePat','$apeMat','$titulos','$dedica')") or die("<h2>Error</h2>");
echo '<h2>Registro completado exitosamente</h2>';
?>