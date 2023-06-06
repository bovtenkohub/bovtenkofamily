<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chess.js/0.10.2/chess.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chessboard.js/1.0.0/chessboard.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chessboard.js/1.0.0/chessboard.min.css" rel="stylesheet" />
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
    <div class="chessboard">
        <h2>Введите ваш шахматный ход</h2>
        <div id="board" style="width: 400px"></div>
        <input type="text" id="moveInput">
        <button onclick="makeMove()">Play</button>
    </div>
    <script src="chessScript.js"></script>
</body>
</html>
