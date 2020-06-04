

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	require_once "dependencias.php";
	?>
	<link rel="stylesheet" type="text/css" href="../css/menu.css">
</head>
<body>
	<nav class="navbar navbar-inverse fixed-top navbar-expand-lg navbar-dark bg-dark" >
		<a class="navbar-brand" href="#">
			<img src="../img/imag.png" width="50" height="50" alt="" loading="lazy">
		</a>
		<a class="navbar-brand" href="#">Sistema</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav  nav justify-content-end">
				<div class="form-group" id="usuario-group">
					<li class="nav-item active">
						<a class="nav-link" href="inicio.php"></span>Inicio</a>
					</li>
				</div>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-justify-content-end">
					<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>

				</li>

			</ul>

		</div>

	</nav>
</body>
</html>