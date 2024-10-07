<?php
// index.php

// Definindo a URL base, diferenciando entre localhost e produção
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define('BASE_URL', 'http://localhost/engenhariaGarc/'); // Ajuste 'seu_projeto' para o nome da pasta no localhost
} else {
    define('BASE_URL', 'https://www.engenhariagarc.com/');
}

// Definir constantes globais para caminhos base e caminhos de ativos
define('BASE_PATH_ASSETS', BASE_URL . 'assets/');
define('BASE_PATH', count(explode('/', trim($_SERVER['REQUEST_URI'], '/'))) >= 2 ? "../" : "./");


// Obtém a URL da solicitação
$url_path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
$url = isset($_GET['url']) ? $_GET['url'] : '';

// Define as rotas e seus controladores correspondentes
$routes = [
    '' => 'HomeController',
    'home' => 'HomeController',
    'quem-somos' => 'QuemSomosController',
    'servicos' => 'ServicosController',
    'servicos/engenharia-civil' => 'EngenhariaCivilController',
    'servicos/engenharia-eletrica' => 'EngenhariaEletricaController',
    'servicos/energia-solar' => 'EnergiaSolarController',
    'projetos' => 'ProjetosController',
    'contato' => 'ContatoController',
    // Adicione mais rotas conforme necessário
];

// Verifica se a rota existe
if (array_key_exists($url, $routes)) {
    // Obtém o nome do controlador correspondente à rota
    $controllerName = $routes[$url];

    // Inclui o arquivo do controlador
    require_once 'controllers/' . $controllerName . '.php';

    // Instancia o controlador
    $controller = new $controllerName();

    // Chama o método padrão do controlador (por exemplo, "index" ou "home")
    $controller->index();
} else {
    // Rota inválida, exiba uma página de erro ou redirecione para a página inicial
    echo 'Página não encontrada.';
}
