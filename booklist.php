
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Bookshop</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
<link href="registration/demo.css" rel="stylesheet" type="text/css" />
<link href="registration/style.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<script src="js/bootstrap.min.js"></script></head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<ul>
			<li class="current_page_item"><a href="index.php">Home</a></li>
			<!--<li><a href="register.php">Register</a></li>-->
			<li><a href="register.php">Register</a></li>			
			
			<li class="last"><a href="contact.php">Contact</a></li>
			<li class="last"><a href="aboutme.php">About Us</a></li>
			<li><a href="viewcart.php">View Cart</a></li>
			
</ul>					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
												</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title">Astrology</h1>
									<div class="entry">
										
										<table border="4" width="100%" >
											<br><br><br><br><br>
											<tr><td valign="top" width="20%" align="center">
														<a href="detail.php?id=5&cat=Astrology">
														<img src="upload_image/ASTRO1.jpg" width="80" height="100">
														<br>YOGIS, DESTINY & THE WHEEL OF TIME </a>
													</td>											
										</table>
										
										
										<br><br><br>
										<center>
										&nbsp;&nbsp;<a href="booklist.php?subcatid=5&subcatnm=Astrology&page=1">1</a>&nbsp;&nbsp;										</center>
									</div>
									
								</div>
								
							</div>
					<!-- end content -->
					
					<!-- start sidebar -->
							<div id="sidebar">
									<ul>
			<li id="login">
				
						<form action="process_login.php" method="POST">
										<h2>LogIn</h2>
											<b>Username:</b>
											<br><input type="text" name="usernm"><br>
											<br>
											
											
											<b>Password:</b>
											<br><input type="password" name="pwd">
											<input type="submit" id="x" value="Login" />
										</form>			</li>

			<li id="search">
				<h2>Search</h2>
				<form method="GET" action="search_result.php">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Categories</h2>
				<ul>
					
					
					<!--
					<li><a href="#">Economics</a></li>
					<li><a href="#">Fiction</a></li>
					<li><a href="#">Forestry & WildLife</a></li>
					<li><a href="#">Health & Physics</a></li>
					<li><a href="#">Historical</a></li>
					<li><a href="#">Social</a></li>
					<li><a href="#">Sports & Physical Education</a></li>
					<li><a href="#">Terrorism</a></li>
					<li><a href="#">Tourism</a></li>
					<li><a href="#">Tracking </a></li>
					<li><a href="#">Yoga</a></li>
					-->
								<li><a href="subcat.php?cat=1&catnm=Architecture">Architecture</a></li><li><a href="subcat.php?cat=2&catnm=Art And Culture">Art And Culture</a></li><li><a href="subcat.php?cat=5&catnm=Astrology">Astrology</a>				</ul>
			</li>
			
		</ul>							</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
				
			<!-- start footer -->
				<div id="footer">
							<div id="footer-wrap">
	<p id="legal">Design by Rishabh Sharma</p>
	</div>				</div>
			<!-- end footer -->
</body>
</html>
