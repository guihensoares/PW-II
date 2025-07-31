<?php session_start(); ?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-8">
                <form action="./question1.php" method="post">
                    <div class="mb-3">
                        <h1>O que o Dom Pedro I gritou no dia da independência?</h1>
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp1">
                        <label for="question1">independência ou morte</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp2">
                        <label for="question1">Ordem e progresso</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp3">
                        <label for="question1">Sou fã do Oruam</label>
                    </div>
                    <div class="mb-3">
                        <input type="radio" name="question1" id="question1" value="resp4">
                        <label for="question1">Não gritou nada!</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Próxima</button>
                </form>
                <?php 
                    if (isset($_POST['question1'])) {
                        if (empty($_POST['question1'])) {
                            echo '<div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">Favor selecionar uma alternativa!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                        }

                        if (!empty($_POST['question1'])) {
                            if ($_POST['question1'] == 'resp4') {
                                echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">Você acertou!! <a href="question2.php">Avançar</a><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div';
                            }

                            if ($_POST['question1'] != 'resp4') {
                                echo '<div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">Você errou!!<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div';
                            }
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>