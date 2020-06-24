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
		$smarty=new Smarty();
		

		$usuario=$_POST['usuario'];
		$pass=$_POST['password'];
		$tipo=$_POST['tipo'];

		$dato=$user->BuscarUsuario($usuario, $pass, $tipo);
		if($dato->num_rows==1)
		{
			$ar=array();

        while($row=mysqli_fetch_assoc($dato))
        {
            echo $row['user']."---".$row['tipo'];
        }

			
		}
		else
		{
		
		}
		
	}
}

