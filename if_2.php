<?php

$color=40;

echo "我的成績:" . $color;
echo "<br>";
echo "判斷為:";

if($color>=60){
    echo "及格";
}else{
    echo "不及格";
}
echo"<br>";

if($color>=90 && $color<=100){
    $level="A";
}
if($color>=80 && $color<=89){
    $level="B";
}
if($color>=70 && $color<=79){
    $level="C";
}
if($color>=60 && $color<=69){
    $level="D";
}
if($color>=0 && $color<=59){
    $level="E";
}

echo "成績等級為:" . $level;
echo "<br>";
switch($level){
    case"A":
        echo"非常棒";
    break;
    case"B":
        echo"繼續保持";
    break;
    case"C":
        echo"再加油";
    break;
    case"D":
        echo"你壓線喔";
    break;
    case"E":
        echo"還好嗎";
    break;
}
?>