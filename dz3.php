<?php
$variable = 1;

if(is_bool($variable)===true){
  $type = 'bool';
} elseif (is_float($variable)===true){
  $type = 'float';
}elseif (is_int($variable)===true){
  $type = 'int';
}elseif (is_string($variable)===true){
  $type = 'string';
}elseif (is_null($variable)===true){
  $type = 'null';
}elseif (is_array(($variable)===true)){
  $type = 'other';
}
echo "type is $type";
