<?php
$sum=0;

// for(起始值；條件式；增減值){
//     程式碼
// }
for($i=1;$i<=10000;$i=$i+1){
    //$sum=$sum+1;
    echo '當$i='.$i."時";
    echo '$sum+$i的結果是';
    echo $sum . " + ". $i."=";
    echo $sum+$i;
    echo "<br>";
    $sum += $i;
}

echo "1加到100為" .$sum;

?>

<h1>迴圈練習</h1>
<h3>使用for迴圈產生以下數列</h3>
<ul>
    <li>1,3,5,7,9......n</li>
    <li>10,20,30,40,850,60......n</li>
    <li>3,5,7,11,13,17......97</li>
</ul>


<?php
$n=30;

for($i=1;$i<=100;$i=$i+2){
    echo $i;
    echo ",";
}
echo "<hr>";
for($i=1;$i<=$n;$i++){
    echo $i*10;
    echo ",";
}
echo "<hr>";
$a=98;

$flag=true;
for($i=2;$i<($a/2);$i++){
    echo "$a 除以 $i 餘數 ". ($a % $i);
    if(($a % $i) == 0){
        $flag=false;
        echo "<br>";
        break;
    }
    echo "<br>";

}

if($flag==true){
    echo $a . "是質數";
}else{
    echo $a . "不是質數";
}
echo '<br>'

?>


<?php
$a=['甲','乙','丙','丁','戊'];

for($i=0;$i<count($a);$i++){
    echo $a[$i];
}
echo '<br>';

foreach($a as $b =>$c){
    echo $b.'=>'.$c;
    echo "<br>";
}


?>