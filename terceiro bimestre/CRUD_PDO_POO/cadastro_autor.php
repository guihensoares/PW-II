<?php include 'header.php'; ?>
<?php include 'autor.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card my-5 bg-light shadow">
                    <img src="https://observatoriodocinema.com.br/wp-content/plugins/seox-image-magick/imagick_convert.php?width=904&height=508&format=.jpg&quality=91&imagick=/wp-content/uploads/2023/06/b25lY21zOjEyODc5ZWE1LTkwODMtNGU3-1.jpg"class="card-img-top w-100">
                    <div class="card-body">
                        <form action="./cadastro_autor.php" method="post">

                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome do Autor</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="biografia" class="label-control">Biografia</label>
                                <textarea class="form-control" name="biografia" id="biografia" rows="3"></textarea>
                            </div>

                            <div class="mb-3">
                                <label for="foto" class="label-control">Foto</label>
                                <input type="text" name="foto" id="foto" class="form-control">
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
        if (!isset($_POST['biografia'])) 
            exit();
        if (!isset($_POST['foto'])) 
            exit();

        $autor = new Autor('', '', '');

        echo $autor->inserir($_POST['nome'], $_POST['biografia'], $_POST['foto']);
    ?>


<?php include 'footer.php'; ?>