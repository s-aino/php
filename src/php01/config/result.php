<?php

$my_name = htmlspecialchars($_post['my_name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);

print "私の名前は、" . $my_name . "<br>";
print "ご希望の商品は、" . $choices . "<br>";
print "注文数は、" . $number ."<br>"."<br>";

$choice_a = htmlspecialchars($_POST['choice_a'], ENT_QUOTES);

print "県庁所在地は『". $choice_a ."』です。"."<br>";