<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    // $pageTitle = ucfirst(basename($_SERVER['REQUEST_URI'])) . " | GARC";
    $pageTitle = ucwords(str_replace('-', ' ', basename($_SERVER['REQUEST_URI']))) . " | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <main class="quem-somos">
        <!-- Seção de Introdução -->
        <section class="introducao bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">Sobre a Engenharia GARC</h1>
                <p class="lead">A Engenharia GARC é uma empresa que nasceu com o objetivo de oferecer soluções de alta qualidade em engenharia civil e elétrica, sempre com foco em sustentabilidade, inovação e eficiência.</p>
            </div>
        </section>

        <!-- Seção de História e Missão -->
        <section class="historia-missao py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2>História e Missão</h2>
                        <p>A GARC foi fundada com o propósito de ser referência em soluções de engenharia. Nossa missão é fornecer serviços que melhorem a qualidade de vida, através de inovações tecnológicas e um forte compromisso com a sustentabilidade.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/quem-somos.webp" class="img-fluid rounded" alt="Nossa história">
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Diferenciais -->
        <section class="diferenciais bg-secondary text-light py-5">
            <div class="container text-center">
                <h2>Nossos Diferenciais</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <i class="fas fa-check-circle fa-3x mb-3"></i>
                        <h5>Qualidade e Compromisso</h5>
                        <p>Garantimos serviços de excelência com foco no prazo e na satisfação do cliente.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-people-carry fa-3x mb-3"></i>
                        <h5>Equipe Especializada</h5>
                        <p>Profissionais altamente capacitados para atender suas necessidades.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-leaf fa-3x mb-3"></i>
                        <h5>Soluções Sustentáveis</h5>
                        <p>Incorporamos práticas sustentáveis em todos os projetos que desenvolvemos.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Valores e Inovação -->
        <section class="valores-inovacao py-5 bg-light">
            <div class="container">
                <h2 class="text-center mb-4">Nossos Valores e Inovação</h2>
                <div class="row text-center">
                    <!-- Valor 1 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-balance-scale fa-3x mb-2"></i>
                        <h5>Integridade</h5>
                        <p>Comprometidos com a transparência e ética em todos os nossos projetos e relacionamentos.</p>
                    </div>
                    <!-- Valor 2 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-lightbulb fa-3x mb-2"></i>
                        <h5>Inovação</h5>
                        <p>Utilizamos tecnologia de ponta para oferecer soluções sustentáveis e eficientes em engenharia.</p>
                    </div>
                    <!-- Valor 3 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-users fa-3x mb-2"></i>
                        <h5>Colaboração</h5>
                        <p>Trabalhamos em equipe, priorizando o sucesso de cada projeto com foco no cliente.</p>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <h5>Tecnologia de Ponta</h5>
                        <p>Nosso diferencial está no uso de tecnologias modernas para garantir eficiência e qualidade em cada projeto.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/tecnologia.webp" class="img-fluid rounded" alt="Tecnologia de ponta">
                    </div>
                </div>
            </div>
        </section>


        <!-- Seção de Certificações e Projetos -->
        <section class="certificacoes-projetos bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Certificações e Projetos</h2>
                <div class="row text-center">
                    <!-- Certificação ou Projeto 1 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-award fa-3x mb-2"></i>
                        <h5>Certificação ISO 9001</h5>
                        <p>Garantia de qualidade e eficiência em todos os processos.</p>
                    </div>
                    <!-- Certificação ou Projeto 2 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-project-diagram fa-3x mb-2"></i>
                        <h5>Projeto de Energia Solar</h5>
                        <p>Execução de projetos de energia renovável em larga escala.</p>
                    </div>
                    <!-- Certificação ou Projeto 3 -->
                    <div class="col-md-4 mb-4">
                        <i class="fas fa-hard-hat fa-3x mb-2"></i>
                        <h5>Projeto de SPDA</h5>
                        <p>Implantação de Sistemas de Proteção contra Descargas Atmosféricas.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="mt-5">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php include 'components/insertScripts.php'; ?>
</body>

</html>