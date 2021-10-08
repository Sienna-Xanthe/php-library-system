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
$brtm = date("Y-m-d");
$tt=date_create($brtm);
date_add($tt,date_interval_create_from_date_string("60 days"));
$rttm=date_format($tt,"Y-m-d");

echo $rttm;
$conn->query("set names 'utf8';");

$sql = "INSERT INTO st_information (st_id, st_name, bk_id, bk_brtm, bk_rttm)  VALUES('$st_id', '$st_name', $bk_id,'$brtm','$rttm' )";

if ($conn->query($sql) === TRUE) {
    echo "借书成功<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$status="被借";

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


<form action="Borrowing_books.php" method="post">
    <input type="submit" value="返回上一页">
</form>
<form action="st_Guided_copy.php" method="post">
    <input type="submit" value="返回主页">
</form>

