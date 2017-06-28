<h2>Сообщение о пхищении</h2>
<?php
$name = filter_input(INPUT_POST, 'firstname') . ' ' . filter_input(INPUT_POST, 'lastname');
$when_it_happend = filter_input(INPUT_POST, 'whenithappend');
$how_long = filter_input(INPUT_POST, 'howlong');
$what_they_did = filter_input(INPUT_POST, 'whattheydid');
$how_many = filter_input(INPUT_POST, 'howmany');
$other = filter_input(INPUT_POST, 'other');
$aliendescription = filter_input(INPUT_POST, 'aliendescription');
$fang_spoted = filter_input(INPUT_POST, 'fangspoted');
$email = filter_input(INPUT_POST, 'email');
$email=filter_input(INPUT_POST,'email');
$msg = $name.' был похищен '.$when_it_happend.' иотсутствовал в течении '.$how_long.'.<br/>Количество пришельцев: '.$how_many.'<br/>Описание космических пришельцев: '.$aliendescription.'<br/>Что они делали? '.$what_they_did.'<br/>Фенг замечен? '.$fang_spoted.'<br/>Дополнительная информация: '.$other.'.';
$subject='Космические пришельцы пхищали меня - Сообщение  похищении';
$to='czdff@i.ua';
mail($to, $subject, $msg, 'From:'.$email);

echo 'Спасибо за заполнение формы.<br/>'
    . 'Вы были похищены ' . $when_it_happend . ' и отсутствовали в течении ' . $how_long . '<br/>'
    . 'Количество космических пришельцев: ' . $how_many . '<br/>'
    . 'Опишите их: ' . $aliendescription . '<br/>'
    . 'Что они делали: ' . $what_they_did . '<br/>'
    . 'Видели ли вы мою собаку Фэнга? ' . $fang_spoted . '<br/>'
    . 'Дополнительная информация: ' . $other . '<br/>'
    . 'Ваш адрес электронной почты: ' . $email;


