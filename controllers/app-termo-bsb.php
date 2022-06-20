<?php

use \Projeto\Page;
use \Projeto\Model\Usuario;
use \Projeto\Model\Termo;
		

//---------ROTA PARA DELETAR UM TERMO ----------------------//

    $app->get("/usuario/termos-bsb/delete/:id_termos",function($id_termos){

        $termos = new Termo();
       
        $termos->get((int)$id_termos);

     
        $termos->delete();


        Usuario::setSuccess("Termo removido com sucesso.");

        header("Location: /usuario/meus-termos-bsb");
        exit;
    });

    //---------ROTA PARA DELETAR UM ARQUIVO ----------------------//

    $app->get("/usuario/arquivos-termos-bsb/delete/:id_arquivoT",function($id_arquivoT){

        $arquivo = new Termo();
       
        $arquivo->getArquivos((int)$id_arquivoT);
       
       
        $arquivo->deletarArquivo($id_arquivoT);

        Usuario::setSuccess("Arquivo removido com sucesso.");

        header("Location: /usuario/meus-termos-bsb");
        exit;
    });


//---------ROTA PARA A ABERTURA DOS TERMOS----------------------//

    $app->get('/usuario/registrar-termos-bsb', function() {  


        usuario::verificaLogin();



        $page = new Page();

        $page->setTpl("usuario-abertura-termos-bsb",[
            'CallOpenMsg'=>usuario::getSuccess(),
            'errorRegister'=>usuario::getErrorRegister(),
            


        ]);

    });

//---------ROTA PARA O FORMULÁRIO DOS TERMOS----------------------//


    $app->post("/usuario/registrar-termos-bsb/enviar", function(){

        usuario::verificaLogin();

        $termo = new Termo();


        $termo->setData($_POST);



        $termo->registrarTermos();


        usuario::setSuccess("Termo registrado com sucesso!!");

        header("Location: /usuario/todos-termos-bsb");
        exit;


    });

//---------ROTA PARA A PÁGINA DOS TERMOS DO USUÁRIO----------------------//
    $app->get('/usuario/meus-termos-bsb', function() {  


        Usuario::verificaLogin();

        $usuario = Usuario::getFromSession();


        $search = (isset($_GET['search'])) ? $_GET['search'] : "";
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

        if ($search != '') {

            $pagination = $usuario->getPageSearchTermoBsb($search, $page);

        } else {

            $pagination = $usuario->getPageTermoBsb($page);

        }

        $pages = [];

        for ($i=1; $i <= $pagination['pages']; $i++) { 
            array_push($pages, [
                'link'=>'/usuario/meus-termos-bsb?page='.$i,
                'page'=>$i,
                'search'=>$search,
            ]);
        }

        $page = new Page();

        $page->setTpl("usuario-meus-termos-bsb",[
            
            "termos"=>$pagination['data'],
            "search"=>$search,
            'profileMsg'=>usuario::getSuccess(),
            "pages"=>$pages
        ]);

    });

//---------ROTA PARA A PÁGINA DE VISUALIZAÇÃO  DOS TERMOS ---------------------//

    $app->get('/usuario/termo-visualizar-bsb/:id_termos', function($id_termos) {  


        Usuario::verificaLogin();

        $termo = new Termo();

        $termo->get((int)$id_termos);

        $page = new Page();

        $page->setTpl("usuario-termo-visualizar-bsb",[
            "value"=>$termo->getValues()

        ]);
    });

