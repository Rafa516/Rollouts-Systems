<?php

use \Projeto\Page;
use \Projeto\Model\Usuario;


//------------------ROTA DA PÁGINA DE LOGIN--------------------------------//

$app->get('/', function() {  

	
	$page = new Page([
		"header"=>false,
		"footer"=>false
	]);

	$page->setTpl("login-usuario",[
		'error'=>Usuario::getError(),
		'profileMsg'=>Usuario::getSuccess(),
		'errorRegister'=>Usuario::getErrorRegister(),
	]);

});



//---------ROTA DO FORMULÁRIO DE LOGIN----------------------//

$app->post('/login', function() {

	try {

		Usuario::login($_POST['login'], $_POST['senha']);

	} catch(Exception $e) {

		Usuario::setError($e->getMessage());

		header("Location: /");
		exit;

	}

	header("Location: /usuario/home");
	exit;

});
//---------ROTA DO FORMULÁRIO DE REGISTRO USUÁRIO ----------------------//
$app->post("/registro", function(){

	if (Usuario::checkEmailExist($_POST['email']) === true) {

		Usuario::setErrorRegister("Este endereço de e-mail já está sendo usado por outro usuário.");
		header("Location: /");
		exit;

	}

	if (Usuario::checkLoginExist($_POST['login']) === true) {

		Usuario::setErrorRegister("Este Login já está sendo usado por outro usuário.");
		header("Location:/");
		exit;

	}

	$usuario = new Usuario();

	$usuario->setData([
		'inadmin'=>0,
		'login'=>$_POST['login'],
		'nome_user'=>$_POST['nome_user'],
		'localidade'=>$_POST['localidade'],
		'email'=>$_POST['email'],
		'senha'=>$_POST['senha'],
		'empresa'=>$_POST['empresa'],
		'cargo'=>$_POST['cargo'],
		'foto'=>0
	]);

	$usuario->cadastroUsuario();

	Usuario::setSuccess("Usuário cadastrado com sucesso");

	header('Location: /');
	exit;

});


//---------ROTA PARA ENCERRAR A SESSÃO----------------------//

$app->get('/usuario/logout', function() {

	Usuario::logout();

	header("Location: /");
	exit;

});


//---------ROTA PARA A PÁGINA INICIAL----------------------//

$app->get('/usuario/home', function() {  


	Usuario::verificaLogin();

	$page = new Page();

	$page->setTpl("usuario");

});


//---------ROTA PARA  A PÁGINA DO PERFIL DO USUÁRIO----------------------//

$app->get('/usuario/perfil', function() {  


	Usuario::verificaLogin();

	$page = new Page();

	$page->setTpl("usuario-perfil",[
	'alteracaoErro'=>Usuario::getError(),
	'alteracaoSucesso'=>Usuario::getSuccess()
	]);

});



//---------ROTA PARA ALTERAR OS DADOS DO USUÁRIO - POST----------------------//

$app->post("/usuario/perfil/editar/:id_usuario", function ($id_usuario) {

	$usuario = new Usuario();

	$usuario->get((int)$id_usuario);

	$usuario->setData($_POST);

	$usuario-> editarUsuario();

	header('Location: /');
	exit;

});

//---------ROTA PARA ALTERAR A FOTO DO PERFIL DO USUÁRIO - POST---------------------//

$app->post("/usuario/perfil/editar-imagem/:id_usuario", function ($id_usuario) {

	$usuario = new Usuario();

	$usuario->get((int)$id_usuario);

	$usuario->setData($_POST);

	$usuario->alterarImagemPerfil();

	header('Location: /');
	exit;

});

//---------ROTA PARA ALTERAR SENHA DO USUÁRIO  - POST---------------------//

$app->post("/perfil/alterar-senha", function(){



	if ($_POST['senha_atual'] === $_POST['nova_senha']) {

		Usuario::setError("A sua nova senha deve ser diferente da atual.");
		header("Location: /usuario/perfil");
		exit;		

	}

	$usuario = Usuario::getFromSession();

	if (!password_verify($_POST['senha_atual'], $usuario->getsenha())) {

		Usuario::setError("A senha atual está inválida.");
		header("Location: /usuario/perfil");
		exit;			

	}

	$usuario->setsenha($_POST['nova_senha']);

	$usuario->editarSenha();

	Usuario::setSuccess("Senha alterada com sucesso.");

	header("Location: /usuario/perfil");
	exit;

});



