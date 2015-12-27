<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php echo $_POST["name"]; ?>さん<br>
<?php
// 前のページから age を受け取る
$age = $_POST["age"];

if($age >= 20) {
    // 条件の時の処理
    echo "飲酒可です";
}

if($age < 20) :
    // 条件の時の処理
    echo "飲酒不可です";
endif;
echo "<br>";
?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>