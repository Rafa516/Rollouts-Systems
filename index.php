<?php 
session_start();

//dependências
require_once("models/autoload.php");

//name space

$app = new \Slim\Slim(); 

$app->config('debug', true);

require_once("controllers/app-usuario.php");
require_once("controllers/app-admin.php");
require_once("controllers/app-admin-rollout.php");
require_once("controllers/app-admin-termo.php");
require_once("controllers/app-termo-bsb.php");
require_once("controllers/app-termo-rj.php");
require_once("controllers/app-termo-rec.php");
require_once("controllers/app-termo-flr.php");
require_once("controllers/app-rollout-bsb.php");
require_once("controllers/app-rollout-rj.php");
require_once("controllers/app-rollout-rec.php");
require_once("controllers/app-rollout-flr.php");
require_once("controllers/funcoes.php");


$app->run();

 ?>