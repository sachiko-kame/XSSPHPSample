<?php
$name1 = $_GET['name1'];
$name2 = $_GET['name2'];
$name3 = $_GET['name3'];


//$name4の場合(httpやhttpsのもののみ許可する) //本来はもっと厳密に
if(preg_match('/^(https|http):(.*)/', $_GET['name4'])){
    $name4 = $_GET['name4'];
}else{
    $name4 = "";
}
?>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>title</title>
</head>

<b><?php echo htmlspecialchars($name1) ?></b>
<?php echo htmlspecialchars($name2) ?>

<!-- <input type="button" value=<?php echo htmlspecialchars($name3) ?>> -->
<input type="button" value="<?php echo htmlspecialchars($name3) ?>">

<a href="<?php echo htmlspecialchars($name4) ?>">aaaa</a>
<a href=<?php echo htmlspecialchars($name4) ?>>aaaa</a>

<body>
  <form action="sample2.php" method="get">
    name1: <input type="text" name="name1" >
    name2: <input type="text" name="name2" >
    name3: <input type="text" name="name3" >
    name4: <input type="text" name="name4" >
    XXXXX: <input type="text" name="XXXXX" value="<?php echo htmlspecialchars($name3) ?>">
    XXXXX: <input type="text" name="XXXXX" value="<?php echo htmlspecialchars($name3) ?>">
    <input type="submit" />
  </form>
</body>

</html>


<br>