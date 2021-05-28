<div class="welcomeBar">Welcome to Damas Diamond Jewellery Online Shopping System </div><br>
<div id="logStyle">
<br><br>
<fieldset style="width:350px; background-color:grey; border-radius:6px;">
<legend align="center"><img src="images/login_icon.png" height="100" width="110"></legend>
<table id="loginCSS">
<!--br>
<br>
<h2 align="center"></h2><br-->

<form action="index.php?mlink=userverify.php" method="post">
<tr><td>&nbsp;</td></tr>
<tr><td>Enter Login ID :</td><td> <input type="text" name="txtLoginId"></td></tr>
<tr><td>Enter Password :</td><td><input type="password" name="txtPass"></td></tr>
<tr><td>&nbsp;&nbsp;</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="btnLogin" value="Login">&nbsp;&nbsp;
<a href="index.php?mlink=Signup.php">SignUp</a></td></tr>
</form>
</table>
</fieldset>
<?php
if(isset($_GET['message']))
{
	$mes = $_GET['message'];
	
	echo '<h4><font color=red>&nbsp;&nbsp;&nbsp;&nbsp; Error! &nbsp;'.$mes.'</font></h4>';
	
	}
?>
</div>
<br><br><hr>
