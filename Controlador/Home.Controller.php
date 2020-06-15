<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class Home
  {

    function __construct()
    {
      // code...
    }

    public function Inicio()
    {
        $smarty =new Smarty();
		$smarty ->display('Default.tpl');
    }

	public function Funcion2()
	{
		echo "En controlador Home y metodo Funcion2";
	}

  }

 ?>
