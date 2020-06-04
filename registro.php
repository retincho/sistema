<?php

    require_once 'clases/conexion.php';
    $c=new conectar();
    $conexion=$c->conexion();
    
    $sql="Select * from usuarios where usuario='Admin'";
    $result = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($result) > 0)
    {
        header("location:index.php");
    }
    


?>


<!DOCTYPE html>

<html>
<head>
	<title></title>
	<script src="librerias/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="librerias/bootstrap/css/bootstrap.min.css">
	<script src="librerias/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="librerias/fontawesome/css/solid.css">
	<script  src="librerias/fontawesome/js/all.js"></script> <!--load all styles -->
	
	<!-- Nuestro css-->
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<script src="js/funciones.js"></script>

</head>
</head>
<body style="background-color: gray">
	<br><br><br>
	
	
	<div class="modal-dialog text-center">
		<div class="col-sm-8 main-section">
			<div class="modal-content">
				<div class="col-12 user-img">
					<img src="img/avatar.png"/>
				</div>
				<form id="frmRegistro">
							<label>Nombre</label>
							<input type="text" class="form-control input-sm" name="nombre" id="nombre">
							<label>Apellido</label>
							<input type="text" class="form-control input-sm" name="apellido" id="apellido">
							<label>Usuario</label>
							<input type="text" class="form-control input-sm" name="usuario" id="usuario">
							<label>Password</label>
							<input type="text" class="form-control input-sm" name="password" id="password">
							<p></p>
							<span class="btn btn-primary" id="registro">Registrar</span>
							<a href="index.php" class="btn btn-danger">Regresar login</a>
				</form>
			</div>
		</div>
	</div>	
	
<script type="text/javascript">
	$(document).ready(function(){
		$('#registro').click(function(){

			vacios= validarFormVacio('frmRegistro');
			if(vacios > 0){
				alert("Debe llenar todos los campos");
				return false;
				}
			
			datos=$('#frmRegistro').serialize();
			
			$.ajax({
				type:"POST",
				data:datos,
				url:"procesos/regLogin/registrarUsuario.php",
				success:function(r){
					
					if (r==1){
						alert("Usuario registrado con exito");
						}
					else
					{
						alert("Falla en registro");
						}

				}
			});
		});
	});	
</script>		
</body>
</html>