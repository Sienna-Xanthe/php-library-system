图书新增

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

$bk_name=$_POST["add_bk_name"];
$bk_author=$_POST["add_bk_author"];
$bk_price=$_POST["add_bk_price"];
$bk_publisher=$_POST["add_bk_publisher"];
$bk_status="在架";
$bk_ip=$_POST["add_bk_ip"];




$conn->query("set names 'utf8';");

$sql = "INSERT INTO books (bk_name, bk_author, bk_price, bk_publisher, bk_status,bk_ip)  VALUES('$bk_name', '$bk_author', $bk_price, '$bk_publisher', '$bk_status','$bk_ip' )";

if ($conn->query($sql) === TRUE) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<form action="root_Guided.php" method="post">
    <input type="submit" value="返回">
</form>



