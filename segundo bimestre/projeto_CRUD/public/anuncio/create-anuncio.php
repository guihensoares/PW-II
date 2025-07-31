    <?php 
        include '../../config/connection.php';
        include '../../includes/header.php';
    ?>

<div class="d-flex justify-content-center m-2" id="titulostyle">
    <h1>Criar Anúncio</h1>
</div>

<div class="container-fluid">
    <div class="row d-flex justify-content-center m-3">
        <div class="col-12 col-lg-4 p-4 border bg-tertiary shadow rounded">
            <form action="create-anuncio.php" method="post">
                <div class="mb-3">
                    <label for="titulo_anuncio" class="form-label">Título do anúncio</label>
                    <input type="text" name="titulo_anuncio" id="titulo_anuncio" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="descricao_anuncio" class="form-label">Descrição do anúncio</label>
                    <textarea name="descricao_anuncio" id="descricao_anuncio" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="mb-3">
                    <label for="data_publicacao" class="form-label">Data de publicação</label>
                    <input type="date" name="data_publicacao" id="data_publicacao" class="form-control">
                </div>


                <div class="row">
                     <div class="mb-3 col-md-6">
                    <label for="marca_veiculo" class="form-label">Marca do veículo</label>
                    <input type="text" name="marca_veiculo" id="marca_veiculo" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="modelo_veiculo" class="form-label">Modelo do veículo</label>
                    <input type="text" name="modelo_veiculo" id="modelo_veiculo" class="form-control">
                </div>
                </div>
               
                <div class="mb-3">
                    <label for="ano_veiculo" class="form-label">Ano do veículo</label>
                    <input type="number" name="ano_veiculo" id="ano_veiculo" class="form-control">
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                    <label for="cor_veiculo" class="form-label">Cor do veículo</label>
                    <input type="text" name="cor_veiculo" id="cor_veiculo" class="form-control">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="placa_veiculo" class="form-label">Placa do veículo</label>
                    <input type="text" name="placa_veiculo" id="placa_veiculo" class="form-control">
                </div>
                </div>
                

                <div class="mb-3">
                    <label for="nome_proprietario" class="form-label">Nome do Proprietário</label>
                    <input type="text" name="nome_proprietario" id="nome_proprietario" class="form-control">
                </div>
                <div>
                    <label for="telefone_proprietario" class="form-label">Telefone do Proprietário</label>
                    <input type="number" name="telefone_proprietario" id="telefone_proprietario" class="form-control">
                </div>
                
                <br><br>

                <button type="submit" class="btn btn-primary w-100">Publicar anuncio</button>
            </form> 
        </div>
    </div>
</div>


<?php 
    $titulo_anuncio = isset($_POST['titulo_anuncio']) ? $_POST['titulo_anuncio'] : exit() ;
    $descricao_anuncio = isset($_POST['descricao_anuncio']) ? $_POST['descricao_anuncio'] : exit() ;
    $data_publicacao = isset($_POST['data_publicacao']) ? $_POST['data_publicacao'] : exit() ;

    $marca_veiculo = isset($_POST['marca_veiculo']) ? $_POST['marca_veiculo'] : exit() ;
    $modelo_veiculo = isset($_POST['modelo_veiculo']) ? $_POST['modelo_veiculo'] : exit() ;
    $ano_veiculo = isset($_POST['ano_veiculo']) ? $_POST['ano_veiculo'] : exit() ;
    $cor_veiculo = isset($_POST['cor_veiculo']) ? $_POST['cor_veiculo'] : exit() ;
    $placa_veiculo = isset($_POST['placa_veiculo']) ? $_POST['placa_veiculo'] : exit() ;

    $nome_proprietario = isset($_POST['nome_proprietario']) ? $_POST['nome_proprietario'] : exit() ;
    $telefone_proprietario = isset($_POST['telefone_proprietario']) ? $_POST['telefone_proprietario'] : exit() ;
    
    //statement
    $stmt = $pdo->prepare('INSERT INTO anuncio (
    titulo_anuncio, descricao_anuncio, data_publicacao, marca_veiculo, modelo_veiculo, ano_veiculo, cor_veiculo, placa_veiculo, nome_proprietario, telefone_proprietario) 
    VALUES (
    :titulo_anuncio, :descricao_anuncio, :data_publicacao, :marca_veiculo, :modelo_veiculo, :ano_veiculo, :cor_veiculo, :placa_veiculo, :nome_proprietario, :telefone_proprietario)');
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

?>

    <?php 
        include '../../includes/footer.php';
    ?>