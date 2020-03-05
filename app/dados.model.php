<?php

class Dados{
	private $id;
	private $temperatura;
	private $humidade;
	private $orvalho;
	private $luz;
	private $latitude;
	private $longitude;
	private $dt_coleta;
	private $dt_cadastro;

	public function __get($atrubute){
		return $this->$atrubute;
	}

	public function __set($atribute, $value){
		$this->$atribute = $value;
	}

}


?>