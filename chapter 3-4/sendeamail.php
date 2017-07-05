<?php
$from = 'czdff@i.ua';
$subj = filter_input(INPUT_POST, 'subject');
$mail = filter_input(INPUT_POST, 'elvismail');

$output_form = '<form method="post" action="sendeamail . php">
            <label for="subject">Тема електронного письма:</label><br/>
            <input type="text" id="subject" name="subject" value='.$subj.'><br/>
            <label for="elvismail">Содержание письма:</label><br/>
            <textarea id="elvismail" name="elvismail" rows="7" cols="64" >'.$mail.'</textarea><br/>
            <input type="submit" name="submit" value="Отправить"/>
        </form>';

if (empty($subj || $mail)) {
    echo 'Отсутствует тема письма и содержание<br/>';
    echo $output_form;
} elseif (empty($subj)) {
    echo 'Отсутствует тема письма';
    echo $output_form;
} elseif (empty($mail)) {
    echo 'Отсутствует содержание письма';
    echo $output_form;
} else {
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

}