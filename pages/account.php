<?php

if(!isset($_SESSION['user']))
{
	
        echo"<script>window.location='index.php?mlink=Mainlogin.php' </script>";
	
	}
	
else{

?>


<div class="center_title_bar"> Profile Details </div>  <br> <br><br><br> 
<br> <br><br><br> 
<?php
if(isset($_GET['messeage']))
{
	$mes = $_GET['messeage'];
	echo"<font color=red>".$mes."</font>";
	}
	?></br></br>

<fieldset>  
<legend style="font-size:18px; color: #090; font-weight:bolder;"> Personal Details </legend>
</br></br>
<table cellpadding="5" cellspacing="6" width="95%">
<form action="index.php?mlink=saveprofile.php" method="post">
<tr style="background-color: #CCC; width:95%">
<td>Name:</td>
<td><input type="text" readonly value="<?php echo $_SESSION['fname']."&nbsp;". $_SESSION['lname'] ?>">&nbsp;&nbsp;
Customer ID:<input type="text" name="txtId" readonly value="<?php echo $_SESSION['user']?>"></td>
</tr>

<tr>
<tr  style="background-color:#FFC;"><td>Email Address:</td>
<td><input type="text" name="txtMail" value="<?php echo $_SESSION['mail'] ?>"></td></tr>

<tr  style="background-color: #CCC;"><td>Mobile Number:</td>
<td><input type="text" name="txtMobile" value="<?php echo $_SESSION['mobile']?>"></td></tr>

<tr  style="background-color:#FFC;"><td>Address :</td>
<td><textarea cols="40" rows="4" name="txtAddress"><?php echo  $_SESSION['address']?></textarea></td><tr>

<tr  style="background-color: #CCC;"><td>Login ID:</td>
<td><input type="text" name="txtLid" value="<?php echo $_SESSION['loginid']?>"></td>

<tr  style="background-color:#FFC;"><td>Password:</td>
<td><input type="password" name="txtPass" value="<?php echo $_SESSION['pass']?>"></td>
</tr>
<tr><td>&nbsp;</td></tr>
<tr>
<td align="center" colspan="2"><input type="submit" class="updateprofile" name="btnEdit" value="Update Profile Detail"></td> 
</table>
</form>
</fieldset> 
<br><hr><br>
<?php
}
?>
</body>
</html>