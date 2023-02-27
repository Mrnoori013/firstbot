<?php

define('BOT_TOKEN', '6224206512:AAEQ2bLjkZzi4UROlcVVNHVAI7b6i7QldtU');

define('API_URL', 'https://api.telegram.org/bot' . BOT_TOKEN . '/');

define('ADMIN_ID','1062343521');

function MessageRequestJson($method, $parameters) {

    $handle = curl_init(API_URL . $method);

    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

    curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);

    curl_setopt($handle, CURLOPT_TIMEOUT, 60);

    curl_setopt($handle, CURLOPT_POSTFIELDS, json_encode($parameters));

    curl_setopt($handle, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    $result = curl_exec($handle);

    curl_close($handle); // بستن پرانتز برای تابع curl_init

    return $result;

}

?>

