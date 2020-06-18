<?php
    //include('Controlador/Home.Controller.php');
	//include('Controlador/User.Controller.php');
	include('AutoLoad.php');

    if(isset($_GET['controller']))
    {
      $controller=$_GET['controller'];
      $action=$_GET['action'];
    }
    else
    {
      $controller="Home";//acede a las clases
      $action="Inicio";//accede a los metodos o funciones
    }

    if(class_exists ($controller) && method_exists($controller,$action))
    {
      $class= new $controller();
      $class->$action();
    }
    else
    {
      echo "<br/>la clase y el controlador no existen";
    }

 ?>
