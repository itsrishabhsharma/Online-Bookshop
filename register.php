



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
			<li class="last"><a href="aboutme.php">About Me</a></li>
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
									<h1 class="title">Welcome to Registeration.</h1>
						
									<div class="entry">
									<br><br>
																			
										<table>
											<form action="process_register.php" method="POST">
												<tr>
													<td><b>Full Name :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='fnm'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>User Name :</b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Password :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pwd' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Confirm Password:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpwd' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gender:</b>&nbsp;&nbsp;</td>
													<td><input type="radio"  value="Male" name="gender" id='m'><label> Male</label>&nbsp;&nbsp;&nbsp;
														<input type="radio" value="Female" name="gender" id='f'><label>Female</label></td>
														<td>&nbsp;</td>
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>E-mail Address:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='mail' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Contact No.:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='contact' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="city">
														
															<option>Ahmedabad
															<option>Baroda
															<option>Jamnagar
															<option>Rajkot
															<option>Porbandar
															<option>Anand
															<option>Surat
															<option>Surendranagar
															<option>Jamnagar
															<option>Junagadh
															<option>Amreli
															<option>Bhavnagar
															<option>Mehsana
															
														
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='2' align='center'>
														<input type='submit' value="  OK  ">
													</td>
												</tr>
											</form>
										</table>
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
								<li><a href="subcat.php?cat=1&catnm=Architecture">Architecture</a></li><li><a href="subcat.php?cat=2&catnm=Art And Culture">Art And Culture</a></li><li><a href="subcat.php?cat=5&catnm=Astrology">Astrology</a></li>				</ul>
			</li>
			
		</ul>						</div>
						<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
			<div id="footer">
						<div id="footer-wrap">
	<p id="legal">Design by Rishabh Sharma</p>
	</div>			</div>
			<!-- end footer -->
</body>
</html>
