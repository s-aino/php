<?php
$a= 8  ;

if($a=== 5){
    echo "\$aは5です";
}
elseif($a==7){
    echo "\$aは7です";
}else{
    echo "\$aは5でも7でもありません";
}
echo"<br />";

$people = "hanako";

switch ($people) {
case "Taro":
echo "太郎です";
break;
case "Jiro":
echo "次郎です";
break;
case "Saburo":
echo "三郎です";
break;
default:
echo "誰ですか？";
echo"<br />";
}

$a = 7;
$b = ($a > 5) ? "TRUE" : "FALSE";
echo $b;

