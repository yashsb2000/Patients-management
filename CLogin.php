<html>
<body>
<center>
<h1> Any sick person in your family ???</h1><br><br>

<script>
function fun1()
{
document.getElementById("y").checked=false;
document.getElementById("n").checked=false;
}
function fun2()
{
if(document.getElementById("y").checked==false && document.getElementById("n").checked==false)
{
alert("You should select alteast one !");
return false;
}
else if(document.getElementById("n").checked==true)
{
open("No.php");
close("PLogin.php");
}
else
{
open("Symptoms.php");
close("PLogin.php");
}
}
</script>

<form name="f1" id="ml">
<h1><input type="radio" name="n1" value="yes" id="y" > YES
<input type="radio" name="n1" value="no" id="n"> NO <br><br>
<input type="button" name="b1" value="Clear" onclick="fun1()" style="height:50px; width:100px" >
<input type="button" name="b2" value="Confirm" onclick="fun2()" style="height:50px; width:100px" >
</h1>

</form>
</center>
</body>
</html>