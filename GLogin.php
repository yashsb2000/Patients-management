<html>
<head>
<title>
Government Login
</title>
<?php
session_start();

    $connection= mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection, "cvs");
	

?>

</head>
<body>
<center>
<h1> This is the Government login page</h1>


<form name="f1" action="" method="post">
Enter user-name : <input type="text" name="t1" required><br><br>
Enter password : <input type="password" name="p1" required><br><br>
<input type="submit" name="b1" value="Login">
</form>


<?php

if(isset($_POST['b1'])){

	$connection= mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection, "cvs");
	$query = "select * from GLogin where user_name= '$_POST[t1]'";
	$query_run= mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($query_run))
	{
		if($row['user_name']== $_POST['t1'])
			
		{
			if($row['password']== $_POST['p1'])
			{
				echo "Login successful !";
				header("Location: GPLogin.php");
			}
			else{
				echo "User-name and password do not match";
			}
			
		}
		else{
			echo "The user-name does not exist";
		}
	}
	
	
	
    }


?>


</center>
</body>
</html>