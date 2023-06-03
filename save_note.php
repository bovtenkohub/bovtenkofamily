<?php
if (isset($_POST['note'])) {
    $note = $_POST['note'];
    $filename = "notes.txt";
    file_put_contents($filename, $note . PHP_EOL, FILE_APPEND);
    echo "Заметка успешно сохранена!";
} else {
    echo "Ошибка: Заметка не была отправлена";


}
?>
