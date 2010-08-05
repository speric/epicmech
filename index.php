<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<html>
<head>
  	<title>EPIC Mechanical Contractors, LLC</title>
  	<link rel="stylesheet" href="stylesheets/epic.css"/>
	<meta name="description" content="Specializing in the design, development, installation and servicing of HVAC systems in commerical & residential buildings.">
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
	<script type="text/javascript">

  		var _gaq = _gaq || [];
  		_gaq.push(['_setAccount', 'UA-1120529-22']);
  		_gaq.push(['_trackPageview']);

  		(function() {
   			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  		})();
	</script>
</head>
<body>
<div align="center">
     	<div id="main_container">
        	<div id="menu_container">
			<div id="menu" align="left">
				<div>
					<div id="epic_logo" align="center"><a href="/" class="white">EPIC Mechanical Contractors</a></div>
					<div id="menu_links" align="center">
						<table id="links_table">
							<tr>
								<td><img src="images/h.png"/></td><td class="links_cell"><a href="/" class="white">Home</a></td>
								<td><img src="images/p.png"/></td><td class="links_cell"><a href="/projects" class="white">Projects</a></td>
								<td><img src="images/r.png"/></td><td class="links_cell"><a href="/references" class="white">References</a></td>
								<td><img src="images/a.png"/></td><td class="links_cell"><a href="/aboutus" class="white">About Us</a></td>
								<td><img src="images/t.png"/></td><td class="links_cell"><a href="/team" class="white">Team</a></td>
								<td><img src="images/c.png"/></td><td class="links_cell"><a href="/contact" class="white">Contact</a></td>
							</tr>
						</table>
					</div>
					<div style="clear: both;"></div>
				</div>
        		</div>
		</div>

		<!-- content here -->
		<div id="content_container" align="left">
			<?php						
				if($_REQUEST['page'] == "home" || empty($_REQUEST['page'])){
					require_once('home.php');
				}else{
					require_once($_REQUEST['page'].'.php');
				}
			?>
		</div>
		<!-- end content -->

		<div id="footer" align="left">
			<div id="address">
				<strong>EPIC Mechanical Contractors, LLC</strong><br/>
				<span class="footer_gray">76-78 Mall Drive</br>
				Commack, NY 11725<br/>
				Phone: <strong>(631) 993-0080</strong><br/>
				Fax: <strong>(631) 993-0081</strong></span>
			</div>
			<div id="hours">
				<strong>Office Hours</strong><br/>
				<span class="footer_gray">Monday - Friday</br>
				7:00am - 5:00pm
			</div>
			<div id="bottom_links">
				<span class="footer_gray">Home | Projects | References | About Us | Team | Contact</span>
			</div>
			<div style="clear: both;"></div>
		</div>
	</div>
</div>
</body>
</html>