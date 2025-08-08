<?php
$conn = mysqli_connect("localhost", "root", "", "itlab");

if($conn){
    die("connection failed");
}

$username = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE id= '$id'  AND password ='$password'";
$result = mysql_query($conn, $sql);

if (mysql_num_rows($result) > 0){
    echo"success = )";
    exit();
}else{
    echo"Login failed!";
}

mysql_close($conn);
?>