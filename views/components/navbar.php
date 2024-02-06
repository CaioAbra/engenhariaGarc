<?php
// Obtém o caminho da URL
$url_path = $_SERVER['REQUEST_URI'];
// Divide a URL em partes usando "/"
$path_parts = explode('/', trim($url_path, '/'));
// Dependendo do número de partes no caminho, você define diferentes caminhos
if (count($path_parts) >= 3) {
    $base_path_assets = "../assets/";
    $base_path = "../";
} else {
    $base_path_assets = "./assets/";
    $base_path = "./";
}
?>
<nav class="navbar">
    <div class="logo">
        <!-- <a href="./"><img src="<?php echo $base_path_assets . 'img/Logo_White.png'; ?>" alt="Logo da Empresa"></a> -->
        <a href="<?php echo $base_path; ?>"><img src="<?php echo $base_path_assets . 'img/Logo_White.png'; ?>" alt="Logo da Empresa"></a>
    </div>

    <div class="menu-icon" id="menuIcon">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="icon-hamburguer">
            <path d="M9 8V6H21V8H9Z" />
            <path d="M3 13H21V11H3V13Z" />
            <path d="M9 18H21V16H9V18Z" />
        </svg>


        <svg class="icon-hamburguer-close" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>


        <!-- <img src="./assets/img/icones/menu_icon.svg" alt="Ícone SVG"> -->


    </div>

    <div class="collapse">
        <ul class="nav-links">
            <li><a href="<?php echo $base_path; ?>">Home</a></li>
            <li><a href="<?php echo $base_path . 'quem-somos'; ?>">Quem Somos</a></li>
            <!-- <li><a href="./quem-somos">Quem Somos</a></li> -->
            <li class="dropdown">
                <!-- <a class="dropdown-title" href="javascript:void(0)"> -->
                <a class="dropdown-title" href="<?php echo $base_path . 'servicos'; ?>">
                <!-- <a class="dropdown-title" href="./servicos"> -->
                    Serviços
                    <svg class="icon-dropdown desactived" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>

                    <svg class="icon-dropdown actived" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 20.7l-7-7.1-7 7.1" />
                    </svg>
                </a>
                <div class="dropdown-content">
                    <a href="<?php echo $base_path . 'servicos/engenharia-civil'; ?>">Engenharia Civil</a>
                    <!-- <a href="./servicos/engenharia-civil">Engenharia Civil</a> -->
                    <a href="<?php echo $base_path . 'servicos/engenharia-eletrica'; ?>">Engenharia Elétrica</a>
                    <!-- <a href="./servicos/engenharia-eletrica">Engenharia Elétrica</a> -->
                    <a href="<?php echo $base_path . 'servicos/energia-solar'; ?>">Energia Solar</a>
                    <!-- <a href="./servicos/energia-solar">Energia Solar</a> -->
                </div>
            </li>
            <li><a href="<?php echo $base_path . 'projetos'; ?>">Projetos</a></li>
            <!-- <li><a href="./projetos">Projetos</a></li> -->
            <li><a href="<?php echo $base_path . 'contato'; ?>">Contato</a></li>
            <!-- <li><a href="./contato">Contato</a></li> -->
        </ul>
    </div>
</nav>

<div class="block"></div>