<span style="font-size:18px;"><?php
    //session赋值
    if (!session_id())
        session_start();
    $_SESSION['st_name']=$_POST["st_name"];
    $_SESSION['st_id']=$_POST["st_id"];

    //session值的读取:
    $st_name = $_SESSION['st_name'];
    $st_id=$_SESSION['st_id'];
    echo $st_name,$st_id;
    echo "<br>";
    ?>
</span>

欢迎<?php echo $_POST["st_name"]; ?>!<br>
你的学号是 <?php echo $_POST["st_id"]; ?>  。
<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统(book.com)</title>
</head>
<body>

<form action="Borrowing_Information.php" method="post">
    <input type="submit" value="借阅信息">
</form>

<form action="Book_Search.php" method="post">
    <input type="submit" value="书籍查询">
</form>

<form action="Returning_books.php" method="post">
    <input type="submit" value="还书">
</form>

<form action="Borrowing_books.php" method="post">
    <input type="submit" value="借书">
</form>

<form action="Login.php" method="post">
    <input type="submit" value="重新登录">
</form>


</body>
</html>