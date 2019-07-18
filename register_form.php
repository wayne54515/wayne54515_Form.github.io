<?php 

$link = new mysqli("127.0.0.1", "root", "0000") or die("連接失敗");

echo "連接成功";

if( !mysqli_select_db($link, "dbmsgboard")){
    die ("無法選擇資料庫");
}
else
    echo "連接成功";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$color = $_POST['color'];
$sex = $_POST['sex'];
// echo $name;
// echo $eamil;
// echo $password;
// echo $confirm;
// echo $color;
// echo $sex;
if(($password == $confirm)){
    $sql = "insert into user(id, type, name, email, password, color, sex) values (null, 'normal', '$name', '$email', '$password', '$color', '$sex')";
    $reslut=mysqli_query($link, $sql);
    if (!$reslut){
        die('Error: ' . mysql_error());
    }
    else{
        echo "註冊成功";
    }    
}
else{
    echo "註冊失敗";
}



$link->close()

?>