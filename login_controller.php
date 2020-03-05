<?php
	session_start();

	require_once "app/usuario.model.php";
	require_once "app/usuario.service.php";
	require_once "app/conexao.php";

	$usuario = new Usuario();
	$usuario->__set('usuario', $_POST['usuario']);
	$usuario->__set('senha', $_POST['senha']);

	$conexao = new Conexao();
	$usuarioService = new UsuarioService($conexao, $usuario);
	$verificarLogin = $usuarioService->verificarLogin();

	if($verificarLogin){
		
		$_SESSION['autenticado'] = 'SIM';
		$_SESSION['id'] = $verificarLogin->id;
		$_SESSION['usuario'] = $verificarLogin->usuario;
		$_SESSION['img'] = $verificarLogin->img;

		header('Location: index.php');

	}else{
		$_SESSION['autenticado'] = 'NAO';
		header('Location: login.php?status=2');

	}

	

?>