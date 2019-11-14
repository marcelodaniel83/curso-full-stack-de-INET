<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Proc</title>
	</head>
	<body>
		<div style="background-color: black; color: white; height: 300px; font-size: 18pt;padding:5px;">
			<p>Bienvenido <?php echo htmlspecialchars($_POST['nombre']); ?>
			<?php echo htmlspecialchars($_POST['apellido']); ?>.</p>
			<p>Ud tiene <?php echo (int)$_POST['edad']; ?> años.<p>
			<p>Su celu es <?php echo htmlspecialchars($_POST['ncel']); ?>.<p>
			<p>Su mail es <?php echo htmlspecialchars($_POST['email']); ?>.<p>
			<p>Su contraseña es <?php echo htmlspecialchars($_POST['password']); ?>.<p>
		</div>
	</body>
</html>