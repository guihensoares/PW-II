<?php

include '../../config/connection.php';
include '../../includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id = isset($_GET['id']) ? $_GET['id'] : exit();

    if (empty($id)) {
        echo "O id é obrigatório!";
        exit();
    }

    $stmt = $pdo->prepare('SELECT * FROM anuncio WHERE id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $anuncio = $stmt->fetchAll();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $titulo_anuncio = isset($_POST['titulo_anuncio']) ? $_POST['titulo_anuncio'] : null;
    $descricao_anuncio = isset($_POST['descricao_anuncio']) ? $_POST['descricao_anuncio'] : null;
    $data_publicacao = isset($_POST['data_publicacao']) ? $_POST['data_publicacao'] : null;

    $marca_veiculo = isset($_POST['marca_veiculo']) ? $_POST['marca_veiculo'] : null;
    $modelo_veiculo = isset($_POST['modelo_veiculo']) ? $_POST['modelo_veiculo'] : null;
    $ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : null;
    $cor_veiculo = isset($_POST['cor_veiculo']) ? $_POST['cor_veiculo'] : null;
    $placa_veiculo = isset($_POST['placa_veiculo']) ? $_POST['placa_veiculo'] : null;

    $nome_proprietario = isset($_POST['nome_proprietario']) ? $_POST['nome_proprietario'] : null;
    $telefone_proprietario = isset($_POST['telefone_proprietario']) ? $_POST['telefone_proprietario'] : null;

    if (empty($id)) {
        echo "ID é obrigatório!";
        exit();
    }

    if (empty($titulo_anuncio)) {
        echo "Titulo do anúncio é obrigatório!";
        exit();
    }

    if (empty($descricao_anuncio)) {
        echo "A descrição do anuncio é obrigatório";
        exit();
    }

    if (empty($data_publicacao)) {
        echo "A data da publicação é obrigatório!";
        exit();
    }

    if (empty($marca_veiculo)) {
        echo "A marca do veículo é obrigatório";
        exit();
    }

    if (empty($modelo_veiculo)) {
        echo "O modelo do veículo é obrigatório!";
        exit();
    }

    if (empty($ano_veiculo)) {
        echo "O ano do veículo é obrigatório";
        exit();
    }

    if (empty($cor_veiculo)) {
        echo "A cor do veículo é obrigatório!";
        exit();
    }

    if (empty($placa_veiculo)) {
        echo "A placa do veículo é obrigatório";
        exit();
    }

    if (empty($nome_proprietario)) {
        echo "O nome do proprietario é obrigatório!";
        exit();
    }

    if (empty($telefone_proprietario)) {
        echo "O telefone do proprietario é obrigatório";
        exit();
    }

    $stmt = $pdo->prepare('UPDATE anuncio SET titulo_anuncio = :titulo_anuncio, 
        descricao_anuncio = :descricao_anuncio, data_publicacao = :data_publicacao, marca_veiculo = :marca_veiculo, modelo_veiculo = :modelo_veiculo, 
        ano_veiculo = :ano_veiculo, cor_veiculo = :cor_veiculo, placa_veiculo = :placa_veiculo, nome_proprietario = :nome_proprietario, telefone_proprietario = :telefone_proprietario
        WHERE id = :id');

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':titulo_anuncio', $titulo_anuncio);
    $stmt->bindParam(':descricao_anuncio', $descricao_anuncio);
    $stmt->bindParam(':data_publicacao', $data_publicacao);

    $stmt->bindParam(':marca_veiculo', $marca_veiculo);
    $stmt->bindParam(':modelo_veiculo', $modelo_veiculo);
    $stmt->bindParam(':ano_veiculo', $ano_veiculo);
    $stmt->bindParam(':cor_veiculo', $cor_veiculo);
    $stmt->bindParam(':placa_veiculo', $placa_veiculo);

    $stmt->bindParam(':nome_proprietario', $nome_proprietario);
    $stmt->bindParam(':telefone_proprietario', $telefone_proprietario);
    $stmt->execute();

    header('Location: read-anuncio.php');

}

?>

<h1>bom dia</h1>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-lg-4 p-4 border bg-tertiary shadow rounded">

            <form action="update-anuncio.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $anuncio[0]['id']; ?>">

                <div class="mb-3">
                    <label for="titulo_anuncio" class="form-label">Editar título do anúncio</label>
                    <input type="text" name="titulo_anuncio" id="titulo_anuncio" class="form-control"
                        value="<?php echo $anuncio[0]['titulo_anuncio']; ?>">
                </div>
                <div class="mb-3">
                    <label for="descricao_anuncio" class="form-label"> Editar descrição do anúncio</label>
                    <textarea name="descricao_anuncio" id="descricao_anuncio" class="form-control"
                        aria-label="With textarea"><?php echo $anuncio[0]['descricao_anuncio']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="data_publicacao" class="form-label">Editar data de publicação</label>
                    <input type="date" name="data_publicacao" id="data_publicacao" class="form-control"
                        value="<?php echo $anuncio[0]['data_publicacao']; ?>">
                </div>

                <div class="mb-3">
                    <label for="marca_veiculo" class="form-label">Editar marca do veículo</label>
                    <input type="text" name="marca_veiculo" id="marca_veiculo" class="form-control"
                        value="<?php echo $anuncio[0]['marca_veiculo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="modelo_veiculo" class="form-label">Editar modelo do veículo</label>
                    <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="form-control"
                        value="<?php echo $anuncio[0]['modelo_veiculo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="ano_veiculo" class="form-label">Editar ano do veículo</label>
                    <input type="number" name="ano_veiculo" id="ano_veiculo" class="form-control"
                        value="<?php echo $anuncio[0]['ano_veiculo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="cor_veiculo" class="form-label">Editar cor do veículo</label>
                    <input type="text" name="cor_veiculo" id="cor_veiculo" class="form-control"
                        value="<?php echo $anuncio[0]['cor_veiculo']; ?>">
                </div>
                <div class="mb-3">
                    <label for="placa_veiculo" class="form-label">Editar placa do veículo</label>
                    <input type="text" name="placa_veiculo" id="placa_veiculo" class="form-control"
                        value="<?php echo $anuncio[0]['placa_veiculo']; ?>">
                </div>

                <div class="mb-3">
                    <label for="nome_proprietario" class="form-label">Editar nome do Proprietário</label>
                    <input type="text" name="nome_proprietario" id="nome_proprietario" class="form-control"
                        value="<?php echo $anuncio[0]['nome_proprietario']; ?>">
                </div>
                <div class="mb-3">
                    <label for="telefone_proprietario" class="form-label">Editar telefone do Proprietário</label>
                    <input type="number" name="telefone_proprietario" id="telefone_proprietario" class="form-control"
                        value="<?php echo $anuncio[0]['telefone_proprietario']; ?>">
                </div>

                <br><br>

                <button type="submit" class="btn btn-warning">Atualizar anuncio</button>
            </form>
        </div>
    </div>
</div>

<?php include '../../includes/footer.php' ?>