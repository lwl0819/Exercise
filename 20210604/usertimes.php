<?php
// cookie 一小時後過期
setcookie('short-user','Peter1',time()+60*60);

// cookie 一天後過期
setcookie('longer-user','Peter2',time()+60*60*24);

// cookie 指定日期過後，才會過期
$datetime = microtime(date('2021-06-01 00:00:00')) -microtime(time());
//print $datetime;
setcookie('date-user','Peter3',$datetime);

setcookie('path-user',' ');

setcookie('path-user','Peter4',time()+60*60*24,'./manager/','.example.com',true,true);
?>
