<?php 

namespace conexion;


use mysqli;

class Conexion 
{


	public static function Open(){

		$conect = new mysqli("localhost","root","Cesar_25","usuarios");

		if($conect->connect_errno){
			die('Connect Error: ' . $mysqli->connect_errno);


		}

		return $conect;
	}

}




?>