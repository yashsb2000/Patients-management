<html>
<body>
<center>
<h1> This is the login page</h1>


<form name="f1" action="" method="post">
Enter user-name : <input type="text" name="t1"><br><br>
Enter password : <input type="password" name="p1"><br><br>
<input type="submit" name="b1" value="Login">
</form>


<?php

$user_name= $_POST['t1'];
$password= $_POST['p1'];


if(isset($_POST['b1'])){
	
	if(empty($user_name) || empty($password))
	{
		echo "You did not fill out the required fields";
	}
	
    else
	{
	header("Location: PLogin.php");
    }

}
?>


</center>
</body>
</html>