<!doctype html>
<html>
<head>
<title>Untitled Document</title>

<script type="text/javascript">

 var divs = new Array();
     divs[0] = "errfname";
	 divs[1] = "errsname";
	 divs[2] = "erremail";
	 divs[3] = "errlid";
	 divs[4] = "errmob";
	 divs[5] = "errpass";
	 divs[6] = "errcpass";
	 divs[7] = "erraddress";


function keyUpFunction()
{
	var inputs = new Array();
	    inputs[0] = document.getElementById("fname").value;
		inputs[1] = document.getElementById("sname").value;
		inputs[2] = document.getElementById("email").value;
		inputs[3] = document.getElementById("lid").value;
		inputs[4] = document.getElementById("mobile").value;
		inputs[5] = document.getElementById("pass").value;
		inputs[6] = document.getElementById("cpass").value;
		inputs[7] = document.getElementById("address").value;
		
		
	var errors = new Array();
		errors[0] = "<span style='color:#F00;'>First Name Required!</span>";
		errors[1] = "<span style='color:#F00;'>Last Name Required!</span>";
		errors[2] = "<span style='color:#F00;'>Email Required!</span>";
		errors[3] = "<span style='color:#F00;'>LoginId Required!</span>";
		errors[4] = "<span style='color:#F00;'> Mobile Number Required!</span>";
		errors[5] = "<span style='color:#F00;'>Password Required!</span>";
		errors[6] = "<span style='color:#F00;'>Confirm Password Req!</span>";
		errors[7] = "<span style='color:#F00;'>Address Required!</span>";
		
		
		for(var i in inputs)
		{
			var div = divs[i];
			var err = errors[i];
			
			if(i==0)
			{
				if(inputs[0]==0)
				{
	document.getElementById("errfname").innerHTML=err;
			}
			else{
				document.getElementById(div).innerHTML =  "OK!";
			}
		}
			
			else if(i==1)
			{
				if(inputs[1]==0)
				{
	document.getElementById("errsname").innerHTML=err;
			}
			else{
				document.getElementById(div).innerHTML =  "OK!";
			}
		}
			
			
			else if(i==2)
			{
				var atpos = inputs[i].indexOf("@");
				var dotpo = inputs[i].lastIndexOf(".");
				
				if(atpos<1 || dotpo<atpos+2 || dotpo+2>inputs[i].length)
				{
					document.getElementById("erremail").innerHTML="<span style='color:#F00;'>Email Format Incorrect!</span>";
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
			else if(i==3)
			{
				if(inputs[3]==0)
				{
					document.getElementById("errlid").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
			else if(i==4)
			{	
			   var len = inputs[4].length;
				
				if(len<10 || len>15)
				{
					document.getElementById("errmob").innerHTML="<span style='color:#F00;'>Invalid mobile number!</span>";
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
	else if(i==5)
			{	
				if(inputs[5]==0)
				{
					document.getElementById("errpass").innerHTML=err ;
				}
				else
			{
				document.getElementById(div).innerHTML = "OK!";
			}
		}
		
		
	else if(i==6)
			{	
				var pa = inputs[5];
				var cp = inputs[6];
				
				if(cp!=pa)
				{
					document.getElementById("errcpass").innerHTML="<span style='color:#F00;'>Password not matched!</span>";
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
		
		
	else if(i==7)
			{	
				if(inputs[7]==0)
				{
					document.getElementById("erraddress").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
		}
}

function finalValidate()
{
	
	valid = false;
	var c;
	var count = 0;
	
	for(c=0; c<7; c++)
	{
		var div = divs[c];
		
		if(document.getElementById(div).innerHTML == "OK!")
		{
			count = count + 1;
		}
		
	}
	
	if(count ==7)
	{
		valid = true;
	}
	else
	{
		valid=false;
		document.getElementById("errfinal").innerHTML="<span style='color:#F00;'> Please fill above fields</span>";
		
	}
	
	return valid;
}


</script>
</head>
<body>
<div class="welcomeBar">Register to Damas Diamond Jewellery Online Shopping System </div><br>
<div id="wrapper">
<table width="50%" border="0" id="RegMem">
<form action="index.php?mlink=signup.php" method="post">
	<tr>
    	<td nowrap>Enter First Name</td>
        <td><input type="text" name="txtFirstName" id="fname" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errfname"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>Enter Last Name:</td>
        <td><input type="text"  name="txtLastName" id="sname" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errsname"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>Enter Email :</td>
        <td><input type="text" name="txtEmail" id="email" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="erremail"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>Enter Login ID :</td>
        <td><input type="text" name="txtLoginId" id="lid" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errlid"></div></td>
    </tr>
    
    
     <tr>
    	<td nowrap>Mobile No : </td>
        <td><input type="text" name="txtMobile" id="mobile" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errmob"></div></td>
    </tr>
    
    
     <tr>
    	<td nowrap>Enter Password : </td>
        <td><input type="password" name="txtPass" id="pass" size="31" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errpass"></div></td>
    </tr>
    
      <tr>
    	<td nowrap>Confirm Password : </td>
        <td><input type="password" name="txtCpass" size="31" id="cpass" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errcpass"></div></td>
    </tr>
    <tr><td></td><tr>
    
     <tr>
    	<td nowrap>Enter Address :</td>
        <td><textarea cols="30" rows="5" name="txtAddress" id="address" onKeyUp="keyUpFunction()"></textarea></td>
        <td nowrap><div id="erraddress"></div></td>
    </tr>
  
         <tr>	
        <td colspan="3" align="center"><input type="submit" name="btnSignUp" value="SignUp" onClick="return finalValidate()">
         &nbsp; &nbsp; &nbsp;<a href="index.php?mlink=Mainlogin.php">LogIn</a>
            <div id="errfinal"></div>
        </td>
    </tr>
    <tr><td></td><tr>
    
</form>
</table>
</div>
<?php
if(isset($_POST['btnSignUp']))
{
	$fname =   $_POST['txtFirstName'];
	$sname =   $_POST['txtLastName'];
	$email =   $_POST['txtEmail'];
	$lid   =   $_POST['txtLoginId'];
	$mob   =   $_POST['txtMobile'];
	$pass  =   $_POST['txtPass'];
	$adr   =   $_POST['txtAddress'];
	$check = check_user($lid,$pass);
    if($check == false)
	{	
	   add_user($fname,$sname,$email,$lid,$mob,$pass,$adr);
	echo"<script>window.location='index.php?mlink=signup.php&Mess=User Registered successfully' </script>";
	}
	else
	{
	    $M ='User Already Exists';
		echo"<script>window.location='index.php?mlink=signup.php&Mess=Failed to register' </script>";
	}	
}
if(isset($_GET['Mess']))
{
	$Mess = $_GET['Mess'];
	echo "<h2><font color='red'>".$Mess."</font></h2>";
}
?>
</body>
</html>