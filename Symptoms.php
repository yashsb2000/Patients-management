<html>
<body>

<h1> Select all the symptoms which the sick person is showing : </h1><br><br><br><br>
<script>
var a,b,c,d,e,f,g,h,i,j,k;
function fun1()
{

a=document.getElementById("s1").checked=false;
b=document.getElementById("s2").checked=false;
c=document.getElementById("s3").checked=false;
d=document.getElementById("s4").checked=false;
e=document.getElementById("s5").checked=false;
f=document.getElementById("s6").checked=false;
g=document.getElementById("s7").checked=false;
h=document.getElementById("s8").checked=false;
i=document.getElementById("s9").checked=false;
j=document.getElementById("s10").checked=false;

}     
function fun3()
{
document.getElementById("s1").checked=true;
document.getElementById("s2").checked=true;
document.getElementById("s3").checked=true;
document.getElementById("s4").checked=true;
document.getElementById("s5").checked=true;
document.getElementById("s6").checked=true;
document.getElementById("s7").checked=true;
document.getElementById("s8").checked=true;
document.getElementById("s9").checked=true;
document.getElementById("s10").checked=true;

}


function fun2()
{
var a1=document.getElementById("s1").checked;
var a2=document.getElementById("s2").checked;
var a3=document.getElementById("s3").checked;
var a4=document.getElementById("s4").checked;
var a5=document.getElementById("s5").checked;
var a6=document.getElementById("s6").checked;
var a7=document.getElementById("s7").checked;
var a8=document.getElementById("s8").checked;
var a9=document.getElementById("s9").checked;
var a10=document.getElementById("s10").checked;

if (a1==true || a2==true || a3==true || a4==true || a5==true || a6==true ||  a7==true || a8==true || a9==true || a10==true )
{
var x=confirm("Do you wish to proceed ??");
if(x==true)
{
if(a1==true && a2==true && a3==true && a4==true && a5==true && a6==true && a7==true && a8==true && a9==true && a10==true)
{
close("Symptoms.html");
open("Proceed1.php");
return true;
}
else
{
close("Symptoms.html");
open("Proceed2.php");
}
}
else
{
return false;
}
}
else
{
alert("You must select alteast one of the above before proceeding !");
return false;
}
}


</script>                                                 
                                                                   
<form name="f1">
 <input type="checkbox" name="symptoms" class="syms" value="s1" id="s1"> Fever <br>
<input type="checkbox" name="symptoms" class="syms" value="s2" id="s2">  Fatigue <br>
<input type="checkbox" name="symptoms" class="syms" value="s3" id="s3"> Dry cough <br>
<input type="checkbox" name="symptoms" class="syms" value="s4" id="s4"> Loss of appetite <br>
<input type="checkbox" name="symptoms" class="syms" value="s5" id="s5"> Body aches <br>
<input type="checkbox" name="symptoms" class="syms" value="s6" id="s6"> Shortness of breath <br>
<input type="checkbox" name="symptoms" class="syms" value="s7" id="s7"> Sore throat <br>
<input type="checkbox" name="symptoms" class="syms" value="s8" id="s8"> Loss of smell or taste <br>
<input type="checkbox" name="symptoms" class="syms" value="s9" id="s9"> Nausea or vomiting <br>
<input type="checkbox" name="symptoms" class="syms" value="s10" id="s10"> Diarrhea <br><br><br><br>

<input type="button" value="Select all" onclick="fun3()" style="align:center;">
<input type="button" value="Clear all" onclick="fun1()" style="align:center;">    
       <input type="button" value="Confirm" onclick="fun2()" style="align:center;">

  
</form>

</body>
</script>