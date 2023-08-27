<?php
require("includes/header.php");
require("includes/conexao.php");

if (isset($_POST['entrar'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM usuario WHERE email = '$email'";
    $result = $conexao->query($sql);
    $total_registro = mysqli_num_rows($result);
    
    if ($total_registro > 0) {
        echo '<div class="alert alert-success" role="alert">O link para alterar a senha foi enviado para seu email.</div>';
        header("Refresh: 4;url=index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
            Email incorreto!
        </div>';
    }
}
?>

<main>
    <div class="gradiente">
        <div class="text-center p-5">
            <div class="text-center mb-5">
                <img width="200px" src="assets/img/logo.png" alt="">
            </div>
            <form class="bg-white mx-auto p-5 m-5 col-12 col-md-4" method="POST" action="">
                <h1 class="text-center pb-5 text-primary">Alterar Senha</h1>
                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                        </div>
                    </div>
                </div>
                <div class="text-center p-3">
                    <div>
                        <button type="submit" name="entrar" value="entrar" class="btn btn-primary mb-3  px-5 rounded-pill">Alterar Senha</button>
                    </div>
                </div>
                <p>Ainda não tem cadastro? <a href="cadastro.php">Clique aqui</a></p>
            </form>
        </div>
    </div>
</main>

<?php require("includes/footer.php"); ?>
