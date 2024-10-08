<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <?php
    $pageTitle = "Engenharia Elétrica | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php';  ?>

    <main class="engenharia-eletrica">
        <!-- Seção de Introdução -->
        <section class="intro-eletrica bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">Engenharia Elétrica</h1>
                <p class="lead">Oferecemos serviços completos de engenharia elétrica, desde instalações residenciais até projetos industriais de alta complexidade.</p>
            </div>
        </section>

        <!-- Seção de Serviços Detalhados -->
        <section class="servicos-eletrica py-5">
            <div class="container">
                <div class="row text-center">
                    <!-- Serviço: Instalações Elétricas -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Instalações Elétricas</h5>
                            <p>Execução de instalações elétricas em projetos residenciais, comerciais e industriais, garantindo eficiência e segurança.</p>
                        </div>
                    </div>

                    <!-- Serviço: Manutenção Elétrica -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Manutenção Elétrica</h5>
                            <p>Manutenção preventiva e corretiva de sistemas elétricos, com foco em reduzir custos e garantir a segurança.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Serviço: Projetos Industriais -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Projetos Industriais</h5>
                            <p>Desenvolvimento de projetos elétricos para indústrias, com soluções eficientes e personalizadas para cada tipo de processo.</p>
                        </div>
                    </div>

                    <!-- Serviço: Eficiência Energética -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Eficiência Energética</h5>
                            <p>Projetos de otimização de energia elétrica, ajudando a reduzir custos e promover o uso sustentável da energia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Projetos Recentes -->
        <section class="projetos-recentes bg-light py-5 d-none">
            <div class="container">
                <h2 class="text-center mb-4">Projetos Recentes</h2>
                <div class="row text-center">
                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-eletrica1.jpg" class="img-fluid rounded" alt="Projeto 1">
                        <h5 class="mt-3">Instalação Residencial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-eletrica2.jpg" class="img-fluid rounded" alt="Projeto 2">
                        <h5 class="mt-3">Projeto Comercial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-eletrica3.jpg" class="img-fluid rounded" alt="Projeto 3">
                        <h5 class="mt-3">Projeto Industrial</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Diferenciais Técnicos -->
        <section class="diferenciais-eletrica py-5">
            <div class="container text-center">
                <h2>Diferenciais Técnicos</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <i class="fas fa-check-circle fa-3x mb-3"></i>
                        <h5>Qualidade e Segurança</h5>
                        <p>Garantimos qualidade em cada fase do projeto, priorizando a segurança e a durabilidade dos sistemas elétricos.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-cogs fa-3x mb-3"></i>
                        <h5>Tecnologia Avançada</h5>
                        <p>Utilizamos as mais modernas tecnologias para garantir eficiência e precisão nas execuções elétricas.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-leaf fa-3x mb-3"></i>
                        <h5>Sustentabilidade</h5>
                        <p>Nossos projetos são desenvolvidos com foco em soluções energéticas sustentáveis e de baixo impacto ambiental.</p>
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

    <footer class=" mt-5">
        <?php include 'components/footer.php'; ?>
    </footer>
    <?php
    include 'components/insertScripts.php';
    ?>

</body>

</html>