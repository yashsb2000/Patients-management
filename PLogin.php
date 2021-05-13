<html>
<body>
<h1> Any sick person in your family ???</h1>

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
open("No.html");
close("PLogin.php");
}
else
{
open("Symptoms.html");
close("PLogin.php");
}
}
</script>

<form name="f1" id="ml">
<input type="radio" name="n1" value="yes" id="y"> Yes 
<input type="radio" name="n1" value="no" id="n"> No <br><br>
<input type="button" name="b1" value="Clear" onclick="fun1()" >
<input type="button" name="b2" value="Confirm" onclick="fun2()" >

</form>
</body>
</html>