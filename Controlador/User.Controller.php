<?php

class User
{
	function __Construct()
	{
	
	}

	public function ValidarUsuario()
	{
		//echo "en controller user y metodo  ValidarUsuario<br>";
		//var_dump($_POST);
		$user=new Usuarios(); 

		$usuario=$_POST['usuario'];
		$pass=$_POST['password'];
		$tipo=$_POST['tipo'];

		$dato=$user->BuscarUsuario($usuario, $pass, $tipo);

		var_dump($dato);
	}
}

