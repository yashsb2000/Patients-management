<html>
<head>
<title>
Medical Post Login for C
</title>
<?php
session_start();

    $connection= mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection, "cvs");
?>
</head>
<body>
<center>
<h1> Medical Access for C</h1>

<?php
    $query = "select * from patient where area_code= 'C'";
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
	
	?>
	<br><br><br><br>
	
	
<form action="" method="post">
<input type="submit" name="edit" value="Edit">
</form>

<?php
if(isset($_POST['edit']))
{
	$query = "select * from patient where area_code= 'C'";
	$query_run= mysqli_query($connection, $query);
	while($row=mysqli_fetch_assoc($query_run))
	{
		?>
		<form action="" method="post">
		<table>
		<tr>
		<td><b>Area code </b></td>
		<td><input type="text" value= "<?php echo $row['area_code'];?>" disabled></td>
		</tr>
		
		<tr>
		<td><b>Currently sick</b></td>
		<td><input type="text" name="cs" value= "<?php echo $row['currently_sick'];?>" ></td>
		</tr>
		
		<tr>
		<td><b>Total cases </b></td>
		<td><input type="text" name="tc" value= "<?php echo $row['total_cases'];?>" ></td>
		</tr>
		
		<tr>
		<td><b>Discharged </b></td>
		<td><input type="text" name="di" value= "<?php echo $row['discharged'];?>" ></td>
		</tr>
		
		<tr>
		<td><b>Dead </b></td>
		<td><input type="text" name="de" value= "<?php echo $row['dead'];?>" ></td>
		</tr>
		</table> <br><br><br><br>
		
      <input type="submit" name="save" value="save">
	  </form>
			

		
	
		
		
		
		
		
	  	<?php
	}
}
?>
<?php
	 if(isset($_POST['save']))
	 {
		 
	  $query = "update patient set total_cases=$_POST[tc], currently_sick=$_POST[cs], discharged=$_POST[di], dead=$_POST[de] where area_code='C' ";
	  $query_run= mysqli_query($connection, $query);
	 }
   
	?>

        
		


<br><br><br><br><br><br><br><br><br>
<a href="logout.php"> Logout</a>



</center>
</body>
</html>