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
    echo "<br>";
    ?>
</span>

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

$bk_id =$_POST["bk_id"];


$conn->query("set names 'utf8';");

$sql = "DELETE FROM st_information WHERE bk_id=$bk_id";

if ($conn->query($sql) === TRUE) {
    echo "还书成功";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$status="在架";

$upsql = "UPDATE books SET bk_status='$status' WHERE bk_id = $bk_id ";
$result = mysqli_query($conn,$upsql);
if(!$result){
    echo "更新失败<br>";
}
else{
    echo "成功更新数据<br>";

}

$conn->close();
?>

<form action="Returning_books.php" method="post">
    <input type="submit" value="返回上一页">
</form>
<form action="st_Guided_copy.php" method="post">
    <input type="submit" value="返回主页">
</form>

