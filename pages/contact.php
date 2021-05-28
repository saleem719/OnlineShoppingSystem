<html>
<head>
<title>Contact us</title>
<script type="text/javascript">

 var divs = new Array();
     divs[0] = "errfname";
	 divs[1] = "erremail";
	 divs[2] = "errsubject";
	 divs[3] = "errfrom";
	 divs[4] = "errmessage";


function keyUpFunction()
{
	var inputs = new Array();
	    inputs[0] = document.getElementById("name").value;
		inputs[1] = document.getElementById("mail").value;
		inputs[2] = document.getElementById("subject").value;
		inputs[3] = document.getElementById("from").value;
		inputs[4] = document.getElementById("Message").value;
		
		
	var errors = new Array();
		errors[0] = "<span style='color:#F00;'>Name Req!</span>";
		errors[1] = "<span style='color:#F00;'>Email Address Req!</span>";
		errors[2] = "<span style='color:#F00;'>Subject Req!</span>";
		errors[3] = "<span style='color:#F00;'>From!</span>";
		errors[4] = "<span style='color:#F00;'>Message Req!</span>";
		
		
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
			
			else if(i==2)
			{
				if(inputs[2]==0)
				{
					document.getElementById("errsubject").innerHTML=err;
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
					document.getElementById("errfrom").innerHTML=err;
				}
				else
				{
					document.getElementById(div).innerHTML = "OK!";
				}
			}
			
			
	else if(i==4)
			{	
				if(inputs[4]==0)
				{
					document.getElementById("errmessage").innerHTML=err ;
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
	
	for(c=0; c<4; c++)
	{
		var div = divs[c];
		
		if(document.getElementById(div).innerHTML == "OK!")
		{
			count = count + 1;
		}
		
	}
	
	if(count ==4)
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
<br>
<div class="contactForm">
<center><table width="50%" id="Cform">
<form action="index.php?mlink=mailme.php" method="post">
	<tr>
    	<td nowrap>Name :</td>
        <td><input type="text" name="txtName" id="name" placeholder="Name...." size="40" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errfname"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>Email : </td>
        <td><input type="text"  name="txtMail" id="mail" size="40" placeholder="Email..." onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="erremail"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>Subject : </td>
        <td><input type="text" name="txtSubject" id="subject" placeholder="Subject..." size="40" onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errsubject"></div></td>
    </tr>
    
    <tr>
    	<td nowrap>From :</td>
        <td><input type="text" name="txtFrom" id="from" size="40" placeholder="From...." onKeyUp="keyUpFunction()"></td>
        <td nowrap><div id="errfrom"></div></td>
    </tr>
    
     <tr>
          <td nowrap>Your Message</td>
          <td><textarea  name="txtMessage" id="Message" rows="8" cols="42" placeholder="Your message here ..." onKeyUp="keyUpFunction()"></textarea></td>
        <td><div id="errmessage"></div></td>
    </tr>
      <tr>
      <td>&nbsp;</td>
    </tr>
  
         <tr>	
        <td colspan="3" align="center"><input type="submit" name="btnSend" value="Send" 
             onClick="return finalValidate()">
            <div id="errfinal"></div>
        </td>
    </tr>
</form>
</table>
<center>
</div>