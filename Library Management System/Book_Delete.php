图书下架

<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "mylibrary";

// 创建连接

$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$bk_id =$_POST["de_bk_id"];


$conn->query("set names 'utf8';");

$sql = "DELETE FROM books WHERE bk_id=$bk_id";

if ($conn->query($sql) === TRUE) {
    echo "删除成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


<form action="root_Guided.php" method="post">
    <input type="submit" value="返回">
</form>

