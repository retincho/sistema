<?php 

session_start();
if(isset($_SESSION['usuario'])){

	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Inicio</title>
		<?php 
		require_once 'menu.php';
		?>
		<link rel="stylesheet" type="text/css" href="../css/inicio.css">

	</head>

	<body>
		
		
	</body>
	</html>

	<?php 

} 
else 
{

	header("location:../index.php");
}

?>