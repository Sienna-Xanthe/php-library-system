图书查询
<!DOCTYPE html>
<html>
<head>
    <title>全部查询</title>
</head>
<body>

<table style='text-align:left;' border='1'>
    <th><th>id</th><th>书名</th><th>作者</th><th>出版社</th><th>价格</th><th>状态</th><th>位置</th></tr>
    <?php

    header("Content-type:text/html;charset=utf-8");
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "mylibrary";

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
    }
    //查询数据表中的数据
    $conn->query("set names 'utf8';");
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 输出数据
        while($sql_arr = $result->fetch_assoc()) {
            $bk_id = $sql_arr['bk_id'];
            $bk_name = $sql_arr['bk_name'];
            $bk_author = $sql_arr['bk_author'];
            $bk_publisher = $sql_arr['bk_publisher'];
            $bk_price = $sql_arr['bk_price'];
            $bk_status = $sql_arr['bk_status'];
            $bk_ip = $sql_arr['bk_ip'];
            echo "<td><td>$bk_id</td><td>$bk_name</td><td>$bk_author</td><td>$bk_publisher</td><td>$bk_price</td><td>$bk_status</td><td>$bk_ip</td></tr>";
        }
    } else {
        echo "0 结果";
    }
    $conn->close();

    ?>
</table>

<form action="root_Guided.php" method="post">
    <input type="submit" value="返回">
</form>


</body>
</html>
