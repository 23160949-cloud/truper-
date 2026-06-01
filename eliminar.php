<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("conexion.php");
if(isset($_GET['id'])){
$id = $_GET['id'];
$sql = "DELETE FROM herramientas WHERE id='$id'";
if ($conexion->query($sql)) {
	header("Location: admin.php");
	exit();
} else {
	echo "Error al eliminar:" . $conexion->error;
	}
} else {
	echo "No se recibio el ID";
}

?>

