<?php
$servername = "localhost";
$username = "php";
$password = "1234ago";
$dbname = "axamengallardoolmos2";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Ha habido un fallo " . $conn->connect_error);
}

$opcion=$_POST["opcion"];
$busqueda=$_POST["busqueda"];
$sql="SELECT * from parkingago WHERE";

if ($_POST["opcion"]=="matricula")
{

		$sql = $sql." matriculaago like '%$busqueda%'";


}

elseif ($_POST["opcion"]=="fechaentrada")

{
		$sql = $sql." fechaentradaago like '%$busqueda%'";
}



elseif ($_POST["opcion"]=="fechasalida")
{
		$sql = $sql." fechasalidaago like '%$busqueda%'";

}


elseif ($_POST["opcion"]=="horasalida")
{
		$sql = $sql." horasalidaago like '%$busqueda%'";

}



$result = $conn->query($sql);


if($result->num_rows > 0){
while ($row = $result->fetch_assoc()){
echo " <br> Matricula : " . $row["matriculaago"] . 
"<br>Fecha de entrada: " . $row["fechaentradaago"] .  
"<br>Fecha de salida:" . $row["fechasalidaago"] ;

}
}

else {
echo "Hay 0 resultados";
}

$conn->close();
?>