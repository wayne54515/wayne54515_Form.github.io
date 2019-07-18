<?php 


$link = new mysqli("127.0.0.1", "root", "0000", "dbmsgboard") or die("連接失敗");

// echo "連接成功";
// $email;
// $password;
// if($link){
$email = $_POST['email'];
$password = $_POST['password'];
    // echo "連接成功";
// }

if(($email!=null)&($password!=null)){
    $sql = "select * from user where email='$email'and password='$password'";
    $result=mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    // print_r ($row);
    if (empty($row)){
        echo '信箱未註冊';
    }
    else{
        // $row = mysqli_fetch_array($result);
        // print_r ($row);
        echo "success";
    }
}
else if($email == null){
    echo "信箱未填寫";
}
else{
    echo "密碼未填寫";
}
    

 

$link->close();


?> 

