<?php
// index.php

// Função para validar e sanitizar a entrada do usuário
function sanitize_input($input)
{
    return filter_var($input, FILTER_SANITIZE_SPECIAL_CHARS);
}

// Obtém o caminho da URL
$url_path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
// Divide a URL em partes usando "/"
$path_parts = explode('/', trim($url_path, '/'));

// Obtém a URL da solicitação e a sanitiza
$url = isset($_GET['url']) ? sanitize_input($_GET['url']) : '';

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

// Definir constantes globais para caminhos base e caminhos de ativos
define('BASE_PATH', count($path_parts) >= 3 ? "../" : "./");
define('BASE_PATH_ASSETS', count($path_parts) >= 3 ? "../assets/" : "./assets/");

// Verifica se a rota existe
if (array_key_exists($url, $routes)) {
    // Obtém o nome do controlador correspondente à rota
    $controllerName = $routes[$url];

    // Verifica se o arquivo do controlador existe antes de incluí-lo
    $controllerFile = 'controllers/' . $controllerName . '.php';
    if (file_exists($controllerFile)) {
        // Inclui o arquivo do controlador
        require_once $controllerFile;

        // Verifica se a classe do controlador existe antes de instanciá-la
        if (class_exists($controllerName)) {
            // Instancia o controlador
            $controller = new $controllerName();

            // Chama o método padrão do controlador (por exemplo, "index" ou "home")
            $controller->index();
        } else {
            // Classe do controlador não encontrada
            echo 'Erro: Controlador não encontrado.';
        }
    } else {
        // Arquivo do controlador não encontrado
        echo 'Erro: Arquivo do controlador não encontrado.';
    }
} else {
    // Rota inválida, exiba uma página de erro ou redirecione para a página inicial
    echo 'Página não encontrada.';
}
