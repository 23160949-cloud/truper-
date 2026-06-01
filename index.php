<!DOCTYPE html>
<html>
<head>
	<title>Ferreteria Truper</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
	<style>
		body {
			margin: 0;
			font-family: Arial;
			background: linear-gradient (135deg, #2c3e50, #3498db);
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.card {
			background: white;
			padding: 40px;
			border-radius: 15px;
			width: 400px;
			text-align: center;
			box-shadow: 0px 0px 25px rgba:(0,0,0,0.3);
		}

		h1 {
			color: #2c3e50;
			margin-bottom:  10px;
		}

		p {
			color: #555;
			font-size: 16px;
		}


		.btn {
			background: #e74c3c;
			color: white;
			border: none;
			padding: 12px 25px;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 20px;
		}

		.btn:hover {
			background: #c0392b;
		}


	</style>
</head>
<body>

<div class="card">
		<h1><i class="fas fa-tools"></i> Ferreteria Truper</h1>

		<p>Sistema de gestion de herramientas</p>

		<p><b>Mision:</b> Ofrecer herramientas de calidad.</p>
		<p><b>Vision:</b> Ser lider en servicio y productos.</p>

		<a href="login.php">
			<button class="btn">
				<i class="fas fa-sign-in-alt"></i> Ingresar al Sistema 
			</button>
		</a>
	
</div>
</body>
</html>
