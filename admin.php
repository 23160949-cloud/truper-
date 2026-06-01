<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
?>
<?php
include("conexion.php");
if ($_POST) {
	$nombre = $_POST['nombre'];
	$descripcion = $_POST['descripcion'];
	$precio = $_POST['precio'];
	$stock = $_POST['stock'];

	$sql = "INSERT INTO herramientas(nombre, descripcion, precio, stock)
		 VALUES('$nombre', '$descripcion', '$precio','$stock')";

	if($conexion->query($sql)){
	  echo "<h3>Resgistro guardado correctamente</h3>";
	} else {
	  echo "Error:". $conexion->error;
	}
}

$resultado = $conexion->query("SELECT * FROM herramientas");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Panel Admin</title>

	<link rel="stylesheet" href="htttps://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
	body {
		margin: 0;
		font-family: Arial;
		background: #f4f6f9;
	}

	.navbar {
		background: #2c3e50;
		color: white;
		padding: 15px;
		font-size: 20px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.container {
		width: 90%;
		margin: 20px aunto;
	 }
	
	.card {
		background: white;
		padding: 20px;
		border-radius: 10px;
		box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
		margin-bottom: 20px;
	}

	input {
		width: 100%;
		padding: 10px;
		margin: 5px  0 15px;
		border: 1px solid #ccc;
		border-radius:  5px;
	}

	.btn {
		background: #3498db;
		color: white;
		border: none;
		padding: 10px;
		border-radius: 5px;
		cursor: pointer;
	}

	.btn:hover {
		background: #2980b9;
	}

	.delete {
		background: #e74c3c;
	}

	.delete:hover {
		background: #c0392b;
	}

	table {
		width: 100%;
		border-collapse: collapse;
		background: white;
		border-radius: 10px;
		overflow: hidden;
	}

	th {
		background: #3498db;
		color: white;
		padding: 10px;
	}

	td {
		padding: 10px;
		border-bottom: 1px solid #ddd;
		text-align: center;
	}

	tr:hover {
		background: #f1f1f1;
	}

	</style>
</head>

<body>

<div class="nabvar">
	<div>
	       <i class="fas fa-tools"></i> Ferreteria  Truper - Panel de Adminstracion 
	</div>

	<div>
		<a href="index.php">
			<button class="btn delete">
				<i class="fas fa-sign-out-alt"></i> Salir
			</button>
		</a>
	</div>
	</div>

<div class="container">
	<div class="card">
		<h2><i class="fas fa-plus-circle"></i> Agregar herramientas</h2>

		<form method="POST">
			<input type="text" name="nombre" placeholder="Nombre" required>
			<input type="text" name="descripcion" placeholder="Descripcion" required>
			<input type="number" step="0.01" name="precio" placeholder="Precio" required>
			<input type="number" name="stock" placeholder="Stock" required>

			<button class="btn" type="submit">
				<i class="fas fa-save"></i> Guardar
			</button>
		</form>
	</div>

<div class="card">
	<h2>><i class="fas fa-box"></i> Lista de Heeramientas</h2>

	<table>
		<tr>
			<th>ID</th>
			<th><i class="fas fa-tag"></i> 	Nombre</th>
			<th><i class="fas fa-align-left"></i> Descripcion</th>
			<th><i class="fas fa-dollar-sign"></i> Precio</th>
			<th><i class="fas fa-boxes"></i> Stock</th>
			<th><i class="fas fa-cogs"></i> Acciones</th>
		</tr>

	<?php while($fila = $resultado->fetch_assoc()) {?>
	<tr>
		<td><?php echo $fila['id']; ?></td>
		<td><?php echo $fila['nombre']; ?></td>
		<td><?php echo $fila['descripcion']; ?></td>
		<td><?php echo $fila['precio']; ?></td>
		<td><?php echo $fila['stock']; ?></td>
		<td>

		<a href="editar.php?id=<?php echo $fila['id']; ?>">
			<button class="btn">
				<i class="fas fa-edit"></i> Editar
			</button>
		</a>

			<a href="eliminar.php?id=<?php echo $fila['id']; ?>">
				<button class="btn delete">
					<i class="fas fa-trash"></i> Eliminar
				</button>
			</a>
		</td>
	</tr>
	<?php } ?>
</table>
</div>
</div>

</body>
</html>

