<h2>Сообщение о пхищении</h2>
    <?php
        var_dump($_POST);
        $when_it_happend=filter_input(INPUT_POST,'whenithappend');
        $how_long=filter_input(INPUT_POST,'howlong');
        $aliendescription=filter_input(INPUT_POST,'aliendescription');
        $fang_spoted=filter_input(INPUT_POST,'fangspoted');
        $email=filter_input(INPUT_POST,'email');

        echo 'Спасибо за заполнение формы.<br/>'
            .'Вы были похищены '.$when_it_happend.' и отсутствовали в течении '.$how_long.'<br/>'
            .'Опишите их: '.$aliendescription.'<br/>'
            .'Видели ли вы мою собаку Фэнга?'.$fang_spoted.'<br/>'
            .'Ваш адрес электронной почты'.$email;

