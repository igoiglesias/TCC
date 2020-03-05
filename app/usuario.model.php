<?php

class Usuario {
	private $id;
	private $usuario;
	private $senha;
	private $email;
	private $img;
	private $dt_criacao;

	public function __get($atributo){
		return $this->$atributo;
	}
	public function __set($atributo, $valor){
		$this->$atributo = $valor;

	}
}


?>