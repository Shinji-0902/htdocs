<html>
<head>
    <meta charset="utf-8">
    <title>配列</title>
</head>
<body>

<!-- 以下にPHPを記述 -->
<?php
//配列
$city_names = array("新宿","渋谷","池袋");
// echo $city_names;

//配列の中身を確認
var_dump($city_names);

//配列に後からデータを追加
array_push($city_names,"恵比寿");
"<br>".var_dump($city_names);

echo $city_names[0];
echo $city_names[1];
echo $city_names[2];

?>

<ul>
    <li><a href="index.php">戻る</a></li>
</ul>
</body>
</html>