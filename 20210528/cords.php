<?php
    $files = file_get_contents('cards.html');

    $files = str_replace('{Information}', 'Project', $files);

    $files = str_replace('{cardimages}', 'images.jpeg', $files);

    $files = str_replace('{username}', '帥哥', $files);

    $files = str_replace('{content}', '我的麻呀超帥的!!', $files);

    $files = str_replace('{siteurl}', 'https://php.onlinedoc.tw', $files);

    print $files;



?>