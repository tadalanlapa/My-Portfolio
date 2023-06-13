session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>registration form login</title>
<style>
ul{
display:flex;
list-style:none;
justify-content:space-around;
}
h1{
margin-top:100px;
text-align:center;
}
</style>
</head>
<body>
<?php if
(isset($_SESSION["username"])):?>
<h1>nav</h1>
<?php else:?>
<nav>
<ul>
<li><a href="conectionPage.php">login</a></li>
<li><a href="registerPage.php">register</a></li>
<li><a href="">logout</a></li>
</ul>
</nav>
<?php end if;?>
<h1>welcome to my register system</h1>
</body>
</html>


<form action ="registrationform.php" method ="post">
<label>email</label>
<input type="email" name="email">
<label>password</label>
<input type="name" name="name">
<label>name</label>
<input type="password" name="passsword">
<input type="submit" value="register">
</form>
</body>
</html>

