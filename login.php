<?php require("includes/header.php"); ?>
<?php require("includes/conexao.php"); ?>


<main>
    <div class="gradiente">

        <div class="text-center p-5">

            <a class="text-center mb-5" href="index.php">
                <img width="200px" src="assets/img/logo.png" alt="">
            </a>
            <!--fim da div logo-->

            <form class="bg-white mx-auto p-5 m-5 col-12 col-md-4" method="POST" action="">
                <h1 class="text-center pb-5 text-primary">Login</h1>
                <?php
                if (isset($_POST['entrar'])) {
                    $email =    $_POST['email'];
                    $senha =   md5($_POST['senha']);
                    $sql = "select * from usuario where email =  '$email' and senha = '$senha'";
                    $result = $conn->query($sql);
                    $total_registro = mysqli_num_rows($result);
                    if ($total_registro > 0) {
                        header("location:vagas.php");
                    } else {
                        echo '<div class="alert alert-danger" role="alert">
                        Login ou senha incorreta!
                      </div>';
                    }
                }

                ?>



                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                        <div class="input-group-prepend">
                            <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                        </div>

                    </div>
                </div>


                <div class="col-auto">
                    <div class="input-group my-2">
                        <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-eye"></i></div>
                        </div>
                    </div>
                </div>

                <div class="text-center p-3">
                    <div>
                        <button type="submit" name="entrar" value="entrar" class="btn btn-primary mb-3  px-5 rounded-pill">Entrar</button>
                    </div>
                    <div>
                        <a type="submit" class="btn btn-outline-primary mb-3  px-4 rounded-pill " href="cadastro.php">Cadastrar</a>
                    </div>
                </div>
                <!--criar página de recuperação de senha-->
                <p>Esquecir a senha: <a href="recuperar_login.php"> Clique aqui</a></p>

            </form>
            <!--fim do formulário-->


        </div>
    </div>
</main>


<?php require("includes/footer.php"); ?>