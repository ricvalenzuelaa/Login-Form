<?php
$conn = mysqli_connect("localhost", "root", "", "itlab");

if(!$conn){
    die("connection failed");
}

$id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE id= '$id'  AND password ='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo"success = )";
    exit();
}else{
    echo"Login failed!";
}

mysqli_close($conn);

?>

