<?php
$name1 = $_GET['name1'];
$name2 = $_GET['name2'];
$name3 = $_GET['name3'];
$name4 = $_GET['name4'];
?>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>title</title>
</head>

<b><?php echo $name1 ?></b>
<?php echo $name2 ?>

<input type="button" value=<?php echo $name3 ?>>
<input type="button" value="<?php echo $name3 ?>">

<a href="<?php echo $name4 ?>">aaa</a>
<a href=<?php echo $name4 ?>>aaa</a>

<body>
  <form action="sample1.php" method="get">
    name1: <input type="text" name="name1" >
    name2: <input type="text" name="name2" >
    name3: <input type="text" name="name3" >
    name4: <input type="text" name="name4" >
    <input type="submit" />
  </form>
</body>

</html>