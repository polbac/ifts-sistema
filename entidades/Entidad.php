<?php
class Entidad{
	
	private $nombre = '';
	private $modelo = array();

	function __construct($nombre, $modelo){
		$this->nombre = $nombre;
		$this->modelo = $modelo;
	}

	public function naming(){
		return $this->nombre;
	}

	public function get(){
		return R::find( $this->nombre );
	}

	public function post(){

		$row = R::dispense( $this->nombre );
		foreach($_POST as $key => $value) {
		    $row->{$key} = $value;
		}

		return R::store( $row );

	}

	public function put(){
		
	}

	public function delete(){
		
	}
}

?>