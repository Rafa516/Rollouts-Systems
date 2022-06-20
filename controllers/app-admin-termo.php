<?php

use \Projeto\PageAdmin;
use \Projeto\Model\Usuario;
use \Projeto\Model\Termo;



//---------ROTA PARA DELETAR UM TERMO ----------------------//

    $app->get("/admin/termos/delete/:id_termos",function($id_termos){

        $termos = new Termo();

        $termos->get((int)$id_termos);

        $termos->delete();

        Usuario::setSuccess("Termo removido com sucesso.");

        header("Location: /admin/todos-termos");
        exit;
    });

//---------ROTA PARA A ABERTURA DOS TERMOS----------------------//

    $app->get('/admin/registrar-termos', function() {  


        usuario::verificaLoginAdmin();

        $termo = new Termo();

        $page = new PageAdmin();



        $page->setTpl("admin-abertura-termos",[
            'CallOpenMsg'=>usuario::getSuccess(),
            'errorRegister'=>usuario::getErrorRegister(),
            "value"=>$termo->getValues()
           

        ]);

    });

//---------ROTA PARA O FORMULÁRIO DOS TERMOS----------------------//


    $app->post("/admin/registrar-termos/enviar", function(){

        usuario::verificaLoginAdmin();

        $termo = new Termo();


        $termo->setData($_POST);



        $termo->registrarTermos();


        usuario::setSuccess("Termo registrado com sucesso!!");

        header("Location: /admin/todos-termos");
        exit;


    });
//---------ROTA PARA A PÁGINA DE TODOS OS TERMOS ----------------------//
$app->get('/admin/todos-termos', function() {  


	Usuario::verificaLoginAdmin();

	$usuario = Usuario::getFromSession();
	$termo = new Termo();


	$search = (isset($_GET['search'])) ? $_GET['search'] : "";
	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	if ($search != '') {

		$pagination = $termo->getPageSearchAll($search, $page);

	} else {

		$pagination = $termo->getPageAll($page);

	}

	$pages = [];

	for ($i=1; $i <= $pagination['pages']; $i++) { 
		array_push($pages, [
			'link'=>'/admin/todos-termos?page='.$i,
			'page'=>$i,
			'search'=>$search,
		]);
	}

	$page = new PageAdmin();

	$page->setTpl("admin-todos-termos",[
		
		"termos"=>$pagination['data'],
		"search"=>$search,
		'profileMsg'=>usuario::getSuccess(),
		"pages"=>$pages
	]);

});

//---------ROTA PARA A PÁGINA DE VISUALIZAÇÃO  DOS TERMOS ---------------------//

$app->get('/admin/termo-visualizar/:id_termos', function($id_termos) {  


	Usuario::verificaLoginAdmin();

	$termo = new Termo();

	$termo->get((int)$id_termos);

	$page = new PageAdmin();

	$page->setTpl("admin-termo-visualizar",[
		"value"=>$termo->getValues()

	]);
});

//---------ROTA PARA A PÁGINA DOS ARQUIVOS DO TERMO----------------------//

$app->get('/admin/todos-termos/arquivos/:id_termos', function($id_termos) {  


	Usuario::verificaLoginAdmin();

	$termo = new termo();

	$page = new PageAdmin();

	$page->setTpl("admin-arquivos-termos",[
		"id_termos"=>$termo->get((int)$id_termos),
		'arquivo'=>$termo->showArquivo($id_termos),
		"value"=>$termo->getValues()

	]);

});

//---------ROTA PARA ANEXAR ARQUIVO  - POST---------------------//

$app->post("/admin/termo/anexar-arquivo/:id_termos", function ($id_termos) {

	$termo = new Termo();

	$termo ->get((int)$id_termos);

	$termo ->setData($_POST);

	$termo ->moveArquivo();

	Usuario::setSuccess("Arquivo(s) Anexado(s) com Sucesso");

	header('Location: /admin/todos-termos');
	exit;

});


//---------ROTA PARA EDITAR ALTERAÇÃO DOS TERMOS----------------------//

$app->get('/admin/termo/editar/:id_termos', function($id_termos){
    
    Usuario::verificaLoginAdmin();

    $termo = new Termo();

    $termo->get((int)$id_termos);

    $page = new PageAdmin();

    $page ->setTpl("admin-termo-editar", array(
        "value"=>$termo->getValues(),
        'CallOpenMsg'=>usuario::getSuccess(),
        'errorRegister'=>usuario::getErrorRegister()  
    ));

});

//---------ROTA PARA O ENVIO DO FORMULÁRIO DE EDIÇÃO DOS TERMOS----------------------//

$app->post("/admin/termo/editar/:id_termos",function($id_termos){

    Usuario::verificaLoginAdmin();

    $termo = new Termo();


    $termo->get((int)$id_termos);

    $termo->setData($_POST);
    

    $termo->editarTermos();

    Usuario::setSuccess("Dados alterados com Sucesso");

    header("Location: /admin/todos-termos");
    exit;


});

//---------ROTA PARA A PÁGINA DE SITUAÇÃO DOS TERMOS ---------------------//

$app->get('/admin/termo-situacao/:id_termos', function($id_termos) {  


    Usuario::verificaLoginAdmin();

    $termo = new Termo();

    $page = new PageAdmin();

    $page->setTpl("admin-termo-situacao",[
        "id_termos"=>$termo->get((int)$id_termos),
        "value"=>$termo->getValues()

    ]);

});


//---------ROTA PARA A ALTERAÇÃO DA SITUAÇÃO DOS TERMOS ---------------------//

$app->post("/admin/termo/atualizar-situacao/:id_termos",function($id_termos){

    $termo = new Termo();

    $termo ->get((int)$id_termos);

    $termo ->setData($_POST);

    $termo ->editarSituacao();

    Usuario::setSuccess("Situação alterada com Sucesso");

    header("Location: /admin/todos-termos");
    exit;

});

//---------ROTA PARA A PÁGINA DA ALTERAÇÃO DOS ANALISTAS---------------------//

$app->get('/admin/termo/alteracao-analista/:id_termos', function($id_termos) {  


    Usuario::verificaLoginAdmin();

    $termo = new Termo();

    $page = new PageAdmin();


    $page->setTpl("admin-termo-alterar-analista",[
        "id_termos"=>$termo->get((int)$id_termos),
        "values"=>$termo->getValues(),
        "analistas"=>$termo->getAnalistas()

    ]);

});

$app->post("/admin/termo/alterar-analista/:id_termos",function($id_termos){

    $termo = new Termo();

    $termo ->get((int)$id_termos);

    $termo ->setData($_POST);

    var_dump($termo);
 

    $termo ->alterarAnalista();

    Usuario::setSuccess("Analista alterado com Sucesso");

    header("Location: /admin/todos-termos");
    exit;
});

