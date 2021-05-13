<?php



    $connection= mysqli_connect("localhost","root","");
	$db= mysqli_select_db($connection, "cvs");


   
    $query = "update patient set total_cases=$_POST[tc], currently_sick=$_POST[cs], discharged=$_POST[di], dead=$_POST[de] where area_code='A' ";
	$query_run= mysqli_query($connection, $query);
   
?>

<script type="text/javascript">
alert("Details alerted successfully");
//window.location.href="MPALogin.php";

</script>