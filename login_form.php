<?php 


$link = new mysqli("127.0.0.1", "root", "0000") or die("連接失敗");

echo "連接成功";

if( !mysqli_select_db($link, "dbmsgboard")){
    die ("無法選擇資料庫");
}
else
    echo "連接成功";

$sql = "select * from 'user' where email='$email'and password='$password'";
$reslut=mysqli_query($link, $sql);
if (!$reslut){
    die('Error: ' . mysql_error());
}
else{
    echo "登入成功";
} 

$link->close();


?> 

