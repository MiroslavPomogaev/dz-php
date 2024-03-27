<?php
echo __FILE__ . "<br/>";
echo __LINE__ . "<br/>";


$str='переменной';
echo<<<HERE
  Создание многострочной $str при помощи heredoc синтаксиса.<br/>
HERE;


$a='Рыба';
$b='человек';

echo "$a рыбою сыта, а $b человеком";
