<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="about.php">О нас</a> </li>
            <li><a href="contacts.php">Контакты</a></li>
        </ul>
    </nav>
    <div class="content">
        <h1>Добро пожаловать на наш сайт!</h1>
    </div>
    <div class="notes">
        <h2>Оставьте свою заметку</h2>
        <form id="note-form" action="save_note.php" method="post">
            <textarea id="note-text" name="note" rows="10" placeholder="Напишите здесь свою заметку..."></textarea>
            <button type="submit">Отправить заметку</button>
        </form>
    </div>

</body>
</html>
