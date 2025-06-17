<?php
// $a = "東京";
// $b = ($a === "東京")?"大都会":"田舎";
// echo $b."<br />";


// echo "県庁所在地は". "<br />";
// $c = "群馬";

// switch ($c) {
//     case "東京":
//         echo "新宿区"."<br />";
//         break;
//     case "神奈川":
//         echo "横浜市"."<br />";
//         break;
//     case "千葉":
//         echo "千葉市"."<br />";
//         break;
//     case "埼玉":
//         echo "さいたま市"."<br />";
//         break;
//     case "群馬":
//         echo "前橋市"."<br />";
//         break;
//     case "栃木":
//         echo "宇都宮市"."<br />";
//         break;
//     case "茨城":
//         echo "水戸市"."<br />";
//         break;
//     default:
//         echo "分かりません。";
// }


// echo "ここは、";

// $d = "埼玉";

// if ($d === "東京") {
//     echo "関東1都6県の『都』です。";
// } elseif (
//     $d === "神奈川" ||
//     $d === "千葉" ||
//     $d === "埼玉" ||
//     $d === "群馬" ||
//     $d === "栃木" ||
//     $d === "茨城"
// ) {
//     echo "関東1都6県の『県』です。";
// } else {
//     echo "それ以外です。";
// }
// echo "<br />";

// for($e = 1; $e <= 12; $e++ ){
//     echo "2025年". $e ."月"."<br />";
// }

// $f = 800;

// do {
//   echo '所持金 = ' . $f .'円'. '<br />';
//   $f += 100;
// } while ($f <= 500);


// $count = 0;

// while($count <= 100){
//     if($count === 20){
//         break;
//     }
//     if($count % 3 === 0){
//         echo $count .'<br />';
//         $count ++;
       
//         continue;
//     }
    
    
//     $count++;
//     echo $count . '<br />';
// }
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

// function addNumber2($a,$b=1)
// {
//   $add = $a + $b;
//   return $add;
// }

// $total = addNumber2(2);
// print $total;


function exam($score1, $score2, $score3)
{
  $total = $score1 + $score2 + $score3;
  if ($total > 210) {
    echo $total . "点なので合格です".'<br />';
  } else {
    echo $total . "点なので不合格です".'<br />';
  }
}
exam(80, 60, 90);


echo date("y-m-d")."<br />";

$people = array('Taro', 'Jiro', 'Saburo');

var_dump($people);
// echo $people[0];

$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
//   echo $person[0];
//   echo $people[0];
}


