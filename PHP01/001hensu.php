<html>
    <head>
        <meta charset="utf-8">
        <title>変数</title>
    </head>
<body>

<!-- 以下にPHPを記述 -->
<?php

echo 'hello world';
//変数
$int_age = 10; //数値型
$str_age = "20"; //文字列型

echo $int_age;
echo "<br> $str_age";

$total_age = $int_age + $str_age;
echo $total_age;

//結合演算子
$total_age2 = $int_age.$str_age;
echo "<br> $total_age2";


// 制御構文(if分文/for文) jsと同じ
//簡単なおみくじを実装

//ランダム整数生成rand(min,max)
$num = rand(1,2);

if($num==1){
    echo "当たり";
}else{
    echo "はずれ";
}


?>



<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>