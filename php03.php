<?php

$height=164;

if ($height <150) {
    echo "150cm未満の方はご乗車できません。";
} elseif ($height>=200) {
    echo "200cm以上の方はご乗車できません。";
} else { 
echo "ご乗車できます。";
}

echo "\n";

$weekday="Monday";

switch ($weekday) {
    case "Monday":
        echo "可燃ごみの日です。";
        break;
    case "Wednesday":
        echo "資源ごみの日です。";
        break;
    default:
        echo "回収はありません";
        break;
}

echo "\n";

$name="tanaka";

if ($name=="tanaka") {
    echo "私は田中です";
} else {
    echo "私は田中ではありません";
}

echo "\n";

$a=3;
$b=3;
$c="3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a >= $b);
var_dump($a < $b);
var_dump($a <= $b);
var_dump($a === $c);
var_dump($a !== $c);

echo "\n";

for($i = 0; $i < 10; $i++){
    echo $i;
}

echo "\n";

$total = 0;
for ($i=0; $i<=100; $i++){
    $total += $i;
}

echo $total;

echo "\n";

$fruits = array("apple", "orange", "lemon");

echo count($fruits);
echo "\n";

for ($i=0; $i < count($fruits); $i++){
    echo "要素は".$fruits[$i];
    echo "\n";
}

echo "\n";

$animals = array ("dog", "cat", "panda");

foreach($animals as $animal){
    echo "要素は".$animal;
    echo "\n";
}

echo "\n";

function sum($max){
    $result = 0;
    
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    
    return $result;
}

echo sum(100000);

echo "\n";

$string ="ABCDEF";
echo strlen($string);

echo "\n";

$string = "I love Ruby!";
$new_string = str_replace("Ruby", "PHP", $string);
echo $new_string;
 
echo "\n";


$array= array(2,5,9,7,3,1,8,6,2,4);
asort($array);
print_r($array);

arsort($array);
print_r($array);


echo "\n";



