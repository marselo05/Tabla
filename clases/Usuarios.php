<?php

/**
* 
*/
class Usuario
{
	public $usuario;
	public $clave;

	public function __construct() {

	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	public function login($usuario) {
		
		// $this->setUsuario($usuario);
		// $this->usuario = $usuario;
		// $this->clave   = $clave;

		// $this->autentificaUsuario();
		echo $this->validaUsuario();
	}

	public function validaUsuario() 
	{
		if (isset($this->usuario) &&) 
		{
			# code...
		}
		return isset($this->usuario);
	}

	public function autentificaUsuario() 
	{
		// logica de autentificacion
		if(isset($this->usuario))
		{
			echo $this->getUsuario();
		}
		else{
			return false;
		}  
	}

}

$_GET['usuario'] = 'Martin Espinola';

$usuario = new Usuario;
$usuario->setUsuario($_GET['usuario']);
$usuario->login($_GET['usuario']);
