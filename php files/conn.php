<?php
$servername="local host";
$username="root";
$dbname="portfolio";

$conn=new mysqli($servername,$username,$dbname);
if($conn->connect error){
die("connection failed:".$conn->connect error);
}
echo "connected successfully";
?>