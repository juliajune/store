<?php
$u1=new User ('Robert', '123');
var_dump($u1);
$u1->intoDb();

echo '<br/>';

$u2=User::fromDb(1);
var_dump($u2);
?>