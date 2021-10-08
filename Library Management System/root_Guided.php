欢迎管理员！
<html>
<head>
    <meta charset="utf-8">
    <title>图书管理系统/管理员(book.com)</title>
</head>
<body>

<form action="Books_add.php" method="post">
    书名: <input type="text" name="add_bk_name"><br>
    作者: <input type="text" name="add_bk_author"><br>
    价格: <input type="text" name="add_bk_price"><br>
    出版社: <input type="text" name="add_bk_publisher"><br>
    位置: <input type="text" name="add_bk_ip"><br>
    <input type="submit" value="图书新增"><br><br>
</form>

<form action="Book_Delete.php" method="post">
    书号: <input type="text" name="de_bk_id"><br>
    <input type="submit" value="图书下架"><br><br>
</form>


<form action="Modifications.php" method="post">
    书号: <input type="text" name="m_bk_id"><br>
    书名: <input type="text" name="m_bk_name"><br>
    作者: <input type="text" name="m_bk_author"><br>
    价格: <input type="text" name="m_bk_price"><br>
    出版社: <input type="text" name="m_bk_publisher"><br>
    位置: <input type="text" name="m_bk_ip"><br>
    <input type="submit" value="图书修改"><br>
</form>

<form action="rt_search.php" method="post">
    <input type="submit" value="图书查询"><br><br>
</form>

<form action="rt_st.php" method="post">
    <input type="submit" value="查看所有借阅信息"><br><br>
</form>

<form action="Login.php" method="post">
    <input type="submit" value="返回"><br>
</form>

</body>
</html>