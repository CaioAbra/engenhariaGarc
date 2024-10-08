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
                <div class="swiper mySwiperDepoimentos">
                    <div class="swiper-wrapper">
                        <!-- Depoimento 1 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"A GARC nos ajudou a construir um sistema de energia solar que reduziu nossa conta de luz em 40%. Recomendo demais!"</p>
                                <footer class="blockquote-footer">Carlos Martins</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 2 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Excelente atendimento e cumprimento de prazos. A equipe é muito competente e atenciosa."</p>
                                <footer class="blockquote-footer">Fernanda Souza</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 3 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Trabalhar com a GARC foi uma experiência incrível. O projeto de SPDA foi executado com precisão e dentro do orçamento."</p>
                                <footer class="blockquote-footer">João Silva</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 4 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"A equipe da GARC trouxe soluções inovadoras para o nosso projeto de construção civil. Estamos extremamente satisfeitos."</p>
                                <footer class="blockquote-footer">Marcos Lima</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 5 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Eles cuidaram de todo o sistema elétrico da nossa empresa com grande eficiência. O suporte técnico foi excelente."</p>
                                <footer class="blockquote-footer">Ana Paula</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 6 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"A GARC entregou nosso projeto de energia solar antes do prazo e com uma qualidade impecável. Altamente recomendados!"</p>
                                <footer class="blockquote-footer">Maria Oliveira</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 7 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Uma das melhores empresas com quem já trabalhei. A GARC é sinônimo de qualidade e compromisso com o cliente."</p>
                                <footer class="blockquote-footer">Pedro Azevedo</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 8 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Recomendo a GARC para qualquer projeto elétrico. A equipe é super competente e focada na segurança."</p>
                                <footer class="blockquote-footer">Rafael Gomes</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 9 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"Profissionais altamente qualificados e um atendimento impecável. Voltaremos a trabalhar com a GARC em futuros projetos."</p>
                                <footer class="blockquote-footer">Isabela Mendes</footer>
                            </blockquote>
                        </div>
                        <!-- Depoimento 10 -->
                        <div class="swiper-slide">
                            <blockquote class="blockquote text-center">
                                <p>"A GARC nos ajudou a finalizar o projeto de para-raios em tempo recorde, com qualidade e segurança. Parabéns!"</p>
                                <footer class="blockquote-footer">Rodrigo Campos</footer>
                            </blockquote>
                        </div>
                    </div>
                    <!-- Paginação -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <section class="chamada-contato text-center text-light bg-secondary py-5">
            <div class="container">
                <h2>Entre em Contato e Faça um Orçamento!</h2>
                <a href="<?php echo BASE_PATH; ?>contato" class="btn btn-light mt-3">Fale Conosco</a>
            </div>
        </section>

    </main>

    <footer class="mt-5">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php include 'components/insertScripts.php'; ?>
</body>

</html>