<?php
require_once 'config.php';

if (!isAuthenticated()) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма обратной связи</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Форма обратной связи</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success">
                                Сообщение успешно отправлено!
                            </div>
                        <?php endif; ?>
                        <form action="process_feedback.php" method="POST">
                            <div class="mb-3">
                                <label for="subject" class="form-label">Тема сообщения</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Сообщение</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Приоритет</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priority" id="priority1" value="low" checked>
                                    <label class="form-check-label" for="priority1">Низкий</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priority" id="priority2" value="medium">
                                    <label class="form-check-label" for="priority2">Средний</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="priority" id="priority3" value="high">
                                    <label class="form-check-label" for="priority3">Высокий</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Дополнительные опции</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="options[]" id="option1" value="copy">
                                    <label class="form-check-label" for="option1">Отправить копию на email</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="options[]" id="option2" value="urgent">
                                    <label class="form-check-label" for="option2">Срочно</label>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="department" class="form-label">Отдел</label>
                                <select class="form-select" id="department" name="department" required>
                                    <option value="">Выберите отдел</option>
                                    <option value="support">Техподдержка</option>
                                    <option value="sales">Отдел продаж</option>
                                    <option value="billing">Бухгалтерия</option>
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Отправить</button>
                                <button type="reset" class="btn btn-secondary">Сбросить</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="index.php" class="btn btn-link">На главную</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>