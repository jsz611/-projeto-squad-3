<?php require('includes/header.php'); ?>

<!--CAROUSEL-->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-pause="false">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>

    <!--TELA INICIAL-->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            <div class="carousel-caption text-dark" style="bottom: 100px">
                <a href="index.php">
                    <img src="assets/img/logo2.png" width="200px" class="" alt="">
                </a>
                <h5 class="py-2 py-md-5">Oportunidade</h5>
                <p>Propostas de emprego aqui cadastradas estão visíveis ao usuário, tendo as vagas exclusividade em contratar candidatos Egressos do Sistema Prisional.</p>
            </div>
        </div>

        <!--TELA APRESENTAÇÃO-->
        <div class="carousel-item">
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            <div class="carousel-caption text-dark d-md-block">
                <img src="assets/img/homemespelho.jpeg" class="espelho" alt="">
                <h5 class="py-2 py-md-5">Vantagem</h5>
                <p class="">A grande vantagem do "Estou de Volta" é o viés social. Possibilitando unir interesses que muitas vezes não se encontram pela ausência de um ambiente de fácil acesso e focado em priorizar as pessoas pertencentes a esse grupos em situação de desvantagem e fragilidade.</p>
            </div>
        </div>

        <!--TELA ENTRAR CADASTRAR-->
        <div class="carousel-item">
            <img src="assets/img/fundo-branco.png" class="expandir" alt="...">
            <div class="carousel-caption text-light" style="bottom: 100px">
                <a href="index.php">
                    <img src="assets/img/logo2.png" width="200px" alt="">
                </a>
                <br>
                <a class="btn btn-primary btn-lg tamanhobotao mb-3 mt-5" href="login.php">Entrar</a>
                <br>
                <a class="btn btn-primary btn-lg tamanhobotao" href="cadastro.php">Cadastrar</a>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<?php require('includes/footer.php'); ?>
