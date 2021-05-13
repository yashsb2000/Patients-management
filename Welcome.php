<html>
<title>Welcome </title>
<body>
<center>


<form action="" method="post">
<h1>Welcome !</h1>
<h2>Select one :<h2> <br>
       
        <input type="submit" value ="Government Employee" name="n1" style="height:30px; width:150px">
        <input type="submit" value="Medical Professional" name="n2" style="height:30px; width:150px">
        <input type="submit" value="Citizen" name="n3" style="height:30px; width:150px">
        

</form>

<?php
if(isset($_POST['n1'])){
  header("Location: GLogin.php");
} 

if(isset($_POST['n2'])){
  header("Location: MLogin.php");
} 

if(isset($_POST['n3'])){
	header("Location: CLogin.php");
}

 
?>
</center>
</body>
</html>