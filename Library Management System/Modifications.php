图书修改

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


$bk_id =$_POST["m_bk_id"];
$bk_name =$_POST["m_bk_name"];
$bk_author =$_POST["m_bk_author"];
$bk_price =$_POST["m_bk_price"];
$bk_publisher =$_POST["m_bk_publisher"];
$bk_ip =$_POST["m_bk_ip"];


$conn->query("set names 'utf8';");

$sql = "UPDATE books
        SET bk_name='$bk_name',
            bk_author='$bk_author',
            bk_price='$bk_price',
            bk_publisher='$bk_publisher',
            bk_ip='$bk_ip'
        WHERE bk_id=$bk_id";

if ($conn->query($sql) === TRUE) {
    echo "修改图书成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>


<form action="root_Guided.php" method="post">
    <input type="submit" value="返回">
</form>


