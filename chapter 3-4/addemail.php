<?php
$first_name = filter_input(INPUT_POST, 'firstname');
$last_name = filter_input(INPUT_POST, 'lastname');
$email = filter_input(INPUT_POST, 'email');

$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store')
    or die('Ошибка подключения БД');
mysqli_set_charset($dbc,'utf8');
$query = "INSERT INTO email_list (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";

$result = mysqli_query($dbc, $query)
    or die('Ошибка запроса добавления');

echo 'Покупатель добавлен';
mysqli_close($dbc);