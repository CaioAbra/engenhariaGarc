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

    <main class="spda">
        <!-- Seção de Introdução -->
        <section class="intro-spda bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">SPDA - Sistema de Proteção contra Descargas Atmosféricas</h1>
                <p class="lead">Proteja sua edificação contra raios e descargas atmosféricas com um sistema SPDA eficiente e certificado pela Engenharia GARC.</p>
            </div>
        </section>

        <!-- Seção de Serviços Detalhados -->
        <section class="servicos-spda py-5">
            <div class="container">
                <div class="row text-center">
                    <!-- Serviço: Instalação de SPDA -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Instalação de SPDA</h5>
                            <p>Instalação de sistemas de proteção contra raios, garantindo a segurança de edifícios e estruturas, de acordo com as normas vigentes.</p>
                        </div>
                    </div>

                    <!-- Serviço: Manutenção de SPDA -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Manutenção de SPDA</h5>
                            <p>Serviços de manutenção preventiva e corretiva de sistemas SPDA para garantir sua eficiência e prolongar sua vida útil.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Serviço: Consultoria em SPDA -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Consultoria em SPDA</h5>
                            <p>Oferecemos consultoria especializada para garantir que sua edificação esteja protegida contra descargas atmosféricas.</p>
                        </div>
                    </div>

                    <!-- Serviço: Projetos Personalizados -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Projetos Personalizados de SPDA</h5>
                            <p>Desenvolvemos projetos de SPDA adaptados às necessidades de cada cliente, sempre seguindo as normas técnicas mais exigentes.</p>
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
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-spda1.jpg" class="img-fluid rounded" alt="Projeto 1">
                        <h5 class="mt-3">Instalação Residencial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-spda2.jpg" class="img-fluid rounded" alt="Projeto 2">
                        <h5 class="mt-3">Instalação Comercial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-spda3.jpg" class="img-fluid rounded" alt="Projeto 3">
                        <h5 class="mt-3">Instalação Industrial</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Benefícios do SPDA -->
        <section class="beneficios-spda py-5">
            <div class="container text-center">
                <h2>Benefícios do SPDA</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <i class="fas fa-bolt fa-3x mb-3"></i>
                        <h5>Proteção Completa</h5>
                        <p>Garanta a proteção da sua edificação contra descargas atmosféricas e previna danos causados por raios.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-shield-alt fa-3x mb-3"></i>
                        <h5>Segurança Certificada</h5>
                        <p>Nossos sistemas de SPDA seguem as mais rigorosas normas de segurança, garantindo total proteção.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-tools fa-3x mb-3"></i>
                        <h5>Baixa Manutenção</h5>
                        <p>Com a devida instalação e manutenção, os sistemas SPDA têm alta durabilidade e requerem pouca manutenção.</p>
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