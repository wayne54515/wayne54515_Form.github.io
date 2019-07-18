<!-- <!DOCTYPE html>
<html> -->
<?php 


$link = new mysqli("127.0.0.1", "root", "0000", "dbmsgboard") or die("連接失敗");


$sql = "select * from user";
$result=mysqli_query($link, $sql);

if (!$result){
    die('no data');
}
else{
    while($row = mysqli_fetch_array($result)){
        echo '<tr>
                <td style="color:'.$row["color"].'">'.$row["name"].'</td>
                <td>'.$row["email"].'</td>
                <td>'.$row["sex"].'</td>
            </tr>';
        // print_r($row["name"]);
    }
} 

$link->close();


?>
<!-- </html> -->

