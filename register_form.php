<?php 

$link = new mysqli("127.0.0.1", "root", "0000", "dbmsgboard") or die("連接失敗");

// echo "連接成功";

// if($link){
$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$color = $_POST['color'];
$sex = $_POST['sex'];
// }
    // echo "連接成功";

// echo $_POST["email"];


// echo $name;
// echo $email;
// echo $password;
// echo $confirm;
// echo $color;
// echo $sex;
if(($password == $confirm) & ($username!=null) & ($email!=null) & ($password!=null)){
    $sql = "select * from user where name='$username'";
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($result);
    if(empty($row)){
        $sql = "select * from user where email='$email'";
        $result = mysqli_query($link, $sql);
        $row = mysqli_fetch_array($result);
        // echo empty($row);

        if(empty($row)){
            $sql = "insert into user(id, type, name, email, password, color, sex) values (null, 'normal', '$username', '$email', '$password', '$color', '$sex')";
            $reslut=mysqli_query($link, $sql);
            if (!$reslut){
                // die('Error: ' . mysql_error());
                die('Database Error');
            }
            else{
                echo "success";
            }
            // echo "success";
        }
        else{
            echo "信箱已被註冊";
        }
    }
    else{
        echo "名字已被註冊";
    }
           
}
else if(!$username){
    echo "名字不能為空";
}
else if(!$email){
    echo "信箱不能為空";
}
else if(!$password){
    echo "密碼不能為空";
}
else{
    echo "認證密碼不同";
}



$link->close()

?>