<?php 

session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Persona.php";

	$obj= new Persona();


	$datos=array(
			
			$_POST['inputTipoDoc'],
			$_POST['inputDoc'],
			$_POST['inputNombres'],
			$_POST['inputApellido']
			);

	echo $obj->registroPersona($datos);

	
	
 ?>