<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php echo $_POST["first"]; ?><br>
<?php echo $_POST["second"]; ?><br>
<?php
$first = $_POST["first"];
$second = $_POST["second"];
$total = $first + $second;
echo $total;
?>
</body>
</html>