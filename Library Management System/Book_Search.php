书籍查询
<span style="font-size:18px;"><?php
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
    <title>图书管理系统/书籍查询(book.com)</title>
</head>
<body>

<form action="bk_name_search.php" method="post">
    书名：<input type="text" name="bk_name">
    <input type="submit" value="书名查询">
</form>

<form action="bk_id_search.php" method="post">
    书号：<input type="text" name="bk_id">
    <input type="submit" value="书号查询">
</form>

<form action="bk_author_search.php" method="post">
    作者：<input type="text" name="bk_author">
    <input type="submit" value="作者查询">
</form>

<form action="st_all_search.php" method="post">
    <input type="submit" value="全部查询">
</form>

<form action="st_Guided_copy.php" method="post">
    <input type="submit" value="返回">
</form>

</body>
</html>