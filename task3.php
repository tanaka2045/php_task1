<?php

// 1.

function double($x) {
    
    $result = $x*2;
    return $result;
}

echo double(10);

echo "\n";


// 2.

function plus($a, $b){
    
    $ab = $a + $b;
    return $ab;
}

echo plus(21,17);

echo "\n";


// 3.

function times($arr){

$result = 1;

foreach ($arr as $factor) {
    $result *=$factor;
}

return $result;

}

echo times([1,3,5,7,9]);

echo "\n";

// 4.

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if ($max_number < $a){
         $max_number = $a;
     }
 }
 return $max_number;
 }

echo max_array([1,3,15,7,9,7,4,2]);

echo "\n";

// 5.

$string = "<p> test <php? echo max_array([1,3,15,7,9,7,4,2]); ?> </p>";
echo strip_tags($string);

echo "\n";

$fruits=array("apple", "orange", "banana");
print_r($fruits);

array_push($fruits, "grape", "lemon");
print_r($fruits);

echo "\n";

$animal_1=array("dog", "cat");
$animal_2=array("panda");
$animal_3=array("monkey", "cow", "horse");

$animal = array_merge($animal_1, $animal_2, $animal_3);
print_r($animal);


echo "\n";

$current_time=time();
$past_time=mktime(0,0,1,3,1,2001);
$current_date=date('Y/m/d', $current_time);
$past_date=date('Y/m/d', $past_time);

echo $current_time;
echo "\n";
echo $past_time; 
echo "\n";
echo $current_date;
echo "\n";
echo $past_date;


echo "\n";