//---------ROTA PARA EDITAR ALTERAÇÃO DOS TERMOS----------------------//

    $app->get('/usuario/termo/editar-bsb/:id_termos', function($id_termos){
    
        Usuario::verificaLogin();
    
        $termo = new Termo();
    
        $termo->get((int)$id_termos);
    
        $page = new Page();
    
        $page ->setTpl("usuario-termo-editar-bsb", array(
            "value"=>$termo->getValues(),
            'CallOpenMsg'=>usuario::getSuccess(),
            'errorRegister'=>usuario::getErrorRegister()  
        ));
    
    });

 //---------ROTA PARA O ENVIO DO FORMULÁRIO DE EDIÇÃO DOS TERMOS----------------------//

    $app->post("/usuario/termo/editar-bsb/:id_termos",function($id_termos){

        Usuario::verificaLogin();

        $termo = new Termo();


        $termo->get((int)$id_termos);
    
        $termo->setData($_POST);
        

        $termo->editarTermos();

        Usuario::setSuccess("Dados alterados com Sucesso");

        header("Location: /usuario/meus-termos-bsb");
        exit;


    });

//---------ROTA PARA A PÁGINA DE SITUAÇÃO DOS TERMOS ---------------------//

    $app->get('/usuario/termo-situacao-bsb/:id_termos', function($id_termos) {  


        Usuario::verificaLogin();

        $termo = new Termo();

        $page = new Page();

        $page->setTpl("usuario-termo-situacao-bsb",[
            "id_termos"=>$termo->get((int)$id_termos),
            "value"=>$termo->getValues()

        ]);

    });


//---------ROTA PARA A ALTERAÇÃO DA SITUAÇÃO DOS TERMOS ---------------------//

    $app->post("/usuario/termo/atualizar-situacao-bsb/:id_termos",function($id_termos){

        $termo = new Termo();

        $termo ->get((int)$id_termos);

        $termo ->setData($_POST);

        $termo ->editarSituacao();

        Usuario::setSuccess("Situação alterada com Sucesso");

        header("Location: /usuario/meus-termos-bsb");
        exit;
    });

//---------ROTA PARA A PÁGINA DE TODOS OS TERMOS ----------------------//
    $app->get('/usuario/todos-termos-bsb', function() {  


        Usuario::verificaLogin();

        $usuario = Usuario::getFromSession();
        $termo = new Termo();


        $search = (isset($_GET['search'])) ? $_GET['search'] : "";
        $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

        if ($search != '') {

            $pagination = $termo->getPageSearchBsb($search, $page);

        } else {

            $pagination = $termo->getPageAllBsb($page);

        }

        $pages = [];

        for ($i=1; $i <= $pagination['pages']; $i++) { 
            array_push($pages, [
                'link'=>'/usuario/todos-termos-bsb?page='.$i,
                'page'=>$i,
                'search'=>$search,
            ]);
        }

        $page = new Page();

        $page->setTpl("usuario-todos-termos-bsb",[
            
            "termos"=>$pagination['data'],
            "search"=>$search,
            'profileMsg'=>usuario::getSuccess(),
            "pages"=>$pages,
            "values"=>$termo->getValues()
        ]);

    });

//---------ROTA PARA ANEXAR ARQUIVO  - POST---------------------//

    $app->post("/usuario/termo/anexar-arquivo-bsb/:id_termos", function ($id_termos) {

        $termo = new Termo();

        $termo ->get((int)$id_termos);
    
        $termo ->setData($_POST);
    
        $termo ->moveArquivo();

        Usuario::setSuccess("Arquivo(s) Anexado(s) com Sucesso");

        header('Location: /usuario/meus-termos-bsb');
        exit;

    });

//---------ROTA PARA A PÁGINA DOS ARQUIVOS DO TERMO----------------------//

    $app->get('/usuario/meus-termos-bsb/arquivos/:id_termos', function($id_termos) {  


        Usuario::verificaLogin();

        $termo = new termo();

        $page = new Page();

        $page->setTpl("usuario-arquivos-termos-bsb",[
            "id_termos"=>$termo->get((int)$id_termos),
            'arquivo'=>$termo->showArquivo($id_termos),
            "value"=>$termo->getValues()

        ]);

    });

    //---------ROTA PARA PAINEL DE LOCAIS---------------------//

    $app->get('/usuario/termos-locais', function() {  


        usuario::verificaLogin();



        $page = new Page();

        $page->setTpl("usuario-termos-locais",[ ]);

    });




