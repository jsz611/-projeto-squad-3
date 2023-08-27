<?php
require("includes/header.php");
require("includes/conexao.php");

$sql = "SELECT * FROM vagas";
$result = mysqli_query($conexao, $sql);
?>

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
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="card mx-auto shadow bg-white rounded my-4" style="width: 18rem;">
            <img class="img_cards" class="card-img-top" src="<?php echo $row['imagem']; ?>" alt="" width="100%">
            <div class="card-body d-flex flex-column mt-auto ">
                <h5 class="card-title"><?php echo $row['vaga']; ?></h5>
                <p class="card-text py-3"><?php echo $row['descricao']; ?> </p>
                <p class="card-text py-3"><strong>R$</strong><?php echo $row['salario']; ?></p>
                <p class="card-text py-3"><?php echo $row['localizacao']; ?></p>
                <a href="#" class="btn btn-primary mt-auto" onclick="btncolor(this)">Candidatar-se</a>
            </div>
        </div>

        <?php
            }
        } else {
            echo "Nenhuma vaga encontrada.";
        }

        mysqli_close($conexao);
        ?>

    </div>
</div>

<?php require("includes/footer.php"); ?>
