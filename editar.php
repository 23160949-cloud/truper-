<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
include("conexion.php");

$id = $_GET['id'];

$resultado = $conexion->query("SELECT * FROM herramientas WHERE id=$id");
$fila = $resultado->fetch_assoc();

if ($_POST) {
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];

	$sql = "UPDATE herramientas
		SET nombre='$nombre', descripcion='$descripcion', precio='$precio', stock='$stock'
		WHERE id=$id";

	if ($conexion->query($sql)) {
	header("Location: admin.php");
	exit();
	} else {
		echo "Error: " . $conexion->error;
	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
</head>
<body>

<h2>Editar herramienta</h2>

<form method="POST">
	<input type="text" name="nombre" value="<?php echo $fila['nombre']; ?>"><br><br>
	<input type="text" name="descripcion" value="<?php echo $fila['descripcion']; ?>"><br><br>
	<input type="number" step="0.01" name="precio" value="<?php echo $fila['precio']; ?>"><br><br>
	<input type="number" name="stock" value="<?php echo $fila['stock']; ?>"><br><br>
	
	<button type="submit">Actualizar</button>
</form>
</body>
</html>
