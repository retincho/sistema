<?php
    require_once 'clases/conexion.php';
    $c=new conectar();
    $conexion=$c->conexion();
    
    $sql="Select * from usuarios where usuario='Admin'";
    $result = mysqli_query($conexion, $sql);
    $validar = 0;
    if (mysqli_num_rows($result) > 0)
    {
        $validar=1;
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="librerias/fontawesome/css/solid.css">
	<script  src="librerias/fontawesome/js/all.js"></script> <!--load all styles -->
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/funciones.js"></script>

</head>
<body>

	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="img/avatar.png"/>
				</div>	
				<form class="col-12" id="frmLogin">
					<div class="form-group" id="usuario-group">
						<input class="form-control" type="text" name="usuario" placeholder="Usuario"/>
					</div>
					<div class="form-group" id="pass-group">
						<input class="form-control" type="password" name="password"  placeholder="Contraseña"/>
					</div>
					<span type="submit" class="btn btn-primary" id="entrarSistema"><i class="fas fa-sign-in-alt"></i>  Ingresar </span>
					<?php  if(!$validar): ?>		
						<!--<a href="registro.php" class="btn btn-danger btn-sm"><i class="fas fa-sign-in-alt"></i>Registra-->
						<a href="registro.php" type="submit" class="btn btn-danger" id="entrarRegistro"><i class="fas fa-sign-in-alt"></i>  Registrar </a> 
					<?php endif; ?>	
				</form>
				



			</div>
		</div>	
	</div>	

<script type="text/javascript">
$('#entrarSistema').click(function(){

	vacios= validarFormVacio('frmLogin');
	if(vacios > 0){
		alert("Debe llenar todos los campos");
		return false;
		}

	
	datos=$('#frmLogin').serialize();
	$.ajax({
		type:"POST",
		data:datos,
		url:"procesos/regLogin/login.php",
		success:function(r){
			if(r==1)
			{
				window.location="vistas/inicio.php";}
			else 
			{
				alert("No se pudo acceder");
				}
		}
	});
});



</script>



</body>
</html>