<html>
<head>
    <meta charset="utf-8">
    <title>所有借阅信息(book.com)</title>
</head>
<body>


<table style='text-align:left;' border='1'>
    <th><th>学号</th><th>姓名</th><th>书号</th><th>借书时间</th><th>应还时间</th></tr>
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
    $sql = "SELECT * FROM st_information ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 输出数据
        while($sql_arr = $result->fetch_assoc()) {
            $st_id = $sql_arr['st_id'];
            $st_name = $sql_arr['st_name'];
            $bk_id = $sql_arr['bk_id'];
            $bk_brtm = $sql_arr['bk_brtm'];
            $bk_rttm = $sql_arr['bk_rttm'];
            echo "<td><td>$st_id</td><td>$st_name</td><td>$bk_id</td><td>$bk_brtm</td><td>$bk_rttm</td></tr>";
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