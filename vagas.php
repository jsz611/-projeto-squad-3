<?php require("includes/header.php") ?>
<?php require("includes/conexao.php") ?>

<div class="jumbotron jumbotron-fluid text-center text-white my-0">

    <div class="container py-5">
        <h1 class="display-3">Estou de Volta</h1>
        <h2 class="h4 my-5">Procure uma oportunidade de emprego</h2>
        <form class="form mx-auto">
            <input class="form-control mx-auto" type="search" placeholder="Ex. Segurança, Porteiro." aria-label="Ex. Segurança, Porteiro">
            <a href="#vagas" class="btn btn-primary mx-auto my-5">Pesquisar</a> 
        </form>
    </div>
</div>

<div class="container-fluid bg-light text-center py-5" id="vagas">
    <h2 class="text-center pb-5 text-primary">Vagas Publicadas</h2>
    <div class="row text-center">

        <?php
        if ($result->num_rows > 0) {

            // output data of each row
            while ($row = $result->fetch_assoc()) {
        ?>


                <div class="card mx-auto shadow bg-white rounded my-4" style="width: 18rem;">
                    <img class="img_cards" class="card-img-top" src="<?php echo $row['imagem']; ?>" alt="" width="100%">
                    <div class="card-body d-flex flex-column mt-auto ">
                        <h5 class="card-title"><?php echo $row['vaga']; ?></h5>
                        <p class="card-text py-3"><?php echo $row['descricao']; ?> </p>
                        <p class="card-text py-3"><strong>R$</strong><?php echo $row['salario']; ?></p>
                        <p class="card-text py-3"><?php echo $row['localizacao']; ?></p>
                        <btn href="" class="btn btn-primary mt-auto" 
                         onclick="btncolor(this)">Candidatar-se</btn>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>

    </div>

</div>


<?php require("includes/footer.php") ?>