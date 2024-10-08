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

    <main class="energia-solar">
        <!-- Seção de Introdução -->
        <section class="intro-solar bg-light py-5">
            <div class="container text-center">
                <h1 class="mb-4">Energia Solar</h1>
                <p class="lead">Aproveite a energia limpa e renovável para reduzir custos e contribuir para um futuro mais sustentável com os sistemas de energia solar da Engenharia GARC.</p>
            </div>
        </section>

        <!-- Seção de Serviços Detalhados -->
        <section class="servicos-solar py-5">
            <div class="container">
                <div class="row text-center">
                    <!-- Serviço: Instalação de Painéis Solares -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Instalação de Painéis Solares</h5>
                            <p>Instalação completa de sistemas de energia solar para residências e empresas, garantindo máxima eficiência.</p>
                        </div>
                    </div>

                    <!-- Serviço: Manutenção de Sistemas Solares -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Manutenção de Sistemas Solares</h5>
                            <p>Serviços de manutenção preventiva e corretiva para garantir a longevidade e o bom funcionamento dos painéis solares.</p>
                        </div>
                    </div>
                </div>

                <div class="row text-center">
                    <!-- Serviço: Consultoria em Energia Solar -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Consultoria em Energia Solar</h5>
                            <p>Analisamos seu consumo de energia e indicamos o melhor sistema de energia solar para sua casa ou empresa.</p>
                        </div>
                    </div>

                    <!-- Serviço: Projetos Personalizados -->
                    <div class="col-md-6 mb-4">
                        <div class="servico-detalhe p-4 bg-white shadow rounded">
                            <h5>Projetos Personalizados</h5>
                            <p>Desenvolvemos projetos personalizados de energia solar, ajustados às necessidades específicas de cada cliente.</p>
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
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-solar1.jpg" class="img-fluid rounded" alt="Projeto 1">
                        <h5 class="mt-3">Projeto Residencial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-solar2.jpg" class="img-fluid rounded" alt="Projeto 2">
                        <h5 class="mt-3">Projeto Comercial</h5>
                    </div>

                    <div class="col-md-4 mb-4">
                        <img src="<?php echo BASE_PATH_ASSETS; ?>img/projeto-solar3.jpg" class="img-fluid rounded" alt="Projeto 3">
                        <h5 class="mt-3">Projeto Industrial</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Seção de Benefícios da Energia Solar -->
        <section class="beneficios-solar py-5">
            <div class="container text-center">
                <h2>Benefícios da Energia Solar</h2>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <i class="fas fa-sun fa-3x mb-3"></i>
                        <h5>Economia de Energia</h5>
                        <p>Reduza seus custos de energia com sistemas solares eficientes e de alta performance.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-leaf fa-3x mb-3"></i>
                        <h5>Sustentabilidade</h5>
                        <p>Utilize uma fonte de energia limpa e renovável, contribuindo para a preservação do meio ambiente.</p>
                    </div>
                    <div class="col-md-4">
                        <i class="fas fa-tools fa-3x mb-3"></i>
                        <h5>Baixa Manutenção</h5>
                        <p>Sistemas solares demandam pouca manutenção, sendo um investimento de longo prazo com baixo custo operacional.</p>
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