<!-- home.php -->

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = "GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <main class="home">
        <section class="hero" style="background-image: url('<?php echo BASE_PATH_ASSETS; ?>img/hero.webp');">
            <div class="hero-text">
                <h1>Engenharia de Qualidade para o Futuro</h1>
                <p>Soluções inovadoras em Engenharia Civil e Elétrica</p>
                <a href="<?php echo BASE_URL; ?>servicos" class="btn btn-hero">Conheça nossos serviços</a>
            </div>
        </section>

        <section class="sobre-nos bg-light py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/sobreNos.webp" class="img-fluid rounded" alt="Nossa Empresa">
                    </div>

                    <div class="col-md-6">
                        <h2>Sobre a Engenharia GARC</h2>
                        <p>A Engenharia GARC nasceu com o objetivo de fornecer serviços de alta qualidade em engenharia civil e elétrica, sempre buscando soluções sustentáveis e inovadoras. Nossa missão é oferecer serviços que melhorem a qualidade de vida das pessoas, utilizando tecnologia e conhecimento de engenharia.</p>
                        <a href="<?php echo BASE_PATH; ?>quem-somos" class="btn btn-outline-secondary mt-3">Saiba Mais</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="nossos-servicos text-center py-5">
            <div class="container">
                <h2>Nossos Serviços</h2>
                <div class="row mt-4">
                    <!-- Serviço de Engenharia Elétrica -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="service-card">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/eletrica.webp" class="img-fluid" alt="Engenharia Elétrica">
                            <h5 class="mt-3">Engenharia Elétrica</h5>
                            <p>Soluções em instalações elétricas e projetos eficientes.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/engenharia-eletrica" class="btn btn-link">Saiba Mais</a>
                        </div>
                    </div>

                    <!-- Serviço de Engenharia Civil -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="service-card">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/civil.webp" class="img-fluid" alt="Engenharia Civil">
                            <h5 class="mt-3">Engenharia Civil</h5>
                            <p>Projetos e construções robustas e seguras para diversas finalidades.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/engenharia-civil" class="btn btn-link">Saiba Mais</a>
                        </div>
                    </div>

                    <!-- Serviço de Instalação Solar -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="service-card">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/solar.webp" class="img-fluid" alt="Instalação Solar">
                            <h5 class="mt-3">Instalação Solar</h5>
                            <p>Implementação de sistemas de energia solar para economia e sustentabilidade.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/energia-solar" class="btn btn-link">Saiba Mais</a>
                        </div>
                    </div>

                    <!-- Serviço de SPDA (Para-Raios) -->
                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="service-card">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/spda.webp" class="img-fluid" alt="Sistema de Proteção contra Descargas Atmosféricas">
                            <h5 class="mt-3">SPDA (Para-Raios)</h5>
                            <p>Proteção completa contra descargas atmosféricas com instalações de SPDA.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/spda" class="btn btn-link">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="diferenciais bg-primary text-light py-5">
            <div class="container">
                <h2 class="text-center">Por Que Escolher a GARC?</h2>
                <div class="row mt-4">
                    <div class="col-md-4 text-center">
                        <i class="fas fa-tools fa-3x mb-3"></i>
                        <h5 class="mt-3">Equipe Especializada</h5>
                        <p>Profissionais altamente qualificados prontos para atender suas necessidades.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fas fa-solar-panel fa-3x mb-3"></i>
                        <h5 class="mt-3">Soluções Sustentáveis</h5>
                        <p>Foco em energia renovável e engenharia responsável.</p>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fas fa-handshake fa-3x mb-3"></i>
                        <h5 class="mt-3">Compromisso com o Cliente</h5>
                        <p>Relacionamento baseado em confiança e transparência.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="clientes py-5 bg-light">
            <div class="container">
                <h2 class="text-center">Nossos Clientes</h2>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/clientes/santander.jpg" class="img-fluid" alt="Santander">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/clientes/itau.jpg" class="img-fluid" alt="Itaú">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/clientes/mtel.png" class="img-fluid" alt="M-tel">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/clientes/marcos_plastic.png" class="img-fluid" alt="Marcos Plastic">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/clientes/manserv.png" class="img-fluid" alt="Manserv">
                        </div>
                    </div>
                    <!-- Controles de navegação -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <!-- Paginação -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="depoimentos bg-light py-5">
            <div class="container">
                <h2 class="text-center">O que nossos clientes dizem</h2>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <blockquote class="blockquote">
                            <p>"Excelente atendimento e serviço de primeira qualidade! Recomendo a GARC para todos que buscam uma obra bem feita."</p>
                            <footer class="blockquote-footer">João Silva</footer>
                        </blockquote>
                    </div>
                    <!-- Repetir para mais depoimentos -->
                </div>
            </div>
        </section>

        <section class="chamada-contato text-center text-light bg-secondary py-5">
            <h2>Entre em Contato e Faça um Orçamento!</h2>
            <a href="<?php echo BASE_PATH; ?>contato" class="btn btn-light mt-3">Fale Conosco</a>
        </section>
    </main>

    <footer class="mt-1">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php include 'components/insertScripts.php'; ?>
</body>

</html>