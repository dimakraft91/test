<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    // Открываем CSV файл для записи
    $file = fopen('Comments.csv', 'a');
    if ($file) {
        // Записываем данные в файл
        fputcsv($file, array($email, $comment, date('Y-m-d H:i:s')));
        fclose($file);
    }
}
?>