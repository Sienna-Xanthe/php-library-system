<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统(book.com)</title>
</head>
<body>

<form action="Guided.php" method="post">
    名字: <input type="text" name="st_name">
    学号: <input type="text" name="st_id">
    <input type="submit" value="学生登录">
</form>

<form action="root_Guided.php" method="post">
    <input type="submit" value="管理者登录">
</form>

<?php
$tm=date("Y-m-d H:i:s");
echo $tm;
?>
</body>
</html>