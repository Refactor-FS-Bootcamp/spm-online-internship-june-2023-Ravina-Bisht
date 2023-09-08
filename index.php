<?php
$server= "localhost";
$username="root";
$password="";
$con=mysqli_connect($server, $username, $password);

if(!$con){
    die("connection to db failed due to". mysqli_connect_error());
}
//echo "Suessfully connectedmfsf to db.";

$name = $_POST['name'];
$Email= $_POST['Email'];
$Password= $_POST['Password'];
$sql= "INSERT INTO `login` (`name`, `Email`, `Password`, `dt`) VALUES ('$name', '$Email', '$Password',
current_timestamp());";
echo $sql;
?>
