<?php
    $files = file_get_contents('cards.html');

    $files = str_replace('{Information}','Project',$files);

    $files = str_replace('{cardimages}','比安卡&丽塔.jpg',$files);

    $files = str_replace('{username}','Peter Wang',$files);

    $files = str_replace('{content}','Welcome to my site..',$files);

    $files = str_replace('{siteurl}','https://php.onlinedoc.tw/',$files);

    //print $files;
    file_put_contents('card1.html',$files);
?>