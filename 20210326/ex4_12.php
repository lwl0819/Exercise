<?php
while (true){
    echo "這是第一層迴圈！
";
    while (true){
      echo "這是第二層迴圈！
";
      break 2;
    }
  }
  echo "己跳出二層迴圈！";
?>