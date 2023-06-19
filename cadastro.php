<?php require("includes/header.php"); ?>
<?php require("includes/conexao.php"); ?>






<main>
    <div class="gradiente">

        <div class="text-center p-5">

            <a href="index.php" class="text-center mb-5">
                <img width="200px" src="assets/img/logo.png" alt="">
            </a>
            <!--fim da div logo-->

            <form class="bg-white mx-auto p-5 m-5 col-12 col-md-4" method="POST" action="">
                <h1 class="text-center pb-5 text-primary">Cadastro</h1>



                <?php
                if (isset($_POST['cadastrar'])) {
                    $nome =    $_POST['nome'];
                    $email =    $_POST['email'];
                    $senha =   md5($_POST['senha']);
                    $telefone =    $_POST['telefone'];
                    $endereco =    $_POST['endereco'];
                    $sql = "select * from usuario where email =  '$email'";
                    $result = $conn->query($sql);
                    $total_registro = mysqli_num_rows($result);

                    if ($total_registro > 0) {
                        echo '<div class="alert alert-danger" role="alert">
                        Esse e-mail já está cadastrado!
                      </div>';
                    } else {

                        $sql = "insert into usuario (nome,  email, senha, telefone, endereco) values ('$nome', '$email', '$senha','$telefone', '$endereco')";
                        $insert = $conn->query($sql);
                        echo '<div class="alert alert-success" role="alert">
                        Cadastro realizado com sucesso!!
                      </div>';
                        header("Refresh: 5;url=vagas.php");
                    }
                }

                ?>






                <div class="input-group my-2">
                    <input type="text" name="nome" class="form-control" placeholder="Seu nome ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> <i class="far fa-user"></i> </div>
                    </div>

                </div>





                <div class="input-group my-2">
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> <i class="far fa-envelope"></i> </div>
                    </div>

                </div>



                <div class="input-group my-2">
                    <input type="password" name="senha" class="form-control" id="inputPassword3" placeholder="Senha">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-eye"></i></div>
                    </div>
                </div>


                <div class="input-group my-2">
                    <input type="text" name="telefone" class="form-control" placeholder="Seu telefone ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> <i class="far fa-phone"></i> </div>
                    </div>

                </div>


                <div class="input-group my-2">
                    <input type="text" name="endereco" class="form-control" placeholder="Seu endereço ">
                    <div class="input-group-prepend">
                        <div class="input-group-text"> <i class="fas fa-map-marked-alt"></i></i> </div>
                    </div>

                </div>
                <div class="text-center p-3">
                    <button type="submit" name="cadastrar" class="btn btn-outline-primary mb-3  px-4 rounded-pill ">Cadastrar</button>
                </div>
                <p>Já tem cadastro? <a href="login.php">Entre aqui.</a></p>

        </div>

        <!--criar página de recuperação de senha-->


        </form>
        <!--fim do formulário-->
        <!--fim do formulário-->

    </div>

</main>


<?php require("includes/footer.php"); ?>