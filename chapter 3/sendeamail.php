<?php
$from = 'czdff@i.ua';
$subj = filter_input(INPUT_POST, 'subject');
$mail = filter_input(INPUT_POST, 'elvismail');

$dbc = mysqli_connect('localhost', 'root', '', 'elvis_store')
or die ('Ошибка подключения БД');

mysqli_set_charset($dbc, 'utf8');

$query = "SELECT * FROM email_list";
$result = mysqli_query($dbc, $query)
or die ('Ошибка выполнения запроса');

while ($row = mysqli_fetch_array($result)) {
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $to = $row['email'];

    $msg = "Уважаемый $last_name $first_name,<br/> $mail";

    //$mail($to,$subj,$mail,'From:'.$from);
    echo 'Письмо отправленно: ' . $to . '<br/>';
}

mysqli_close($dbc);

