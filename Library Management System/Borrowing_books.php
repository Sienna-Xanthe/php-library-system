借书
<span style="font-size:18px;"><?php
    //session赋值
    if (!session_id())
        session_start();
    //session值的读取:
    $st_name = $_SESSION['st_name'];
    $st_id=$_SESSION['st_id'];
    echo $st_name,$st_id;
    echo "<br>";
    ?>
</span>

<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统/借书(book.com)</title>
</head>
<body>

<form action="st_borrowing.php" method="post">
    书号：<input type="text" name="bk_id">
    <input type="submit" value="借书">
</form>

<form action="st_Guided_copy.php" method="post">
    <input type="submit" value="返回">
</form>



</body>
</html>