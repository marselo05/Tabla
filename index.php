<?php

$arr = [];
$arr[] = 'hola';
$arr[] = 'chau';
var_dump($arr);
echo '<br>';
/**
* Registro
*/
class Registro
{
	public $usuario;
	public $edad;
	public $correo;
	public $mensajeError = [];

	// function __construct() {}
	public function getUsuario() { return $this->usuario;}
	public function setUsuario($usuario) { $this->usuario = $usuario;}

	public function getEdad() { return $this->edad;}
	public function setEdad($edad) { $this->edad = $edad;}

	public function getCorreo() { return $this->correo;}
	public function setCorreo($correo) { $this->correo = $correo;}

	public function validarRegistro () 
	{

		if (!isset($_POST['submit'])) 
		{
			if (empty($this->usuario)) 
			{
				echo '<p>* Agrega tu nombre</p>';
				$this->mensajeError[] = '* Agrega tu nombre';
			}
			else
			{
				if (strlen($this->usuario) > 15) 
				{
					echo '<p>* El nombrer es muy nombre</p>';
					$this->mensajeError[] = '* El nombrer es muy nombre';
				}
			}

			if (empty($this->edad)) 
			{
				echo '<p>* Agrega tu edad</p>';
				$this->mensajeError[] = '* Agrega tu edad';
			}
			else
			{
				if (!is_numeric($this->edad)) 
				{
					echo '<p>* La edad debe ser numerico</p>';
					$this->mensajeError[] = '* La edad debe ser numerico';
				}
			}

			if (empty($this->correo)) 
			{
				echo '<p>* Agrega tu correo</p>';
				$this->mensajeError[] = '* Agrega tu correo';
			}
			else
			{
				if (!filter_var($this->correo, FILTER_VALIDATE_EMAIL)) 
				{
					echo '<p>* El correo es incorrecto</p>';
					$this->mensajeError[] = '* El correo es incorrecto';
				}
			}
		}
	}

}
	
if (isset($_REQUEST) ) 
{
	var_dump($_REQUEST);

	$reg = new Registro;
	$reg->setUsuario($_GET['usuario']);
	$reg->setEdad($_GET['edad']);
	$reg->setCorreo($_GET['correo']);
	$reg->validarRegistro();
	var_dump($reg->mensajeError);

 	
} 

?>



<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
	<style type="text/css">
		form {
			display: block;
			width: 400px;
			font-family: tahoma
		}
		form label {
			display: block;
			width: 100%;		
		}
		form input[type="text"] {
			display: block;
			width: 100%;
			height: 30px;
			border-radius: 3px;
			border: 1px solid #cdcdcd;
		}
		
	</style>
</head>
<body>

<!-- Login -->
<form name="" method="get" action="">
	<label>
		Usuario
		<input type="text" name="usuario" value="">
	</label>
	<br>
	<label>
		Edad
		<input type="text" name="edad" value="">
	</label>
	<br>
	<label>
		Correr
		<input type="text" name="correo" value="">
	</label>
	<br>
		<input type="submit" name="enviar" value="Enviar">
	
</form>

</body>
</html>