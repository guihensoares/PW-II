<?php include 'header.php'; ?>
<?php include 'editora.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card my-5 bg-light shadow">
                    <img src="https://ogimg.infoglobo.com.br/cultura/livros/20333475-137-ef2/FT1086A/760/Tolkien.jpg"class="card-img-top w-100">
                    <div class="card-body">
                        <form action="./cadastro_editora.php" method="post">

                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome da editora</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="site" class="label-control">Site</label>
                                <input type="text" name="site" id="site" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <button type="submit" class="w-100 btn btn-primary">Cadastrar</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php 
        if (!isset($_POST['nome'])) 
            exit();
        if (!isset($_POST['site'])) 
            exit();
        if (!isset($_POST['email'])) 
            exit();

        $usuario = new Editora('', '', '');

        echo $usuario->inserir($_POST['nome'], $_POST['site'], $_POST['email']);
    ?>


<?php include 'footer.php'; ?>