<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>Proc</title>
	</head>
	<body>
		<div style="background-color: teal; color: white; height: 150px; font-size: 18pt;padding:5px;">
			<p>Bienvenido <?php echo htmlspecialchars($_POST['nombre']); ?>
			<?php echo htmlspecialchars($_POST['apellido']); ?>.</p>
			<p>Ud tiene <?php echo (int)$_POST['edad']; ?> años.<p>
		</div>
	</body>
</html>