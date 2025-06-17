<?php
for ($i = 1; $i <= 5; $i++) {
  echo $i * 2 . "<br />";
}
$i = 0;
while ($i < 3) {
  echo 'i = ' . $i . '<br />';
  $i += 1;
}
$count = 0;
while($count < 20){
    echo $count . '<br />';
    $count += 1;
}

$count = 0;

while($count <= 100){
    if($count === 20){
        break;
    }
    if($count % 3 === 0){
        $count ++;
        continue;
    }
    echo $count . '<br />';
    $count++;
}
$num = 0;

do {
  echo 'num = ' . $num . '<br />';
  $num += 1;
} while ($num < 3);

$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for($i=1;$i<=50;$i++){
    if($i %15 == 0){
        echo $FizzBuzz ."<br />";
    }else if($i%3==0){
        echo $Fizz ."<br />";
    }else if ($i%5==0){
        echo $Buzz ."<br />";
    }else{
        echo $i ."<br />";
    }

}
for ($i = 1; $i <= 5; $i++) {
    echo $i * 2 . '<br />';
}
$count = 0;

while ($count <=100) {
    if ($count < 20){
        break;
    }
    if ($count %3 ==0 ) {
        continue;
        $count ++ ;
    }
    $count ++;
    echo $count . '<br />';
}
$num =0 ;
do {
    $num ++;
    echo 'num = '.$num .'<br />';
} while($num <3 );

for ($i = 1; $i < 5; $i++) {
  for ($j = 1; $j <= 3; $j++) {
    echo "○●";
  }
  echo "<br />";
}

