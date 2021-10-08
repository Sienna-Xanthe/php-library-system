借阅信息
<span style="font-size:18px;"><?php
    //session赋值
    if (!session_id())
        session_start();

    //session值的读取:
    $st_id = $_SESSION['st_id'];
    $st_name = $_SESSION['st_name'];

    echo  "<br>";
    echo "学号：";
    echo $st_id;
    echo "<br>";
    echo "姓名：";
    echo $st_name;
    ?>
</span>



<html>
<head>
    <meta charset="utf-8">
    <title>个人借阅信息(book.com)</title>
</head>
<body>


<table style='text-align:left;' border='1'>
    <th><th>书号</th><th>借书时间</th><th>应还时间</th></tr>
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
    $sql = "SELECT * FROM st_information WHERE st_id = {$st_id}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // 输出数据
        while($sql_arr = $result->fetch_assoc()) {
            $st_id = $sql_arr['st_id'];
            $st_name = $sql_arr['st_name'];
            $bk_id = $sql_arr['bk_id'];
            $bk_brtm = $sql_arr['bk_brtm'];
            $bk_rttm = $sql_arr['bk_rttm'];
            echo "<td><td>$bk_id</td><td>$bk_brtm</td><td>$bk_rttm</td></tr>";
        }
    } else {
        echo "0 结果";
    }
    $conn->close();

    ?>
</table>

<form action="st_Guided_copy.php" method="post">
    <input type="submit" value="返回主页">
</form>




</body>
</html>