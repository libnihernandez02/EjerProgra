<?php
     class Usuarios
	 {
	 	 public function BuscarUsuario($user, $pass)
		 {
		 	 $con =new Conexion();
			 $q="SELECT * FROM `usuario` WHERE `user`='$user' AND `password`='$pass';";
			 $resultado=$con->query($q);
		 }
	 }
?>