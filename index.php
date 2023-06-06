<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/chessboard-js/1.0.0/chessboard-1.0.0.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/chess.js/0.10.2/chess.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chessboard-js/1.0.0/chessboard-1.0.0.min.js"></script>
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
    <div id="board" style="width: 400px; margin: 0 auto;"></div>

    <textarea id="fen" rows="1" style="width: 100%; max-width: 400px; margin: 0 auto; display: block;"></textarea>
    <button id="play">Play</button>

    <script src="chessScript.js"></script>
</body>
</html>

