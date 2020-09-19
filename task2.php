<?php

//　課題１
$name="tanaka";

if ($name=="tanaka"){
    echo "私はtanakaです";
} else{
    echo"私はtanakaではありません";
}

echo "\n";

//　課題２
$total=0;

for ($i=1; $i<=10000; $i++){
    $total +=$i;
}
echo $total;

//　課題３
echo "\n";
$fruits = array("grape", "strawberry", "peach", "pineapple", "cherry");

foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

echo "\n";

//　課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;


for($i = $start; $i <= $end; $i++){

// 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo  $i;
    echo "\n";
  }
}

echo"\n";

