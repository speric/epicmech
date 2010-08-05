<html>
<head>
  <title>EPIC Mechanical Contractors, LLC</title>
  <link rel="stylesheet" href="stylesheets/epic.css"/>
  <script src="javascript/jquery-1.4.2.min.js"></script>
  <script src="javascript/jquery-ui-1.8.2.custom.min.js"></script>
  <script>
	function showHide(spacer){
		if ($(spacer).css('display') == "block"){
			$(spacer).slideUp();
		}else{
			$(spacer).slideDown();
		}		
	}
  </script>
</head>
<body>
  <div align="center">
     	<div style="width: 1070px; height: 826px; background-image: url('images/bg.png');background-repeat: no-repeat;">
        <div style="width: 100%; height: 40px; background-color: #242424;">
		<div style="width: 880px;" align="left">
			<div>
				<div style="float: left; background-color:#343434; font-weight: bold; width: 200px; height: 28px;padding-top: 12px;" align="center">EPIC Mechanical Contractors</div>
				<div style="float: left;height: 42px;padding-top: 8px; padding-left: 100px;" align="center">
			<table style="font-size: 12px;">
			<tr>
				<td><img src="images/h.png"/></td><td style="padding-right: 20px;">Home</td>
				<td><img src="images/p.png"/></td><td style="padding-right: 20px;">Projects</td>
				<td><img src="images/r.png"/></td><td style="padding-right: 20px;">References</td>
				<td><img src="images/a.png"/></td><td style="padding-right: 20px;">About Us</td>
				<td><img src="images/t.png"/></td><td style="padding-right: 20px;">Team</td>
				<td><img src="images/c.png"/></td><td style="padding-right: 20px;">Contact</td>
			</tr>
			</table>
			</div>
			<div style="clear: both;"></div>
		</div>
        </div>

<!-- content here -->
<div style="width: 880px; margin-top: 20px;" align="left">
<?php						
if($_REQUEST['page'] == "home" || empty($_REQUEST['page'])){
	require_once('home.php');
}else{
	require_once($_REQUEST['page'].'.php');
}
?>
</div>
<!-- end content -->
<div class="footer" align="left" style="font-size: 12px; width: 880px; padding-top: 25px;">
	<div>
		<div style="float: left;">
			<strong>EPIC Mechanical Contractors, LLC</strong><br/>
			<span class="footer_gray">76-78 Mall Drive</br>
			Commack, NY 11725<br/>
			Phone: <strong>(631) 993-0080</strong><br/>
			Fax: <strong>(631) 993-0081</strong></span>
		</div>
		<div style="float: left; padding-left: 50px;">12:05 PM 8/5/2010
			<strong>Office Hours</strong><br/>
			<span class="footer_gray">Monday - Friday</br>
			7:00am - 5:00pm
		</div>
		<div style="float: left; padding-left: 225px;">
			<span class="footer_gray">Home | Projects | References | About Us | Team | Contact</span>
		</div>
		<div style="clear: both;"></div>
	</div>
</div>
</body>

</html>