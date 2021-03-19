<?php
$score = 93;

switch(intval($score/10)){
    case 9:
        echo "Class A";
        break;
    case 8:
        echo "Class B";
        break;
    case 7:
        echo "Class C";
        break;
    case 6:
        echo "Class D";
        break;
    default:
        echo "Class E";
        break;

}

?>