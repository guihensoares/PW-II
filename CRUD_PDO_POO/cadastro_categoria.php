<?php include 'header.php'; ?>
<?php include 'categoria.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card my-5 bg-light shadow">
                    <img src="https://preview.redd.it/complete-john-howe-lord-of-the-rings-middle-earth-v0-94pvkpdfv5qb1.png?width=1080&crop=smart&auto=webp&s=5d58196699c83764115835172552b71fccbf2c40"class="card-img-top w-100">
                    <div class="card-body">
                        <form action="./cadastro_categoria.php" method="post">

                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome da Categoria</label>
                                <input type="text" name="nome" id="nome" class="form-control">
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

        $categoria = new Categoria('');

        echo $categoria->inserir($_POST['nome']);
    ?>


<?php include 'footer.php'; ?>