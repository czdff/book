<?php
$email = filter_input(INPUT_POST, 'email');

$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store')
or die ('Ошибка подключения БД');

mysqli_set_charset($dbc, 'utf8');
$query_select = "SELECT email FROM email_list WHERE email = '$email'";
$result_select = mysqli_query($dbc, $query_select);
$row=mysqli_fetch_array($result_select);
if ($row) {
    $query = "DELETE FROM email_list WHERE email = '$email'";
    $result = mysqli_query($dbc, $query)
    or die ('Ошика запроса');
    var_dump($result);
    echo 'Покупатель с таким email: ' . $email . ' был удален с БД.';
} else {
    echo 'Нет покупателя с таким ' . $email . '.';
}

mysqli_close($dbc);