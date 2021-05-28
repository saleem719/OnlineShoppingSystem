<?php


echo "<h2><b><center> Edit Advertisments</center></b></h2><br>";

if(isset($_GET['advid']))
{
	$adv = $_GET['advid'];
	$advertise = get_a_advs($adv);
	}
?>

<form action="index.php?alink=aadvertisment/update.php" method="post" enctype="multipart/form-data">
<h3>ID:<h3>
<input type="text" name="txtId" size="8" readonly value="<?php echo $advertise[0]['ID'];?>"><br><br>

<h3>Website Link:</h3>
<input type="text" name="txtLink" size="40" value="<?php  echo $advertise[0]['Link'];?>"><br><br>

<h3>Image Path :</h3>
<input type="text" name="txtIpath" size="40" readonly value="<?php  echo $advertise[0]['Image'];?>"><br><br>

<h3>Status: <select name="txtActive">
  <?php
			  if($advertise[0]['IsActive']=='Y')
			  {
		    ?>
            
<option value="Y" selected>Active</option>
<option value="N">Inactive</option>

  <?php
			  }
		else
		{
			?>
       <option value="Y">Active</option>
       <option value="N"  selected>Inactive</option>
		<?php
		}
		?></select></h3><br>

<h3>Change image:</h3>
<input type="file" name="txtImages"><br><br><br>

<input type="submit" name="btnUpdate" value="Update"><br>

 </form>