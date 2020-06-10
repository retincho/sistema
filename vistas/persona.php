<?php 

session_start();
if(isset($_SESSION['usuario'])){
	?>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Paciente</title>
		<?php require_once 'menu.php';?>
		<?php require_once "../clases/Conexion.php"; ?>
		<link rel="stylesheet" type="text/css" href="../css/persona.css">
	</head>
	<body > 
		<form id="frmPersona" enctype="multipart/form-data">
			<label> PACIENTE</label>


			<div class="container">
				<div class="row">
					<div class="col-sm">
						<label> DATOS FILIATORIOS</label>

						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<label class="input-group-text" for="inputGroupSelect01">Tipo Dni</label>
							</div>
							<select class="custom-select" id="inputTipoDoc" name="inputTipoDoc">
								<option selected value="">Seleccionar...</option>
								<option value="1">DNI</option>
								<option value="2">LC</option>
								<option value="3">LE</option>
							</select>
						</div>   

						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" >DNI</span>
							</div>
							<input type="text" class="form-control" id="inputDoc" name="inputDoc" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
						</div>
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" >Nombres</span>
							</div>
							<input type="text" class="form-control" aria-label="Sizing example input" id="inputNombres" name="inputNombres" aria-describedby="inputGroup-sizing-sm">
						</div>
						<div class="input-group input-group-sm mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" >Apellido</span>
							</div>
							<input type="text" class="form-control" id="inputApellido" name="inputApellido" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
						</div>
						<button type="button" id="botonReg" class="btn btn-primary">Registrar</button>
					</div>
					<div class="col-sm">
						One of three columns
					</div>
					<div class="col-sm">
						One of three columns
					</div>
				</div>
			</div>

		</form>
		<script type="text/javascript">

			$('#botonReg').click(function(){
				vacios= validarFormVacio('frmPersona');
				
				if(vacios > 0){
					alert("Debe llenar todos los campos");
					return false;
				}
				datos=$('#frmPersona').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/persona/registrarPersona.php",
					success:function(r){
						alert(datos);
						if(r==1){
							alertify.success("Persona agregado con exito :D");
						}else{
							alertify.error("No se pudo agregar persona");
						}

						}
					});
			});

		</script>	

	</body>
	</html>

	<?php 

} 
else 
{

	header("location:../index.php");
}
?>
