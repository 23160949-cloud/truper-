<?php
if ($_POST) {
$usuario = $_POST['usuario'];
$password = $_POST['password'];
if ($usuario == "23160949@itoaxaca.edu.mx" && $password == "23160949ITO") {
	header("Location: admin.php");
	exit();
} else {
	echo"<h3>Datos incorrectos</h3>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

	<style>
		body {
			margin: 0;
			font-family: Arial;
			background: linear-gradient(135deg, #2c3e50, #3498db);
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		.login-box {
			background: white;
			padding: 30px;
			border-radius: 10px;
			width: 300px;
			box-shadow: 0px 0px 20px rgba(0,0,0,0.2);
			text-align: center;
		}


		h2{
			margin-bottom: 20px;
		}

		input {
			width: 100%;
			padding: 10px;
			margin: 10px 0;
			border: 1px solid #ccc;
			border-radius: 5px;
		}

		.btn {
			width: 100%;
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

		.error {
			color: red;
			margin-top: 10px;
		}

		</style>
	</head>
<body>

<div class="login-box">
	<h2><i class="fas fa-user-lock"></i> Iniciar Sesion</h2>

	<form method="POST">
		<input type="text" name="usuario"  placeholder="Usuario" required>
		<input type="password" name="password" placeholder="Contraseña" required>
	<button class="btn" type="submit">
		<i class="fas fa-sign-in-alt"></i> Ingresar
	</button>
	</form>
	<?php if (isset($error)) { ?>
		<div class="error"><?php echo $error; ?></div>
	<?php } ?>
</div>
<//body>
</html>
