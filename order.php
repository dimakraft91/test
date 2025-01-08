<?php

// BE11 script to send number and name to Keitaro
$url = 'https://be11.tech/ffda426/postback?status=lead&subid=' . $_POST['clickid'] . '&sub_id_20=' . urlencode($_POST['name']) . '&sub_id_21=' .urlencode($_POST['phone']) . '&sub_id_22=' . urlencode($_POST['mail']) . '&sub_id_23=' .urlencode($_POST['text']);
file_get_contents($url);

session_start();
$_SESSION['pixel'] = $_POST['pixel'];

$url = 'http://m1.top/send_order/';
$data = [
    'ref' => 1015728,
    'api_key' => '957f1df7b8437c4f5ae1b7eec35b60b1',
    'product_id' => 15825,
    'phone' => $_REQUEST['phone'],
    'name' => $_REQUEST['name'],
    'ip' => $_SERVER['REMOTE_ADDR'],
    's' => $_REQUEST['utm_source'],
    'w' => $_REQUEST['facebook'],
    't' => $_REQUEST['sub_id_3'],
    'p' => $_REQUEST['utm_campaign'],
    'm' => $_REQUEST['clickid']
];

// Указываем язык лендинга
$data['langCode'] = 'es';

$process = curl_init();
curl_setopt($process, CURLOPT_HEADER, 0);
curl_setopt($process, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)");
curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($process, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($process, CURLOPT_TIMEOUT, 20);
curl_setopt($process, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($process, CURLOPT_POST, true);
curl_setopt($process, CURLOPT_POSTFIELDS, $data);
curl_setopt($process, CURLOPT_URL, $url);

$return = curl_exec($process);
curl_close($process);

// Проверяем успешность выполнения запроса
if ($return) {
    // Перенаправляем на success.php
    header('Location: /thanks/thanks.php');
    exit(); // Завершаем выполнение скрипта
} else {
    // Обработка ошибки (если нужно)
    echo "Ошибка при отправке заявки.";
}

?>