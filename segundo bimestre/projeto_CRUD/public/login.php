<?php
session_start();
?>

<?php include '../includes/header.php' ?>

<div class="container">
    <div class="login-container">
        <h2 class="text-center mb-4">Login</h2>
        <form action="" method="POST">
            <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="nome@exemplo.com" required>
                <label for="email">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="password" placeholder="Senha" required>
                <label for="password">Senha</label>
            </div>

            <button class="w-100 btn btn-lg btn-login" type="submit">Entrar</button>

        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'] ?? '';
            $senha = $_POST['password'] ?? '';

            if ($email === 'admin@hotmail.com' && $senha === 'admin20201') {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            } else {
                echo '
                <div class="alert alert-warning mt-3 text-center" role="alert">
                    Login incorreto!
                </div>';
            }
        }
        ?>
    </div>
</div>

<?php include '../includes/footer.php' ?>