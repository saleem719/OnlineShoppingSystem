<?php
include 'include/config.php';
include 'include/functions.php';
?>

<html>
<head>
<title>Damas Jewellery</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252"/>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/javas.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
		var productId;
		
		Slider();
		
		$(".button").click(function(){
			productId = this.id;
			
			$.ajax({
		  		type: "POST",
		  		url: 'pages/order.php',   
		  		data: {"productId": productId},
		  		success: function (result) {
			 		console.log(result);
				}
	 		});		
		});
		
		
		 $(".list1").click(function(){
			 var id = this.id;
			$('.mainProducts').children('div.bottom-div').hide();
			
			$('.mainProducts').children('div.bottom-div').each(function () {
				var value = $(this).data('value');
				
				if (value == id){
					$(this).show();
				}
				
			});
		});
		
	});
	
	
	function Slider()
	{
		$("#im1").animate({opacity:'1'},7000,"linear",
		function(){$("#im1").animate({opacity:'.1'},7000,"linear",
		function(){$("#im2").animate({opacity:'1'},7000,"linear",
		function(){$("#im2").animate({opacity:'.1'},7000,"linear",
		function(){$("#im3").animate({opacity:'1'},7000,"linear",
		function(){$("#im3").animate({opacity:'.1'},7000,"linear",Slider)
		});
		});
		});
		});
		});
		
	}
	
</script>
</head>
<body>
<div id="main_container">
<div class="header">
<div id="logo"><a href="#"><img src="images/logo.png" alt="" border="0" width="204" height="113" /></a></div>    
<div id="menu_tab">
<?php
include 'sub/Menu_nav.php';
?> </div> <!-- end of menu tab -->


<div class="Slider">
<?php
include 'sub/slider.php';
?>
</div>                               <!-- end of Slider-->
</div>                               <!-- end of header -->

<div id="main_content">
<div class="center_content">
<?php
include 'sub/mainbar.php';
?>
</div>                              <!-- end of center content -->


<div class="right_content">
<?php
include 'sub/right_bar.php';
?>
</div>                              <!-- end of right content -->
</div>                              <!-- end of main content -->

<div class="footer">
<?php include 'sub/footer.php';?>
</div>

</div>                      <!-- end of main container -->


</body>
</html>

