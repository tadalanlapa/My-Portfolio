session_start();
$servername="localhost";
$username="root";
$dbName="portfolio";
$conn=new mysqli($servername,$username,$dbName);
if ($conn->connect_error){
die("connection failed:" .$conn->connect_error);
}
else{
echo"connected successfully<br/>";
}
if($_SERVER["REQUEST_METHOD"]=="POST"){
$email=$_POST["email"];
$name=$_POST["name"];
$password=$_POST["password"];
$sql="SELECT *FROM user WHERE email='$email' ,password='$password'AND name='$name'";
$result=$conn->query($sql);
if ($result->num-rows ==1){
$row=$result->fetch_assoc();
$_SESSION["id"]=$row["id"];
$_SESSION["username"]=$row["username"];
$_SESSION["firstname"]=$row["firstname"];
$_SESSION["surname"]=$row["surname"];
echo "user has logged in successfully!";
}else{
echo "invalid  username!";
}
}