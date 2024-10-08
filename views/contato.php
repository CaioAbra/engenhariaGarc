<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="utf-8">
    <?php
    $pageTitle = ucwords(str_replace('-', ' ', basename($_SERVER['REQUEST_URI']))) . " | GARC";
    include 'components/heade.php';
    ?>
</head>

<body>
    <?php include 'components/navbar.php'; ?>

    <body>

        <main class="contato">
            <!-- Seção de Informações de Contato -->
            <section class="info-contato bg-light py-5">
                <div class="container text-center">
                    <h1 class="mb-4">Entre em Contato</h1>
                    <p class="lead">Entre em contato com a Engenharia GARC para solicitar um orçamento ou tirar dúvidas sobre nossos serviços.</p>
                    <div class="row mt-5">
                        <div class="col-md-4">
                            <i class="fas fa-phone fa-2x mb-3"></i>
                            <h5>Telefone</h5>
                            <p><a href="tel:11941262774">11 94126-2774</a><br><a href="tel:11941262774">11 94019-7369</a></p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-envelope fa-2x mb-3"></i>
                            <h5>E-mail</h5>
                            <p><a href="mailto:engenhariagarc@engenhariagarc.com">engenhariagarc@engenhariagarc.com</a></p>
                        </div>
                        <div class="col-md-4">
                            <i class="fas fa-map-marker-alt fa-2x mb-3"></i>
                            <h5>Localização</h5>
                            <p>Caieiras, SP</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Seção de Formulário de Contato -->
            <section class="formulario-contato py-5">
                <div class="container">
                    <h2 class="text-center mb-4">Envie uma Mensagem</h2>
                    <form action="envia_email.php" method="POST" class="form-contato">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Seu e-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensagem">Mensagem</label>
                            <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Escreva sua mensagem aqui..." required></textarea>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Seção de Mapa de Localização -->
            <section class="mapa-localizacao py-5">
                <div class="container text-center">
                    <h2 class="mb-4">Nossa Localização</h2>
                    <div class="mapa">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.409688931204!2d-46.74373628493554!3d-23.364546084774422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ceeb33ab8e36bb%3A0x4784049a4e024440!2sCaieiras%2C%20SP%2C%2007713-605!5e0!3m2!1spt-BR!2sbr!4v1696807064568!5m2!1spt-BR!2sbr"
                            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </section>



            <!-- Seção de Chamada para Ação -->
            <section class="chamada-contato text-center text-light bg-secondary py-5">
                <h2>Pronto para começar seu projeto?</h2>
                <a href="mailto:engenhariagarc@engenhariagarc.com" class="btn btn-light mt-3">Fale Conosco Agora</a>
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