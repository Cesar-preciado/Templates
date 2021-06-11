<?php 


namespace controller;

include_once('../model/conect.php');


use conexion\Conexion;


class Controller{


	    private $controller;
	    private static $obj = null;
	    private $model;


	    private function __construct(){}




	    public static function getInstances(){

	    	if(self::$obj == null){

	    		self::$obj = new Controller();
	    	}

	    	return self::$obj;
	    }




	    public function AccesModel(){

	    	
	    	$this->model = Conexion::Open();

	    }



	    public function RegistrarUser($name, $email, $mensaje){

	    	$query = "insert into usuarios(name, email, mensaje)
	    	values('$name','$email', '$mensaje')";


	    	if($this->model->query($query)){

	    		//echo "Tu solicitud ha sido atendida pronto nos comunicaremos contigo.";
	    	}

	    }

}




$query = $_GET['LoadDate'];

//methods of request
switch ($_SERVER['REQUEST_METHOD']){

	case 'POST':
		
		//value of request
		switch ($query){

			case 'InformContact':
				include_once('../views/viewsInformcontacto.php');
				break;
		}


	break;
}












?>