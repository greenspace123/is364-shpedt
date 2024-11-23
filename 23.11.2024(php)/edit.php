

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Редактирование аккаунта</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>
    <header>
        <h1>Редактирование аккаунта</h1>
    </header>

    <main>
        <form action="edit_action.php" method="POST">
            <input type="hidden" name="user_id">

            <label for="name">Имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"  required>

            <label for="password">Новый Пароль (оставьте пустым, если не желаете менять):</label>
            <input type="password" id="password" name="password">

            <input type="submit" value="Обновить">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Ваша компания</p>
    </footer>
</body>
</html>
