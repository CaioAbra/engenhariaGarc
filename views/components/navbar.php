<nav class="navbar">
    <div class="logo">
        <a href="<?php echo BASE_URL; ?>"><img src="<?php echo BASE_PATH_ASSETS; ?>img/Logo_White.png" alt="Logo da Empresa"></a>
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
    </div>

    <div class="collapse">
        <ul class="nav-links">
            <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
            <li><a href="<?php echo BASE_URL; ?>quem-somos">Quem Somos</a></li>
            <li class="dropdown">
                <a class="dropdown-title" href="<?php echo BASE_URL; ?>servicos">
                    Serviços
                    <svg class="icon-dropdown desactived" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>

                    <svg class="icon-dropdown actived" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M19 20.7l-7-7.1-7 7.1" />
                    </svg>
                </a>
                <div class="dropdown-content">
                    <a href="<?php echo BASE_URL; ?>servicos/engenharia-civil">Engenharia Civil</a>
                    <a href="<?php echo BASE_URL; ?>servicos/engenharia-eletrica">Engenharia Elétrica</a>
                    <a href="<?php echo BASE_URL; ?>servicos/energia-solar">Energia Solar</a>
                    <a href="<?php echo BASE_URL; ?>servicos/spda">SPDA</a>
                </div>
            </li>
            <!-- <li><a href="<?php echo BASE_URL; ?>projetos">Projetos</a></li> -->
            <li><a href="<?php echo BASE_URL; ?>contato">Contato</a></li>
        </ul>
    </div>
</nav>

<div class="block"></div>