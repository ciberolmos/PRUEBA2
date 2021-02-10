 <?php
$servername = "localhost";
$username = "php";
$password = "1234ago";
$dbname = "axamengallardoolmos2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
$matricula=$_POST["matricula"];
$fechaentrada=$_POST["fechaentrada"];
$horaentrada=$_POST["horaentrada"];
$fechasalida=$_POST["fechasalida"];
$horasalida=$_POST["horasalida"];
$codigo=$_POST["codigo"];


$sql = "INSERT INTO parkingago (matriculaago, fechaentradaago, horaentradaago, fechasalidaago, horasalidaago, codigoago)
VALUES ('$matricula', '$fechaentrada', '$horaentrada', '$fechasalida','$horasalida','$codigo')";

$resultado = mysqli_query($conn, $sql);

if ($resultado) {
echo "Estancia insertada correctamente";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

