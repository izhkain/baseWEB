<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center mb-4">Добро пожаловать</h1>
                <?php if (isAuthenticated()): ?>
                    <div class="text-center">
                        <p>Вы вошли как: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
                        <a href="feedback.php" class="btn btn-primary">Форма обратной связи</a>
                        <a href="logout.php" class="btn btn-danger">Выйти</a>
                    </div>
                <?php else: ?>
                    <div class="text-center">
                        <p>Пожалуйста, войдите в систему</p>
                        <a href="login.php" class="btn btn-primary">Войти</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>