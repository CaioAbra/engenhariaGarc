<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = ucwords(str_replace('-', ' ', basename($_SERVER['REQUEST_URI']))) . " | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <main class="engenharia-civil">
        <!-- Seção de Introdução -->
        <section class="intro-civil bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">Engenharia Civil</h1>
                <p class="lead">Na Engenharia GARC, oferecemos serviços especializados em alvenaria, manutenção, pintura, revestimento e serralheria, sempre com foco em qualidade e eficiência.</p>
            </div>
        </section>

        <!-- Seção de Serviços Detalhados -->
        <section class="servicos-civil py-5">
            <div class="container">
                <div class="row text-center">
                    <!-- Serviço: Alvenaria -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Alvenaria</h5>
                            <p>Execução de serviços de alvenaria com máxima precisão, desde fundações até acabamentos de parede e estrutura.</p>
                        </div>
                    </div>

                    <!-- Serviço: Manutenção -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Manutenção</h5>
                            <p>Manutenção preventiva e corretiva para garantir a durabilidade e o bom funcionamento das estruturas e instalações.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Serviço: Pintura -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Pintura</h5>
                            <p>Serviços de pintura residencial e comercial, com acabamentos de alta qualidade e produtos de primeira linha.</p>
                        </div>
                    </div>

                    <!-- Serviço: Revestimento -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Revestimento</h5>
                            <p>Revestimentos internos e externos, utilizando os melhores materiais para acabamentos duráveis e estéticos.</p>
                        </div>
                    </div>

                    <!-- Serviço: Serralheria -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Serralheria</h5>
                            <p>Projetos e execução de serralheria com foco em qualidade e precisão para estruturas metálicas personalizadas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Projetos Recentes -->
        <section class="projetos-recentes bg-light py-5">
            <div class="container">
                <h2 class="text-center mb-4">Projetos Recentes</h2>
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-civil1.webp" class="img-fluid rounded" alt="Projeto 1">
                        <h5 class="mt-3">Projeto Residencial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-civil2.webp" class="img-fluid rounded" alt="Projeto 2">
                        <h5 class="mt-3">Projeto Comercial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-civil3.webp" class="img-fluid rounded" alt="Projeto 3">
                        <h5 class="mt-3">Reforma Industrial</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Diferenciais Técnicos -->
        <section class="diferenciais-civil py-5">
            <div class="container text-center">
                <h2>Diferenciais Técnicos</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <i class="fas fa-check-circle fa-3x mb-3"></i>
                        <h5>Qualidade e Segurança</h5>
                        <p>Garantimos qualidade em cada fase do projeto, priorizando a segurança e a durabilidade.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-cogs fa-3x mb-3"></i>
                        <h5>Tecnologia de Ponta</h5>
                        <p>Utilizamos as mais modernas tecnologias para garantir eficiência e precisão nas execuções.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-leaf fa-3x mb-3"></i>
                        <h5>Sustentabilidade</h5>
                        <p>Nossos projetos são desenvolvidos com foco em soluções sustentáveis para reduzir impactos ambientais.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Chamada para Ação -->
        <section class="chamada-contato text-center text-light bg-secondary py-5">
            <h2>Entre em Contato para Solicitar um Orçamento!</h2>
            <a href="<?php echo BASE_PATH; ?>contato" class="btn btn-light mt-3">Fale Conosco</a>
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