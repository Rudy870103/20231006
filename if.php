<?php

$score=40;

echo "我的成績:" . $score;
echo "<br>";
echo "判斷為:";

if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}
echo"<br>";

if($score>=90 && $score<=100){
    $level="A";
}
if($score>=80 && $score<=89){
    $level="B";
}
if($score>=70 && $score<=79){
    $level="C";
}
if($score>=60 && $score<=69){
    $level="D";
}
if($score>=0 && $score<=59){
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