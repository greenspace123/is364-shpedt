<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <header>
        <h1>Авторизация пользователя</h1>
    </header>

    <main>
        <form action="login_action.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Войти">
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Ваша компания</p>
    </footer>
</body>
</html>
