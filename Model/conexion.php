<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=dental","root","",array(PDO::ATTR_PERSISTENT => true));
		return $link;

	}

}
