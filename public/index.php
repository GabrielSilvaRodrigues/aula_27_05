<?php
require_once __DIR__ . '/../vendor/autoload.php';
use src\Routes\Routes;
use src\Controllers\AlunoController;

$routes = new Routes();
$routes->add('POST', 'api/aluno', [new AlunoController(), 'criar']);
$routes->add('GET', 'aluno/cadastro',[new AlunoController(), 'mostrarFormulario']);

?>