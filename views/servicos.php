<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = "Serviços | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>


    <main class="servicos">
        <!-- Seção de Introdução -->
        <section class="intro-servicos bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">Nossos Serviços</h1>
                <p class="lead">Na Engenharia GARC, oferecemos uma gama de serviços especializados em engenharia civil e elétrica, com foco em soluções sustentáveis e inovadoras.</p>
            </div>
        </section>

        <!-- Seção de Serviços -->
        <section class="servicos-detalhes py-5">
            <div class="container">
                <div class="row text-center">
                    <!-- Serviço 1: Engenharia Civil -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-card p-4 bg-white shadow rounded">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/engenharia-civil.webp" class="img-fluid mb-3" alt="Engenharia Civil">
                            <h5>Engenharia Civil</h5>
                            <p>Projetos e execução de obras com alta qualidade, desde fundações até acabamentos. Garantimos a entrega no prazo e com os melhores materiais.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/engenharia-civil" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                        </div>
                    </div>

                    <!-- Serviço 2: Engenharia Elétrica -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-card p-4 bg-white shadow rounded">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/engenharia-eletrica.webp" class="img-fluid mb-3" alt="Engenharia Elétrica">
                            <h5>Engenharia Elétrica</h5>
                            <p>Soluções completas em sistemas elétricos, desde instalações residenciais até sistemas industriais complexos. Garantia de eficiência e segurança.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/engenharia-eletrica" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Serviço 3: Instalação de Energia Solar -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-card p-4 bg-white shadow rounded">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/energia-solar.webp" class="img-fluid mb-3" alt="Energia Solar">
                            <h5>Instalação de Energia Solar</h5>
                            <p>Reduza seus custos de energia com sistemas de geração de energia solar. Projetos personalizados para residências e empresas.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/energia-solar" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                        </div>
                    </div>

                    <!-- Serviço 4: SPDA (Para-Raios) -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-card p-4 bg-white shadow rounded">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/spdaServicos.webp" class="img-fluid mb-3" alt="SPDA (Para-Raios)">
                            <h5>SPDA (Para-Raios)</h5>
                            <p>Proteja sua edificação com sistemas completos de proteção contra descargas atmosféricas. Projeto e instalação de SPDA com alta eficiência.</p>
                            <a href="<?php echo BASE_URL; ?>servicos/spda" class="btn btn-outline-primary mt-3">Saiba Mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-5">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php
    include 'components/insertScripts.php';
    ?>
</body>

</html>