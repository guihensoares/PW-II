<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    >
    <title>Vrum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="/PW-II/projeto_CRUD/includes/style.css">
</head>
</style>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid" id="navbar">
            <a href="../projeto - consumo API/1paginaInicial.html">
                <img src="/PW-II/projeto_CRUD/imagens/logo4.svg" alt="logo" style="max-height:80px; width: 80;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-3">
                    <li class="nav-item">
                        <a id="navStyle" aria-current="page" href="/PW-II/projeto_CRUD/public/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="navStyle" href="/PW-II/projeto_CRUD/public/anuncio/read-anuncio.php">Anúncios</a>
                    </li>
                    <li class="nav-item">
                        <a id="navStyle" href="/PW-II/projeto_CRUD/public/anuncio/create-anuncio.php">Criar Anúncios</a>
                    </li>
                </ul>

                <div class="ms-auto">
                    <p><?php echo $_SESSION['email']; ?> está conectado</p>
                </div>
            </div>
        </div>
    </nav>