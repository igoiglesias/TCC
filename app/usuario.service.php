<?php
	
class UsuarioService {
	private $conexao;
	private $usuario;

	public function __construct(Conexao $conexao, Usuario $usuario){
		$this->conexao = $conexao->conectar();
		$this->usuario = $usuario;
	}

	public function inserir(){

	}

	public function recuperar(){
		
	}

	public function atualizar(){
		
	}

	public function remover(){
		
	}

	public function verificarLogin(){
		$query = 'select * from usuarios where usuario = :usuario and senha = :senha;';
		$consulta = $this->conexao->prepare($query);
		$consulta->bindParam(":usuario", $this->usuario->__get('usuario'));
		$consulta->bindParam(":senha", $this->usuario->__get('senha'));
		$consulta->execute();

		return $consulta->fetch(PDO::FETCH_OBJ);
		

	}

}


?>