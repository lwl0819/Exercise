<?php
function my_error_handler($error_no, $error_msg) {
  echo "Opps, something went wrong:\n";
  echo "Error number: [$error_no]";
  echo "Error Description: [$error_msg] \n";
}
set_error_handler("my_error_handler");
echo (5 / 0);

?>