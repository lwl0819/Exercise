<?php
  $input = isset($value)? $value : "空的";
  echo $input."\n";
  $input = $value ?? "空的";
  echo $input;
?>