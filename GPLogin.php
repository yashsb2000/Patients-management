<html>
<head>
<title>
Government Post Login
</title>

<?php
session_start();

    $connection= mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection, "cvs");
	

?>

</head>
<body>
<center>
<h1> Government Access</h1>

<form action="" method="post">
<input type="submit" name="b1" value="Search by area"> 
</form>

<a href="logout.php"> Logout</a><br><br><br><br>

<?php
if(isset($_POST['b1']))
{
?>
<center>
<form action="" method="post">
Enter the area code :
<input type="text" name="t1"><br><br>
<input type="submit" name="search_area" value="Search">
</form>

</center>
<?php
}

if(isset($_POST['search_area']))
{
	$query = "select * from patient where area_code= '$_POST[t1]'";
	$query_run= mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($query_run))
	{
		?>
		<table>
		<tr>
		<td><b>Area code </b></td>
		<td><input type="text" value= "<?php echo $row['area_code'];?>" disabled></td>
		</tr>
		
		<tr>
		<td><b>Currently sick</b></td>
		<td><input type="text" value= "<?php echo $row['currently_sick'];?>" disabled></td>
		</tr>
		
		<tr>
		<td><b>Total cases </b></td>
		<td><input type="text" value= "<?php echo $row['total_cases'];?>" disabled></td>
		</tr>
		
		<tr>
		<td><b>Discharged </b></td>
		<td><input type="text" value= "<?php echo $row['discharged'];?>" disabled></td>
		</tr>
		
		<tr>
		<td><b>Dead </b></td>
		<td><input type="text" value= "<?php echo $row['dead'];?>" disabled></td>
		</tr>
		
		
		</table>
		<?php
	}

}

?>

</body>
</html>