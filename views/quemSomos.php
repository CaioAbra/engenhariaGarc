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

    <main class="quemSomos">
        <section class="bannerQuemSomos">
            <div class="container">
                <div class="row align-content-center">
                    <div class="col-12">
                        <h6>Quem Somos</h6>
                        <h1>Conheça a GARC</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-1">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-align-center">
                        <h4>
                            Especialistas em <span>Soluções Integradas</span>
                        </h4>

                        <p>
                            A <span>GARC Engenharia</span> é sua parceira em soluções inteligentes e sustentáveis. Com
                            uma abordagem
                            multiespecialista, oferecemos serviços personalizados para clientes industriais, comerciais
                            e residenciais. Nossa dedicação ao desenvolvimento sustentável e ao aprimoramento contínuo
                            garante resultados de alta qualidade, com soluções técnicas e econômicas sob medida para
                            cada projeto.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="missaoValores mt-1">
            <div class="container pt-1 pb-1">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                        <h4>Nossa <span>Missão</span></h4>
                        <p>
                            Nossa missão é oferecer soluções integradas e sustentáveis para
                            impulsionar o crescimento dos negócios
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-5">
                        <h4>Nossos <span>Valores</span></h4>
                        <ul>
                            <li>confiabilidade</li>
                            <li>envolvimento</li>
                            <li>respeito</li>
                            <li>compromisso</li>
                            <li>seriedade</li>
                            <li>responsabilidade</li>
                            <li>transparência</li>
                            <li>honestidade</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="diferenciais">
            <div class="container">
                <div class="row text-align-center">
                    <div class="col-12">
                        <h4>O que torna a <b>GARC</b> única?</h4>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-xl-5">
                        <p>
                            Ao escolher a GARC, você está optando por uma abordagem diferente. Nossa dedicação à
                            inovação, compromisso com a excelência e foco na satisfação do cliente nos destacam no
                            mercado. Descubra o que nos diferencia e por que somos a escolha certa para suas
                            necessidades.
                        </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="accordion">
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Experiência da equipe<span class="icon">&#43;</span>
                                </div>
                                <div class="accordion-content">
                                    Nossa equipe técnica é composta por engenheiros civis e
                                    eletricistas altamente qualificados, constantemente atualizados com os avanços do
                                    setor. Desenvolvemos projetos e supervisionamos obras residenciais, comerciais e
                                    industriais de todos os portes, oferecendo expertise e excelência em cada etapa do
                                    processo.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Atendimento personalizado<span class="icon">&#43;</span>
                                </div>
                                <div class="accordion-content">
                                    Na GARC Engenharia, valorizamos a singularidade de cada projeto! Nossa abordagem é
                                    centrada no cliente, buscando compreender suas necessidades e desejos para criar
                                    soluções sob medida. Priorizamos um atendimento cordial e ágil, garantindo que cada
                                    cliente se sinta verdadeiramente ouvido e atendido.
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header">
                                    Satisfação garantida<span class="icon">&#43;</span>
                                </div>
                                <div class="accordion-content">
                                    Nosso compromisso é com a plena satisfação do cliente. Ao transformar ideias em
                                    projetos concretos, priorizamos a qualidade, o prazo e o custo-benefício. Com nossa
                                    vasta experiência em gestão de obras e conhecimento técnico sólido, entregamos
                                    resultados que superam as expectativas, assegurando confiança e tranquilidade aos
                                    nossos clientes.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section class="whereJobs">
            <?php include 'components/whereJobs.php'; ?>
        </section>
    </main>

    <footer class="">
        <?php include 'components/footer.php'; ?>
    </footer>

    <?php include 'components/insertScripts.php'; ?>
</body>

</html>