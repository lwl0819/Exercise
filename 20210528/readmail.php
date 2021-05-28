<?php

$files = file('email.txt'); 

foreach ($files as $line) {
    $line = trim($line);
    $info = explode('|', $line);
    
    print '<li><a href="mailto:' . $info[0] . '">' . $info[1] . '</a></li>\n';
}