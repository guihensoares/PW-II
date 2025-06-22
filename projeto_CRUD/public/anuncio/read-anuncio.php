<?php
include '../../includes/header.php';
include '../../config/connection.php';

$stmt = $pdo->query('SELECT * FROM anuncio');
$anuncios = $stmt->fetchAll();

?>

<div class="d-flex justify-content-center mt-4">

    <?php

    foreach ($anuncios as $index => $user) {

        ?>

        <div class="anuncio-info col-4">

            <div class="mb-3">
                <h4 class="fw-bold"><?php echo $user['titulo_anuncio'] ?></h4>
                <small class="text-muted"><?php echo $user['data_publicacao'] ?></small>
                <p class="mt-2"><?php echo $user['descricao_anuncio'] ?></p>

                <h5 class="fw-bold"><?php echo $user['marca_veiculo'], ' - ', $user['modelo_veiculo'] ?></h5>
                <p class="text-muted">
                    <?php echo $user['cor_veiculo'], ' | ', $user['placa_veiculo'], ' | ', $user['ano_veiculo'] ?>
                </p>
            </div>

            <div class="anuncio-proprietario d-flex justify-content-between align-items-center">
                <div>
                    <strong><?php echo $user['nome_proprietario'] ?></strong> <?php echo $user['telefone_proprietario'] ?>
                </div>
                <div>
                    <a href="http://localhost/PW-II/projeto_CRUD/public/anuncio/delete-anuncio.php?id=<?php echo $user['id']; ?>"
                        class="botao">Deletar</a>
                    <a href="http://localhost/PW-II/projeto_CRUD/public/anuncio/update-anuncio.php?id=<?php echo $user['id']; ?>"
                        class="botao">Atualizar</a>
                </div>
            </div>
        </div>

        <?php
    }
    ?>

</div>

<?php include '../../includes/footer.php'; ?>