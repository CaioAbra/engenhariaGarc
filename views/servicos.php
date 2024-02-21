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
        <section class="banner banner-servicos">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12">
                        <h6>Nossos Serviços</h6>
                        <h1>Serviços oferecidos pela GARC</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>
                            Na <b>GARC</b> Engenharia, oferecemos uma ampla gama de serviços para atender às diversas
                            necessidades de nossos clientes.<br>
                            Com uma equipe altamente qualificada e experiente, estamos
                            comprometidos em fornecer soluções personalizadas e de alta qualidade em cada projeto que
                            realizamos.<br>
                            Abaixo estão alguns dos principais serviços que oferecemos:
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo BASE_PATH; ?>servicos/engenharia-civil" class="card-link">
                            <div class="card card-engenharia-civil">
                                <div class="card-body">
                                    <h5 class="card-title">Civil</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo BASE_PATH; ?>servicos/engenharia-eletrica" class="card-link">
                            <div class="card card-engenharia-eletrica">
                                <div class="card-body">
                                    <h5 class="card-title">Elétrica</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <a href="<?php echo BASE_PATH; ?>servicos/energia-solar" class="card-link">
                            <div class="card card-energia-solar">
                                <div class="card-body">
                                    <h5 class="card-title">Sustentável</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <h3>O que mais a <b>GARC</b> tem a oferecer:</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-consultoria">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Consultoria</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Além dos serviços técnicos, também fornecemos consultoria especializada e
                                        gerenciamento de projetos para garantir o sucesso de sua empreitada. Desde a
                                        elaboração do plano inicial até a supervisão da execução, estamos ao seu lado
                                        para garantir que tudo seja entregue dentro do prazo e do orçamento previstos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="card card-acordion card-servicos-personalizados">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Serviços Personalizados</h5>
                            </div>
                            <div class="collapseCard">
                                <div class="card-body">
                                    <p>
                                        Entendemos que cada projeto é único, por isso estamos sempre dispostos a adaptar
                                        nossos serviços às necessidades específicas de nossos clientes. Se você precisar
                                        de algo além do padrão, entre em contato conosco e teremos o prazer de discutir
                                        suas necessidades e desenvolver uma solução sob medida para você.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="why">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <h3>
                            Por que escolher a <span>GARC</span>?
                        </h3>
                        <p>
                            Na GARC Engenharia, nosso compromisso é superar as expectativas de nossos clientes em cada
                            projeto que realizamos. Entre em contato conosco hoje mesmo para saber como podemos ajudá-lo
                            a transformar sua visão em realidade.
                        </p>

                        <a href="<?php echo BASE_PATH; ?>contato">
                            Fale conosco !
                        </a>
                        
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="imageContato">
                            <img src="<?php echo BASE_PATH_ASSETS; ?>img/entreEmContato.jpg" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php
    include 'components/insertScripts.php';
    ?>
</body>

</html>