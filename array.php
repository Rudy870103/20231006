<?php

$a=[];

$a[]=10;
$a[]=30;
$a[]='泰山';
$a[]='新莊';

echo "<pre>";
print_r($a);
echo "<pre>";

echo $a[2];
echo "<hr>";
echo $a[1];

$b=[];
$b['姓名']='Rudy';
$b['星座']=['太陽魔羯','上升射手','月亮雙魚'];
$b['年齡']=25;

echo "<pre>";
print_r($b);
echo "<pre>";
echo "<hr>";
echo $b['姓名'];
echo $b['年齡'];
echo '<br>';
echo $b['星座'][0];
echo $b['星座'][1];